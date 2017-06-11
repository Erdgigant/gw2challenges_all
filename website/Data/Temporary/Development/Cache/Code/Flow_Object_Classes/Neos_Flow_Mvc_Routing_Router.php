<?php 
namespace Neos\Flow\Mvc\Routing;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\Http\Request;
use Neos\Flow\Log\SystemLoggerInterface;
use Neos\Flow\Mvc\Exception\InvalidRouteSetupException;
use Neos\Flow\Mvc\Exception\NoMatchingRouteException;

/**
 * The default web router
 *
 * @Flow\Scope("singleton")
 * @api
 */
class Router_Original implements RouterInterface
{
    /**
     * @Flow\Inject
     * @var SystemLoggerInterface
     */
    protected $systemLogger;

    /**
     * @Flow\Inject
     * @var ConfigurationManager
     */
    protected $configurationManager;

    /**
     * @Flow\Inject
     * @var RouterCachingService
     */
    protected $routerCachingService;

    /**
     * Array containing the configuration for all routes
     *
     * @var array
     */
    protected $routesConfiguration = null;

    /**
     * Array of routes to match against
     *
     * @var array
     */
    protected $routes = [];

    /**
     * TRUE if route object have been created, otherwise FALSE
     *
     * @var boolean
     */
    protected $routesCreated = false;

    /**
     * @var Route
     */
    protected $lastMatchedRoute;

    /**
     * @var Route
     */
    protected $lastResolvedRoute;

    /**
     * Sets the routes configuration.
     *
     * @param array $routesConfiguration The routes configuration or NULL if it should be fetched from configuration
     * @return void
     */
    public function setRoutesConfiguration(array $routesConfiguration = null)
    {
        $this->routesConfiguration = $routesConfiguration;
        $this->routesCreated = false;
    }

    /**
     * Iterates through all configured routes and calls matches() on them.
     * Returns the matchResults of the matching route or NULL if no matching
     * route could be found.
     *
     * @param Request $httpRequest The web request to be analyzed. Will be modified by the router.
     * @return array The results of the matching route or NULL if no route matched
     */
    public function route(Request $httpRequest)
    {
        $cachedMatchResults = $this->routerCachingService->getCachedMatchResults($httpRequest);
        if ($cachedMatchResults !== false) {
            return $cachedMatchResults;
        }
        $this->lastMatchedRoute = null;
        $this->createRoutesFromConfiguration();

        /** @var $route Route */
        foreach ($this->routes as $route) {
            if ($route->matches($httpRequest) === true) {
                $this->lastMatchedRoute = $route;
                $matchResults = $route->getMatchResults();
                if ($matchResults !== null) {
                    $this->routerCachingService->storeMatchResults($httpRequest, $matchResults);
                }
                $this->systemLogger->log(sprintf('Router route(): Route "%s" matched the path "%s".', $route->getName(), $httpRequest->getRelativePath()), LOG_DEBUG);
                return $matchResults;
            }
        }
        $this->systemLogger->log(sprintf('Router route(): No route matched the route path "%s".', $httpRequest->getRelativePath()), LOG_NOTICE);
        return null;
    }

    /**
     * Returns the route that has been matched with the last route() call.
     * Returns NULL if no route matched or route() has not been called yet
     *
     * @return Route
     */
    public function getLastMatchedRoute()
    {
        return $this->lastMatchedRoute;
    }

    /**
     * Returns a list of configured routes
     *
     * @return array
     */
    public function getRoutes()
    {
        $this->createRoutesFromConfiguration();
        return $this->routes;
    }

    /**
     * Manually adds a route to the beginning of the configured routes
     *
     * @param Route $route
     * @return void
     */
    public function addRoute(Route $route)
    {
        $this->createRoutesFromConfiguration();
        array_unshift($this->routes, $route);
    }

    /**
     * Builds the corresponding uri (excluding protocol and host) by iterating
     * through all configured routes and calling their respective resolves()
     * method. If no matching route is found, an empty string is returned.
     * Note: calls of this message are cached by RouterCachingAspect
     *
     * @param array $routeValues Key/value pairs to be resolved. E.g. array('@package' => 'MyPackage', '@controller' => 'MyController');
     * @return string
     * @throws NoMatchingRouteException
     */
    public function resolve(array $routeValues)
    {
        $cachedResolvedUriPath = $this->routerCachingService->getCachedResolvedUriPath($routeValues);
        if ($cachedResolvedUriPath !== false) {
            return $cachedResolvedUriPath;
        }

        $this->lastResolvedRoute = null;
        $this->createRoutesFromConfiguration();

        /** @var $route Route */
        foreach ($this->routes as $route) {
            if ($route->resolves($routeValues)) {
                $this->lastResolvedRoute = $route;
                $resolvedUriPath = $route->getResolvedUriPath();
                if ($resolvedUriPath !== null) {
                    $this->routerCachingService->storeResolvedUriPath($resolvedUriPath, $routeValues);
                }
                return $resolvedUriPath;
            }
        }
        $this->systemLogger->log('Router resolve(): Could not resolve a route for building an URI for the given route values.', LOG_WARNING, $routeValues);
        throw new NoMatchingRouteException('Could not resolve a route and its corresponding URI for the given parameters. This may be due to referring to a not existing package / controller / action while building a link or URI. Refer to log and check the backtrace for more details.', 1301610453);
    }

    /**
     * Returns the route that has been resolved with the last resolve() call.
     * Returns NULL if no route was found or resolve() has not been called yet
     *
     * @return Route
     */
    public function getLastResolvedRoute()
    {
        return $this->lastResolvedRoute;
    }

    /**
     * Creates \Neos\Flow\Mvc\Routing\Route objects from the injected routes
     * configuration.
     *
     * @return void
     * @throws InvalidRouteSetupException
     */
    protected function createRoutesFromConfiguration()
    {
        if ($this->routesCreated === true) {
            return;
        }
        $this->initializeRoutesConfiguration();
        $this->routes = [];
        $routesWithHttpMethodConstraints = [];
        foreach ($this->routesConfiguration as $routeConfiguration) {
            $route = new Route();
            if (isset($routeConfiguration['name'])) {
                $route->setName($routeConfiguration['name']);
            }
            $uriPattern = $routeConfiguration['uriPattern'];
            $route->setUriPattern($uriPattern);
            if (isset($routeConfiguration['defaults'])) {
                $route->setDefaults($routeConfiguration['defaults']);
            }
            if (isset($routeConfiguration['routeParts'])) {
                $route->setRoutePartsConfiguration($routeConfiguration['routeParts']);
            }
            if (isset($routeConfiguration['toLowerCase'])) {
                $route->setLowerCase($routeConfiguration['toLowerCase']);
            }
            if (isset($routeConfiguration['appendExceedingArguments'])) {
                $route->setAppendExceedingArguments($routeConfiguration['appendExceedingArguments']);
            }
            if (isset($routeConfiguration['httpMethods'])) {
                if (isset($routesWithHttpMethodConstraints[$uriPattern]) && $routesWithHttpMethodConstraints[$uriPattern] === false) {
                    throw new InvalidRouteSetupException(sprintf('There are multiple routes with the uriPattern "%s" and "httpMethods" option set. Please specify accepted HTTP methods for all of these, or adjust the uriPattern', $uriPattern), 1365678427);
                }
                $routesWithHttpMethodConstraints[$uriPattern] = true;
                $route->setHttpMethods($routeConfiguration['httpMethods']);
            } else {
                if (isset($routesWithHttpMethodConstraints[$uriPattern]) && $routesWithHttpMethodConstraints[$uriPattern] === true) {
                    throw new InvalidRouteSetupException(sprintf('There are multiple routes with the uriPattern "%s" and "httpMethods" option set. Please specify accepted HTTP methods for all of these, or adjust the uriPattern', $uriPattern), 1365678432);
                }
                $routesWithHttpMethodConstraints[$uriPattern] = false;
            }
            $this->routes[] = $route;
        }
        $this->routesCreated = true;
    }

    /**
     * Checks if a routes configuration was set and otherwise loads the configuration from the configuration manager.
     *
     * @return void
     */
    protected function initializeRoutesConfiguration()
    {
        if ($this->routesConfiguration === null) {
            $this->routesConfiguration = $this->configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_ROUTES);
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Mvc\Routing;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * The default web router
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class Router extends Router_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Mvc\Routing\Router') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Mvc\Routing\Router', $this);
        if (get_class($this) === 'Neos\Flow\Mvc\Routing\Router') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Mvc\Routing\RouterInterface', $this);
        if ('Neos\Flow\Mvc\Routing\Router' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __sleep()
    {
            $result = NULL;
        $this->Flow_Object_PropertiesToSerialize = array();

        $transientProperties = array (
);
        $propertyVarTags = array (
  'systemLogger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'configurationManager' => 'Neos\\Flow\\Configuration\\ConfigurationManager',
  'routerCachingService' => 'Neos\\Flow\\Mvc\\Routing\\RouterCachingService',
  'routesConfiguration' => 'array',
  'routes' => 'array',
  'routesCreated' => 'boolean',
  'lastMatchedRoute' => 'Neos\\Flow\\Mvc\\Routing\\Route',
  'lastResolvedRoute' => 'Neos\\Flow\\Mvc\\Routing\\Route',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Mvc\Routing\Router') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Mvc\Routing\Router', $this);
        if (get_class($this) === 'Neos\Flow\Mvc\Routing\Router') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Mvc\Routing\RouterInterface', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\SystemLoggerInterface', 'Neos\Flow\Log\Logger', 'systemLogger', '717e9de4d0309f4f47c821b9257eb5c2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Configuration\ConfigurationManager', 'Neos\Flow\Configuration\ConfigurationManager', 'configurationManager', 'f559bc775c41b957515dc1c69b91d8b1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Configuration\ConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Routing\RouterCachingService', 'Neos\Flow\Mvc\Routing\RouterCachingService', 'routerCachingService', '8fc40685a308919d1842ba4fb253c576', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Routing\RouterCachingService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'systemLogger',
  1 => 'configurationManager',
  2 => 'routerCachingService',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/Mvc/Routing/Router.php
#
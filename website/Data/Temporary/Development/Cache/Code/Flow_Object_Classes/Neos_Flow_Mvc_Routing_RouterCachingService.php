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
use Neos\Cache\CacheAwareInterface;
use Neos\Cache\Frontend\StringFrontend;
use Neos\Cache\Frontend\VariableFrontend;
use Neos\Flow\Http\Request;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Log\SystemLoggerInterface;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Utility\Arrays;
use Neos\Flow\Validation\Validator\UuidValidator;

/**
 * Caching of findMatchResults() and resolve() calls on the web Router.
 *
 * @Flow\Scope("singleton")
 */
class RouterCachingService_Original
{
    /**
     * @var VariableFrontend
     * @Flow\Inject
     */
    protected $routeCache;

    /**
     * @var StringFrontend
     * @Flow\Inject
     */
    protected $resolveCache;

    /**
     * @var PersistenceManagerInterface
     * @Flow\Inject
     */
    protected $persistenceManager;

    /**
     * @var SystemLoggerInterface
     * @Flow\Inject
     */
    protected $systemLogger;

    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @Flow\InjectConfiguration("mvc.routes")
     * @var array
     */
    protected $routingSettings;

    /**
     * @return void
     */
    public function initializeObject()
    {
        // flush routing caches if in Development context & routing settings changed
        if ($this->objectManager->getContext()->isDevelopment() && $this->routeCache->get('routingSettings') !== $this->routingSettings) {
            $this->flushCaches();
            $this->routeCache->set('routingSettings', $this->routingSettings);
        }
    }

    /**
     * Checks the cache for the route path given in the Request and returns the result
     *
     * @param Request $httpRequest
     * @return array|boolean the cached route values or FALSE if no cache entry was found
     */
    public function getCachedMatchResults(Request $httpRequest)
    {
        $cachedResult = $this->routeCache->get($this->buildRouteCacheIdentifier($httpRequest));
        if ($cachedResult !== false) {
            $this->systemLogger->log(sprintf('Router route(): A cached Route with the cache identifier "%s" matched the path "%s".', $this->buildRouteCacheIdentifier($httpRequest), $httpRequest->getRelativePath()), LOG_DEBUG);
        }

        return $cachedResult;
    }

    /**
     * Stores the $matchResults in the cache
     *
     * @param Request $httpRequest
     * @param array $matchResults
     * @return void
     */
    public function storeMatchResults(Request $httpRequest, array $matchResults)
    {
        if ($this->containsObject($matchResults)) {
            return;
        }
        $tags = $this->generateRouteTags($httpRequest->getRelativePath(), $matchResults);
        $this->routeCache->set($this->buildRouteCacheIdentifier($httpRequest), $matchResults, $tags);
    }

    /**
     * Checks the cache for the given route values and returns the cached resolvedUriPath if a cache entry is found
     *
     * @param array $routeValues
     * @return string|boolean the cached request path or FALSE if no cache entry was found
     */
    public function getCachedResolvedUriPath(array $routeValues)
    {
        $routeValues = $this->convertObjectsToHashes($routeValues);
        if ($routeValues === null) {
            return false;
        }
        return $this->resolveCache->get($this->buildResolveCacheIdentifier($routeValues));
    }

    /**
     * Stores the $uriPath in the cache together with the $routeValues
     *
     * @param string $uriPath
     * @param array $routeValues
     * @return void
     */
    public function storeResolvedUriPath($uriPath, array $routeValues)
    {
        $uriPath = trim($uriPath, '/');
        $routeValues = $this->convertObjectsToHashes($routeValues);
        if ($routeValues === null) {
            return;
        }

        $cacheIdentifier = $this->buildResolveCacheIdentifier($routeValues);
        if ($cacheIdentifier !== null) {
            $tags = $this->generateRouteTags($uriPath, $routeValues);
            $this->resolveCache->set($cacheIdentifier, $uriPath, $tags);
        }
    }

    /**
     * @param string $uriPath
     * @param array $routeValues
     * @return array
     */
    protected function generateRouteTags($uriPath, $routeValues)
    {
        $uriPath = trim($uriPath, '/');
        $tags = $this->extractUuids($routeValues);
        $path = '';
        $uriPath = explode('/', $uriPath);
        foreach ($uriPath as $uriPathSegment) {
            $path .= '/' . $uriPathSegment;
            $path = trim($path, '/');
            $tags[] = md5($path);
        }

        return $tags;
    }

    /**
     * Flushes 'route' and 'resolve' caches.
     *
     * @return void
     */
    public function flushCaches()
    {
        $this->routeCache->flush();
        $this->resolveCache->flush();
    }

    /**
     * Flushes 'findMatchResults' and 'resolve' caches for the given $tag
     *
     * @param string $tag
     * @return void
     */
    public function flushCachesByTag($tag)
    {
        $this->routeCache->flushByTag($tag);
        $this->resolveCache->flushByTag($tag);
    }

    /**
     * Flushes 'findMatchResults' caches that are tagged with the given $uriPath
     *
     * @param string $uriPath
     * @return void
     */
    public function flushCachesForUriPath($uriPath)
    {
        $uriPathTag = md5(trim($uriPath, '/'));
        $this->flushCachesByTag($uriPathTag);
    }

    /**
     * Checks if the given subject contains an object
     *
     * @param mixed $subject
     * @return boolean TRUE if $subject contains an object, otherwise FALSE
     */
    protected function containsObject($subject)
    {
        if (is_object($subject)) {
            return true;
        }
        if (!is_array($subject)) {
            return false;
        }
        foreach ($subject as $value) {
            if ($this->containsObject($value)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Recursively converts objects in an array to their identifiers
     *
     * @param array $routeValues the array to be processed
     * @return array the modified array or NULL if $routeValues contain an object and its identifier could not be determined
     */
    protected function convertObjectsToHashes(array $routeValues)
    {
        foreach ($routeValues as &$value) {
            if (is_object($value)) {
                if ($value instanceof CacheAwareInterface) {
                    $identifier = $value->getCacheEntryIdentifier();
                } else {
                    $identifier = $this->persistenceManager->getIdentifierByObject($value);
                }
                if ($identifier === null) {
                    return null;
                }
                $value = $identifier;
            } elseif (is_array($value)) {
                $value = $this->convertObjectsToHashes($value);
                if ($value === null) {
                    return null;
                }
            }
        }
        return $routeValues;
    }

    /**
     * Generates the Matching cache identifier for the given Request
     *
     * @param Request $httpRequest
     * @return string
     */
    protected function buildRouteCacheIdentifier(Request $httpRequest)
    {
        return md5(sprintf('%s_%s_%s', $httpRequest->getUri()->getHost(), $httpRequest->getRelativePath(), $httpRequest->getMethod()));
    }

    /**
     * Generates the Resolve cache identifier for the given Request
     *
     * @param array $routeValues
     * @return string
     */
    protected function buildResolveCacheIdentifier(array $routeValues)
    {
        Arrays::sortKeysRecursively($routeValues);
        return md5(trim(http_build_query($routeValues), '/'));
    }

    /**
     * Helper method to generate tags by taking all UUIDs contained
     * in the given $routeValues or $matchResults
     *
     * @param array $values
     * @return array
     */
    protected function extractUuids(array $values)
    {
        $uuids = [];
        foreach ($values as $value) {
            if (is_string($value)) {
                if (preg_match(UuidValidator::PATTERN_MATCH_UUID, $value) !== 0) {
                    $uuids[] = $value;
                }
            } elseif (is_array($value)) {
                $uuids = array_merge($uuids, $this->extractUuids($value));
            }
        }
        return $uuids;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Mvc\Routing;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Caching of findMatchResults() and resolve() calls on the web Router.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class RouterCachingService extends RouterCachingService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Mvc\Routing\RouterCachingService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Mvc\Routing\RouterCachingService', $this);
        if ('Neos\Flow\Mvc\Routing\RouterCachingService' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Flow\Mvc\Routing\RouterCachingService';
        if ($isSameClass) {
            $this->initializeObject(1);
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
  'routeCache' => 'Neos\\Cache\\Frontend\\VariableFrontend',
  'resolveCache' => 'Neos\\Cache\\Frontend\\StringFrontend',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'systemLogger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'routingSettings' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Mvc\Routing\RouterCachingService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Mvc\Routing\RouterCachingService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Flow\Mvc\Routing\RouterCachingService';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Flow\Mvc\Routing\RouterCachingService', $classParents) !== FALSE && array_search('Doctrine\ORM\Proxy\Proxy', $classImplements) !== FALSE;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('', '', 'routeCache', '9161c72b450176b1b2d8313f8236ded4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager')->getCache('Flow_Mvc_Routing_Route'); });
        $this->Flow_Proxy_LazyPropertyInjection('', '', 'resolveCache', 'eab686b91d348f646ec1b007cc80a9e5', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager')->getCache('Flow_Mvc_Routing_Resolve'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\SystemLoggerInterface', 'Neos\Flow\Log\Logger', 'systemLogger', '717e9de4d0309f4f47c821b9257eb5c2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->routingSettings = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.routes');
        $this->Flow_Injected_Properties = array (
  0 => 'routeCache',
  1 => 'resolveCache',
  2 => 'persistenceManager',
  3 => 'systemLogger',
  4 => 'objectManager',
  5 => 'routingSettings',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/Mvc/Routing/RouterCachingService.php
#
<?php 
namespace Neos\Flow\Cache\Backend;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Core\ApplicationContext;

/**
 * @deprecated Use \Neos\Cache\Backend\FileBackend instead
 */
class FileBackend_Original extends \Neos\Cache\Backend\FileBackend implements FlowSpecificBackendInterface
{
    use BackendCompatibilityTrait;

    /**
     * Constructs this backend
     *
     * @param ApplicationContext $context Flow's application context
     * @param array $options Configuration options - depends on the actual backend
     */
    public function __construct(ApplicationContext $context, array $options = [])
    {
        $this->context = $context;
        $environmentConfiguration = $this->createEnvironmentConfiguration($context);
        parent::__construct($environmentConfiguration, $options);
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Cache\Backend;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * 
 */
class FileBackend extends FileBackend_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     * @param ApplicationContext $context Flow's application context
     * @param array $options Configuration options - depends on the actual backend
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Core\ApplicationContext');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $context in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        call_user_func_array('parent::__construct', $arguments);
        if ('Neos\Flow\Cache\Backend\FileBackend' === get_class($this)) {
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
  'cacheEntryFileExtension' => 'string',
  'cacheEntryIdentifiers' => 'array',
  'frozen' => 'boolean',
  'cacheDirectory' => 'string',
  'useIgBinary' => 'boolean',
  'cacheFilesIterator' => '\\DirectoryIterator',
  'baseDirectory' => 'string',
  'cache' => 'Neos\\Cache\\Frontend\\FrontendInterface',
  'cacheIdentifier' => 'string',
  'defaultLifetime' => 'integer',
  'environmentConfiguration' => 'Neos\\Cache\\EnvironmentConfiguration',
  'context' => 'Neos\\Flow\\Core\\ApplicationContext',
  'environment' => 'Environment',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectEnvironment(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Utility\Environment'));
        $this->Flow_Injected_Properties = array (
  0 => 'environment',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/Cache/Backend/FileBackend.php
#
<?php 
namespace Neos\Flow\Property\TypeConverter;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\Mapping\Entity;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Property\PropertyMappingConfigurationInterface;
use Neos\Flow\Reflection\ReflectionService;

/**
 * A type converter which converts a scalar type (string, boolean, float or integer) to an object by instantiating
 * the object and passing the string as the constructor argument.
 *
 * This converter will only be used if the target class has a constructor with exactly one argument whose type must
 * be the given type.
 *
 * @Flow\Scope("singleton")
 */
class ScalarTypeToObjectConverter_Original extends AbstractTypeConverter
{
    /**
     * @var array
     */
    protected $sourceTypes = ['string', 'integer', 'float', 'bool'];

    /**
     * @var string
     */
    protected $targetType = 'object';

    /**
     * @var int
     */
    protected $priority = 10;

    /**
     * @Flow\Inject
     * @var ReflectionService
     */
    protected $reflectionService;

    /**
     * Only convert if the given target class has a constructor with one argument being of type given type
     *
     * @param string $source
     * @param string $targetType
     * @return bool
     */
    public function canConvertFrom($source, $targetType)
    {
        if ((
            $this->reflectionService->isClassAnnotatedWith($targetType, Flow\Entity::class) ||
            $this->reflectionService->isClassAnnotatedWith($targetType, Flow\ValueObject::class) ||
            $this->reflectionService->isClassAnnotatedWith($targetType, Entity::class)
        ) === true) {
            return false;
        }

        $methodParameters = $this->reflectionService->getMethodParameters($targetType, '__construct');
        if (count($methodParameters) !== 1) {
            return false;
        }
        $methodParameter = array_shift($methodParameters);
        return $methodParameter['type'] === gettype($source);
    }

    /**
     * Convert the given simple type to an object
     *
     * @param string|float|integer|bool $source
     * @param string $targetType
     * @param array $convertedChildProperties
     * @param PropertyMappingConfigurationInterface|null $configuration
     * @return object
     */
    public function convertFrom($source, $targetType, array $convertedChildProperties = [], PropertyMappingConfigurationInterface $configuration = null)
    {
        return new $targetType($source);
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Property\TypeConverter;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A type converter which converts a scalar type (string, boolean, float or integer) to an object by instantiating
 * the object and passing the string as the constructor argument.
 * 
 * This converter will only be used if the target class has a constructor with exactly one argument whose type must
 * be the given type.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class ScalarTypeToObjectConverter extends ScalarTypeToObjectConverter_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Property\TypeConverter\ScalarTypeToObjectConverter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Property\TypeConverter\ScalarTypeToObjectConverter', $this);
        if ('Neos\Flow\Property\TypeConverter\ScalarTypeToObjectConverter' === get_class($this)) {
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
  'sourceTypes' => 'array',
  'targetType' => 'string',
  'priority' => 'integer',
  'reflectionService' => 'Neos\\Flow\\Reflection\\ReflectionService',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Property\TypeConverter\ScalarTypeToObjectConverter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Property\TypeConverter\ScalarTypeToObjectConverter', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'reflectionService',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/Property/TypeConverter/ScalarTypeToObjectConverter.php
#
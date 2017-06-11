<?php 
namespace Neos\FluidAdaptor\ViewHelpers\Format;

/*
 * This file is part of the Neos.FluidAdaptor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Wrapper for PHPs json_encode function.
 *
 * = Examples =
 *
 * <code title="encoding a view variable">
 * {someArray -> f:format.json()}
 * </code>
 * <output>
 * ["array","values"]
 * // depending on the value of {someArray}
 * </output>
 *
 * <code title="associative array">
 * {f:format.json(value: {foo: 'bar', bar: 'baz'})}
 * </code>
 * <output>
 * {"foo":"bar","bar":"baz"}
 * </output>
 *
 * <code title="non-associative array with forced object">
 * {f:format.json(value: {0: 'bar', 1: 'baz'}, forceObject: true)}
 * </code>
 * <output>
 * {"0":"bar","1":"baz"}
 * </output>
 *
 * @api
 */
class JsonViewHelper_Original extends AbstractViewHelper
{
    /**
     * @var boolean
     */
    protected $escapeChildren = false;

    /**
     * Outputs content with its JSON representation. To prevent issues in HTML context, occurrences
     * of greater-than or less-than characters are converted to their hexadecimal representations.
     *
     * If $forceObject is TRUE a JSON object is outputted even if the value is a non-associative array
     * Example: array('foo', 'bar') as input will not be ["foo","bar"] but {"0":"foo","1":"bar"}
     *
     * @param mixed $value The incoming data to convert, or NULL if VH children should be used
     * @param boolean $forceObject Outputs an JSON object rather than an array
     * @return string the JSON-encoded string.
     * @see http://www.php.net/manual/en/function.json-encode.php
     * @api
     */
    public function render($value = null, $forceObject = false)
    {
        return self::renderStatic(array('value' => $value, 'forceObject' => $forceObject), $this->buildRenderChildrenClosure(), $this->renderingContext);
    }

    /**
     * Applies json_encode() on the specified value.
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return string
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $value = $arguments['value'];
        if ($value === null) {
            $value = $renderChildrenClosure();
        }
        $options = JSON_HEX_TAG;
        if ($arguments['forceObject'] !== false) {
            $options = $options | JSON_FORCE_OBJECT;
        }

        return json_encode($value, $options);
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\FluidAdaptor\ViewHelpers\Format;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Wrapper for PHPs json_encode function.
 * 
 * = Examples =
 * 
 * <code title="encoding a view variable">
 * {someArray -> f:format.json()}
 * </code>
 * <output>
 * ["array","values"]
 * // depending on the value of {someArray}
 * </output>
 * 
 * <code title="associative array">
 * {f:format.json(value: {foo: 'bar', bar: 'baz'})}
 * </code>
 * <output>
 * {"foo":"bar","bar":"baz"}
 * </output>
 * 
 * <code title="non-associative array with forced object">
 * {f:format.json(value: {0: 'bar', 1: 'baz'}, forceObject: true)}
 * </code>
 * <output>
 * {"0":"bar","1":"baz"}
 * </output>
 */
class JsonViewHelper extends JsonViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\FluidAdaptor\ViewHelpers\Format\JsonViewHelper' === get_class($this)) {
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
  'escapeChildren' => 'boolean',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'systemLogger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'argumentDefinitions' => 'ArgumentDefinition[]',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeOutput' => 'boolean',
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
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectSystemLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'systemLogger',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.FluidAdaptor/Classes/ViewHelpers/Format/JsonViewHelper.php
#
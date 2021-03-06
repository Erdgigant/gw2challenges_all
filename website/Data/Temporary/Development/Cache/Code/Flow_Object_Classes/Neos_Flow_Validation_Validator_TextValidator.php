<?php 
namespace Neos\Flow\Validation\Validator;

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

/**
 * Validator for "plain" text.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class TextValidator_Original extends AbstractValidator
{
    /**
     * Checks if the given value is a valid text (contains no XML tags).
     *
     * Be aware that the value of this check entirely depends on the output context.
     * The validated text is not expected to be secure in every circumstance, if you
     * want to be sure of that, use a customized regular expression or filter on output.
     *
     * See http://php.net/filter_var for details.
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($value)
    {
        if ($value !== filter_var($value, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)) {
            $this->addError('Valid text without any XML tags is expected.', 1221565786);
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Validation\Validator;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Validator for "plain" text.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class TextValidator extends TextValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     * @param array $options Options for the validator
     * @throws InvalidValidationOptionsException if unsupported options are found
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (get_class($this) === 'Neos\Flow\Validation\Validator\TextValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Validation\Validator\TextValidator', $this);
        call_user_func_array('parent::__construct', $arguments);
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
  'acceptsEmptyValues' => 'boolean',
  'supportedOptions' => 'array',
  'options' => 'array',
  'result' => 'Neos\\Error\\Messages\\Result',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Validation\Validator\TextValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Validation\Validator\TextValidator', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/Validation/Validator/TextValidator.php
#
<?php 
namespace Neos\Flow\Persistence\Generic\Qom;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */


/**
 * Evaluates to the upper-case string value (or values, if multi-valued) of
 * operand.
 *
 * If operand does not evaluate to a string value, its value is first converted
 * to a string.
 *
 * If operand evaluates to null, the UpperCase operand also evaluates to null.
 *
 * @api
 */
class UpperCase_Original
{
    /**
     * @var DynamicOperand
     */
    protected $operand;

    /**
     * Constructs this UpperCase instance
     *
     * @param DynamicOperand $operand
     */
    public function __construct(DynamicOperand $operand)
    {
        $this->operand = $operand;
    }

    /**
     * Gets the operand whose value is converted to a upper-case string.
     *
     * @return DynamicOperand the operand; non-null
     * @api
     */
    public function getOperand()
    {
        return $this->operand;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Persistence\Generic\Qom;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Evaluates to the upper-case string value (or values, if multi-valued) of
 * operand.
 * 
 * If operand does not evaluate to a string value, its value is first converted
 * to a string.
 * 
 * If operand evaluates to null, the UpperCase operand also evaluates to null.
 */
class UpperCase extends UpperCase_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     * @param DynamicOperand $operand
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\Generic\Qom\DynamicOperand');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $operand in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'operand' => 'Neos\\Flow\\Persistence\\Generic\\Qom\\DynamicOperand',
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
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/Persistence/Generic/Qom/UpperCase.php
#
<?php 
namespace Neos\Eel;

/*
 * This file is part of the Neos.Eel package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * An expression evalutator that interprets expressions
 *
 * There is no generated PHP code so this evaluator does not perform very
 * good in multiple invocations.
 */
class InterpretedEvaluator_Original implements EelEvaluatorInterface
{
    /**
     * Evaluate an expression under a given context
     *
     * @param string $expression
     * @param Context $context
     * @return mixed
     * @throws ParserException
     */
    public function evaluate($expression, Context $context)
    {
        $expression = trim($expression);
        $parser = new InterpretedEelParser($expression, $context);
        $res = $parser->match_Expression();

        if ($res === false) {
            throw new ParserException(sprintf('Expression "%s" could not be parsed.', $expression), 1344514198);
        } elseif ($parser->pos !== strlen($expression)) {
            throw new ParserException(sprintf('Expression "%s" could not be parsed. Error starting at character %d: "%s".', $expression, $parser->pos, substr($expression, $parser->pos)), 1344514188);
        } elseif (!array_key_exists('val', $res)) {
            throw new ParserException(sprintf('Parser error, no val in result %s ', json_encode($res)), 1344514204);
        }

        if ($res['val'] instanceof Context) {
            return $res['val']->unwrap();
        } else {
            return $res['val'];
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Eel;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * An expression evalutator that interprets expressions
 * 
 * There is no generated PHP code so this evaluator does not perform very
 * good in multiple invocations.
 */
class InterpretedEvaluator extends InterpretedEvaluator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


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
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Eel/Classes/InterpretedEvaluator.php
#
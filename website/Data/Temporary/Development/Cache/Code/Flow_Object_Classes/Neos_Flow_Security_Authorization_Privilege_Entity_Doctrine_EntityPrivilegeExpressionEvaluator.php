<?php 
namespace Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Eel\CompilingEvaluator;
use Neos\Eel\Context;
use Neos\Eel\ParserException;
use Neos\Flow\Annotations as Flow;

/**
 * An evaluator that compiles expressions down to PHP code
 *
 * This simple implementation will lazily parse and evaluate the generated PHP
 * code into a function with a name built from the hashed expression.
 *
 * @Flow\Scope("singleton")
 */
class EntityPrivilegeExpressionEvaluator_Original extends CompilingEvaluator
{
    /**
     * Evaluate an expression under a given context
     *
     * @param string $expression
     * @param Context $context
     * @return mixed
     */
    public function evaluate($expression, Context $context)
    {
        $expression = trim($expression);
        $identifier = md5($expression);
        $functionName = 'expression_' . $identifier;

        if (!function_exists($functionName)) {
            $code = $this->generateEvaluatorCode($expression);
            $functionDeclaration = 'function ' . $functionName . '($context){return ' . $code . ';}';
            $this->newExpressions[$functionName] = $functionDeclaration;
            eval($functionDeclaration);
        }

        $result = $functionName($context)->unwrap();
        $entityType = $context->unwrap()->getEntityType();
        return ['entityType' => $entityType, 'conditionGenerator' => $result];
    }

    /**
     * Internal generator method
     *
     * Used by unit tests to debug generated PHP code.
     *
     * @param string $expression
     * @return string
     * @throws ParserException
     */
    protected function generateEvaluatorCode($expression)
    {
        $parser = new EntityPrivilegeExpressionParser($expression);
        /** @var boolean|array $result */
        $result = $parser->match_Expression();

        if ($result === false) {
            throw new ParserException(sprintf('Expression "%s" could not be parsed.', $expression), 1416933186);
        } elseif ($parser->pos !== strlen($expression)) {
            throw new ParserException(sprintf('Expression "%s" could not be parsed. Error starting at character %d: "%s".', $expression, $parser->pos, substr($expression, $parser->pos)), 1416933203);
        } elseif (!array_key_exists('code', $result)) {
            throw new ParserException(sprintf('Parser error, no code in result %s ', json_encode($result)), 1416933192);
        }
        return $result['code'];
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * An evaluator that compiles expressions down to PHP code
 * 
 * This simple implementation will lazily parse and evaluate the generated PHP
 * code into a function with a name built from the hashed expression.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class EntityPrivilegeExpressionEvaluator extends EntityPrivilegeExpressionEvaluator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator', $this);
        if ('Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator';
        if ($isSameClass) {
            $this->initializeObject(1);
        }

        $isSameClass = get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator';
        if ($isSameClass) {
        \Neos\Flow\Core\Bootstrap::$staticObjectManager->registerShutdownObject($this, 'shutdownObject');
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
  'newExpressions' => 'array',
  'expressionCache' => 'Neos\\Cache\\Frontend\\PhpFrontend',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator', $classParents) !== FALSE && array_search('Doctrine\ORM\Proxy\Proxy', $classImplements) !== FALSE;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }

        $isSameClass = get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Flow\Security\Authorization\Privilege\Entity\Doctrine\EntityPrivilegeExpressionEvaluator', $classParents) !== FALSE && array_search('Doctrine\ORM\Proxy\Proxy', $classImplements) !== FALSE;

        if ($isSameClass || $isClassProxy) {
        \Neos\Flow\Core\Bootstrap::$staticObjectManager->registerShutdownObject($this, 'shutdownObject');
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('', '', 'expressionCache', 'e88d5ede206c124e6b18de793bba7969', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager')->getCache('Eel_Expression_Code'); });
        $this->Flow_Injected_Properties = array (
  0 => 'expressionCache',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/Security/Authorization/Privilege/Entity/Doctrine/EntityPrivilegeExpressionEvaluator.php
#
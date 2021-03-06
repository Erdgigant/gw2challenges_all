<?php 
namespace Neos\FluidAdaptor\Core\Widget;

/*
 * This file is part of the Neos.FluidAdaptor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\FluidAdaptor\Core\Widget\Exception\WidgetContextNotFoundException;

/**
 * This object stores the WidgetContext for the currently active widgets
 * of the current user, to make sure the WidgetContext is available in
 * Widget AJAX requests.
 *
 * This class is only used internally by the widget framework.
 *
 * @Flow\Scope("session")
 */
class AjaxWidgetContextHolder_Original
{
    /**
     * Counter which points to the next free Ajax Widget ID which
     * can be used.
     *
     * @var integer
     */
    protected $nextFreeAjaxWidgetId = 0;

    /**
     * An array $ajaxWidgetIdentifier => $widgetContext
     * which stores the widget context.
     *
     * @var array
     */
    protected $widgetContexts = array();

    /**
     * Get the widget context for the given $ajaxWidgetId.
     *
     * @param integer $ajaxWidgetId
     * @return WidgetContext
     * @throws Exception\WidgetContextNotFoundException
     */
    public function get($ajaxWidgetId)
    {
        $ajaxWidgetId = (int) $ajaxWidgetId;
        if (!isset($this->widgetContexts[$ajaxWidgetId])) {
            throw new WidgetContextNotFoundException('No widget context was found for the Ajax Widget Identifier "' . $ajaxWidgetId . '". This only happens if AJAX URIs are called without including the widget on a page.', 1284793775);
        }
        return $this->widgetContexts[$ajaxWidgetId];
    }

    /**
     * Stores the WidgetContext inside the Context, and sets the
     * AjaxWidgetIdentifier inside the Widget Context correctly.
     *
     * @param WidgetContext $widgetContext
     * @return void
     * @Flow\Session(autoStart=true)
     */
    public function store(WidgetContext $widgetContext)
    {
        $ajaxWidgetId = $this->nextFreeAjaxWidgetId++;
        $widgetContext->setAjaxWidgetIdentifier($ajaxWidgetId);
        $this->widgetContexts[$ajaxWidgetId] = $widgetContext;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\FluidAdaptor\Core\Widget;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * This object stores the WidgetContext for the currently active widgets
 * of the current user, to make sure the WidgetContext is available in
 * Widget AJAX requests.
 * 
 * This class is only used internally by the widget framework.
 * @\Neos\Flow\Annotations\Scope("session")
 */
class AjaxWidgetContextHolder extends AjaxWidgetContextHolder_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder', $this);
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            'store' => array(
                'Neos\Flow\Aop\Advice\BeforeAdvice' => array(
                    new \Neos\Flow\Aop\Advice\BeforeAdvice('Neos\Flow\Session\Aspect\LazyLoadingAspect', 'initializeSession', $objectManager, NULL),
                ),
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Session\Aspect\LazyLoadingAspect', 'callMethodOnOriginalSessionObject', $objectManager, NULL),
                ),
            ),
            'get' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Session\Aspect\LazyLoadingAspect', 'callMethodOnOriginalSessionObject', $objectManager, NULL),
                ),
            ),
        );
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder', $this);

        $this->Flow_setRelatedEntities();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __clone()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
    }

    /**
     * Autogenerated Proxy Method
     * @param WidgetContext $widgetContext
     * @return void
     * @\Neos\Flow\Annotations\Session(autoStart=true)
     */
    public function store(\Neos\FluidAdaptor\Core\Widget\WidgetContext $widgetContext)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['store'])) {
            $result = parent::store($widgetContext);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['store'] = TRUE;
            try {
            
                $methodArguments = [];

                $methodArguments['widgetContext'] = $widgetContext;
            
                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['store']['Neos\Flow\Aop\Advice\BeforeAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['store']['Neos\Flow\Aop\Advice\BeforeAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder', 'store', $methodArguments);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('store');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder', 'store', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['store']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['store']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param integer $ajaxWidgetId
     * @return WidgetContext
     * @throws Exception\WidgetContextNotFoundException
     */
    public function get($ajaxWidgetId)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['get'])) {
            $result = parent::get($ajaxWidgetId);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['get'] = TRUE;
            try {
            
                $methodArguments = [];

                $methodArguments['ajaxWidgetId'] = $ajaxWidgetId;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('get');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder', 'get', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['get']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['get']);
        }
        return $result;
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
  'nextFreeAjaxWidgetId' => 'integer',
  'widgetContexts' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.FluidAdaptor/Classes/Core/Widget/AjaxWidgetContextHolder.php
#
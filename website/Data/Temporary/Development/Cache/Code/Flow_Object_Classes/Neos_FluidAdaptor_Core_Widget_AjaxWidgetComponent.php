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
use Neos\Flow\Http\Component\Exception as ComponentException;
use Neos\Flow\Http\Request;
use Neos\Flow\Http\Component\ComponentContext;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\DispatchComponent;
use Neos\Flow\Security\Cryptography\HashService;

/**
 * A HTTP component specifically for Ajax widgets
 * It's task is to interrupt the default dispatching as soon as possible if the current request is an AJAX request
 * triggered by a Fluid widget (e.g. contains the arguments "__widgetId" or "__widgetContext").
 */
class AjaxWidgetComponent_Original extends DispatchComponent
{
    /**
     * @Flow\Inject
     * @var HashService
     */
    protected $hashService;

    /**
     * @Flow\Inject
     * @var AjaxWidgetContextHolder
     */
    protected $ajaxWidgetContextHolder;

    /**
     * Check if the current request contains a widget context.
     * If so dispatch it directly, otherwise continue with the next HTTP component.
     *
     * @param ComponentContext $componentContext
     * @return void
     * @throws ComponentException
     */
    public function handle(ComponentContext $componentContext)
    {
        $httpRequest = $componentContext->getHttpRequest();
        $widgetContext = $this->extractWidgetContext($httpRequest);
        if ($widgetContext === null) {
            return;
        }
        /** @var $actionRequest ActionRequest */
        $actionRequest = $this->objectManager->get(\Neos\Flow\Mvc\ActionRequest::class, $httpRequest);
        $actionRequest->setArguments($this->mergeArguments($httpRequest, array()));
        $actionRequest->setArgument('__widgetContext', $widgetContext);
        $actionRequest->setControllerObjectName($widgetContext->getControllerObjectName());
        $this->setDefaultControllerAndActionNameIfNoneSpecified($actionRequest);

        $this->securityContext->setRequest($actionRequest);

        $this->dispatcher->dispatch($actionRequest, $componentContext->getHttpResponse());
        // stop processing the current component chain
        $componentContext->setParameter(\Neos\Flow\Http\Component\ComponentChain::class, 'cancel', true);
    }

    /**
     * Extracts the WidgetContext from the given $httpRequest.
     * If the request contains an argument "__widgetId" the context is fetched from the session (AjaxWidgetContextHolder).
     * Otherwise the argument "__widgetContext" is expected to contain the serialized WidgetContext (protected by a HMAC suffix)
     *
     * @param Request $httpRequest
     * @return WidgetContext
     */
    protected function extractWidgetContext(Request $httpRequest)
    {
        if ($httpRequest->hasArgument('__widgetId')) {
            return $this->ajaxWidgetContextHolder->get($httpRequest->getArgument('__widgetId'));
        } elseif ($httpRequest->hasArgument('__widgetContext')) {
            $serializedWidgetContextWithHmac = $httpRequest->getArgument('__widgetContext');
            $serializedWidgetContext = $this->hashService->validateAndStripHmac($serializedWidgetContextWithHmac);
            return unserialize(base64_decode($serializedWidgetContext));
        }
        return null;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\FluidAdaptor\Core\Widget;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A HTTP component specifically for Ajax widgets
 * It's task is to interrupt the default dispatching as soon as possible if the current request is an AJAX request
 * triggered by a Fluid widget (e.g. contains the arguments "__widgetId" or "__widgetContext").
 */
class AjaxWidgetComponent extends AjaxWidgetComponent_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     * @param array $options
     */
    public function __construct()
    {
        $arguments = func_get_args();
        call_user_func_array('parent::__construct', $arguments);
        if ('Neos\FluidAdaptor\Core\Widget\AjaxWidgetComponent' === get_class($this)) {
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
  'hashService' => 'Neos\\Flow\\Security\\Cryptography\\HashService',
  'ajaxWidgetContextHolder' => 'Neos\\FluidAdaptor\\Core\\Widget\\AjaxWidgetContextHolder',
  'dispatcher' => 'Neos\\Flow\\Mvc\\Dispatcher',
  'securityContext' => 'Neos\\Flow\\Security\\Context',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'propertyMapper' => 'Neos\\Flow\\Property\\PropertyMapper',
  'options' => 'array',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Cryptography\HashService', 'Neos\Flow\Security\Cryptography\HashService', 'hashService', '62d57ff7e7ce903303c867dd468c12fd', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Cryptography\HashService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder', 'Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder', 'ajaxWidgetContextHolder', 'fabd70eb16d8fd20020f08cd84690d4b', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\FluidAdaptor\Core\Widget\AjaxWidgetContextHolder'); });
        $this->dispatcher = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Dispatcher');
        $this->securityContext = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Context');
        $this->objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface');
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Property\PropertyMapper', 'Neos\Flow\Property\PropertyMapper', 'propertyMapper', '2ab4a1ce2ee31715713d0f207f0ac637', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Property\PropertyMapper'); });
        $this->Flow_Injected_Properties = array (
  0 => 'hashService',
  1 => 'ajaxWidgetContextHolder',
  2 => 'dispatcher',
  3 => 'securityContext',
  4 => 'objectManager',
  5 => 'propertyMapper',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.FluidAdaptor/Classes/Core/Widget/AjaxWidgetComponent.php
#
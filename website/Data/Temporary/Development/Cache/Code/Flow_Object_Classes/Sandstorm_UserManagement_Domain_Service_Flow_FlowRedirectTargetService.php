<?php 
namespace Sandstorm\UserManagement\Domain\Service\Flow;

use Sandstorm\UserManagement\Domain\Service\RedirectTargetServiceInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\Controller\ControllerContext;

class FlowRedirectTargetService_Original implements RedirectTargetServiceInterface
{

    /**
     * @Flow\InjectConfiguration(path="redirect.afterLogin")
     * @var string
     */
    protected $redirectAfterLogin;

    /**
     * @Flow\InjectConfiguration(path="redirect.afterLogout")
     * @var string
     */
    protected $redirectAfterLogout;

    /**
     * @param ControllerContext $controllerContext
     * @param ActionRequest|NULL $originalRequest
     * @return string|ActionRequest|NULL
     */
    public function onAuthenticationSuccess(ControllerContext $controllerContext, ActionRequest $originalRequest = null)
    {
        if (is_array($this->redirectAfterLogin)
            && array_key_exists('action', $this->redirectAfterLogin)
            && array_key_exists('controller', $this->redirectAfterLogin)
            && array_key_exists('package', $this->redirectAfterLogin)
        ) {
            $controllerArguments = [];
            if (array_key_exists('controllerArguments', $this->redirectAfterLogin) &&
                is_array($this->redirectAfterLogin['controllerArguments'])
            ) {
                $controllerArguments = $this->redirectAfterLogin['controllerArguments'];
            }

            return $controllerContext->getUriBuilder()
                ->reset()
                ->setCreateAbsoluteUri(true)
                ->uriFor($this->redirectAfterLogin['action'], $controllerArguments,
                    $this->redirectAfterLogin['controller'], $this->redirectAfterLogin['package']);
        }
    }

    /**
     * @param ControllerContext $controllerContext
     * @return string|ActionRequest|NULL
     */
    public function onLogout(ControllerContext $controllerContext)
    {
        if (is_array($this->redirectAfterLogout)
            && array_key_exists('action', $this->redirectAfterLogout)
            && array_key_exists('controller', $this->redirectAfterLogout)
            && array_key_exists('package', $this->redirectAfterLogout)
        ) {
            $controllerArguments = [];
            if (array_key_exists('controllerArguments', $this->redirectAfterLogout) &&
                is_array($this->redirectAfterLogout['controllerArguments'])
            ) {
                $controllerArguments = $this->redirectAfterLogout['controllerArguments'];
            }

            return $controllerContext->getUriBuilder()
                ->reset()
                ->setCreateAbsoluteUri(true)
                ->uriFor($this->redirectAfterLogout['action'], $controllerArguments,
                    $this->redirectAfterLogout['controller'], $this->redirectAfterLogout['package']);
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Sandstorm\UserManagement\Domain\Service\Flow;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * 
 */
class FlowRedirectTargetService extends FlowRedirectTargetService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Sandstorm\UserManagement\Domain\Service\Flow\FlowRedirectTargetService' === get_class($this)) {
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
  'redirectAfterLogin' => 'string',
  'redirectAfterLogout' => 'string',
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
        $this->redirectAfterLogin = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Sandstorm.UserManagement.redirect.afterLogin');
        $this->redirectAfterLogout = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Sandstorm.UserManagement.redirect.afterLogout');
        $this->Flow_Injected_Properties = array (
  0 => 'redirectAfterLogin',
  1 => 'redirectAfterLogout',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Application/Sandstorm.UserManagement/Classes/Domain/Service/Flow/FlowRedirectTargetService.php
#
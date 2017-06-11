<?php 
namespace Sandstorm\UserManagement\Controller;

use Neos\Flow\Property\TypeConverter\PersistentObjectConverter;
use Sandstorm\UserManagement\Domain\Model\ResetPasswordFlow;
use Sandstorm\UserManagement\Domain\Repository\ResetPasswordFlowRepository;
use Sandstorm\UserManagement\Domain\Service\UserCreationServiceInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Flow\Security\AccountRepository;

/**
 * Handle the "forgot password" flow
 */
class ResetPasswordController_Original extends ActionController
{

    /**
     * @Flow\Inject
     * @var ResetPasswordFlowRepository
     */
    protected $resetPasswordFlowRepository;

    /**
     * @Flow\Inject
     * @var UserCreationServiceInterface
     */
    protected $userCreationService;

    /**
     * @Flow\Inject
     * @var AccountRepository
     */
    protected $accountRepository;

    /**
     * @Flow\Inject
     * @var \Sandstorm\TemplateMailer\Domain\Service\EmailService
     */
    protected $emailService;

    /**
     * @var string
     * @Flow\InjectConfiguration(path="email.subjectResetPassword")
     */
    protected $subjectResetPassword;


    /**
     * @Flow\SkipCsrfProtection
     */
    public function indexAction()
    {
    }

    public function initializeRequestTokenAction()
    {
        $config = $this->arguments->getArgument('resetPasswordFlow')->getPropertyMappingConfiguration();
        $config->allowProperties('email');
        $config->setTypeConverterOption(
            PersistentObjectConverter::class,
            PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED,
            TRUE
        );
    }

    /**
     * @param ResetPasswordFlow $resetPasswordFlow
     */
    public function requestTokenAction(ResetPasswordFlow $resetPasswordFlow)
    {
        $account = $this->accountRepository->findActiveByAccountIdentifierAndAuthenticationProviderName($resetPasswordFlow->getEmail(),
            'Sandstorm.UserManagement:Login');

        if ($account !== null) {
            $alreadyExistingFlows = $this->resetPasswordFlowRepository->findByEmail($resetPasswordFlow->getEmail());
            if (count($alreadyExistingFlows) > 0) {
                foreach ($alreadyExistingFlows as $alreadyExistingFlow) {
                    $this->resetPasswordFlowRepository->remove($alreadyExistingFlow);
                }
            }

            // Send out a confirmation mail
            $resetPasswordLink = $this->uriBuilder->reset()->setCreateAbsoluteUri(true)->uriFor(
                'insertNewPassword',
                ['token' => $resetPasswordFlow->getResetPasswordToken()],
                'ResetPassword');

            $this->emailService->sendTemplateEmail(
                'ResetPasswordToken',
                $this->subjectResetPassword,
                [$resetPasswordFlow->getEmail()],
                [
                    'resetPasswordLink' => $resetPasswordLink,
                    'resetPasswordFlow' => $resetPasswordFlow
                ],
                'sandstorm_usermanagement_sender_email'
            );

            $this->resetPasswordFlowRepository->add($resetPasswordFlow);
        }


        $this->view->assign('resetPasswordFlow', $resetPasswordFlow);
        $this->view->assign('account', $account);
    }

    /**
     * @param string $token
     */
    public function insertNewPasswordAction($token)
    {
        /* @var $resetPasswordFlow ResetPasswordFlow */
        $resetPasswordFlow = $this->resetPasswordFlowRepository->findOneByResetPasswordToken($token);
        if (!$resetPasswordFlow) {
            $this->view->assign('tokenNotFound', true);

            return;
        }

        if (!$resetPasswordFlow->hasValidResetPasswordToken()) {
            $this->view->assign('tokenTimeout', true);

            return;
        }

        $this->view->assign('success', true);

        $this->view->assign('resetPasswordFlow', $resetPasswordFlow);
    }


    /**
     * @param ResetPasswordFlow $resetPasswordFlow
     */
    public function updatePasswordAction(ResetPasswordFlow $resetPasswordFlow)
    {
        $account = $this->accountRepository->findActiveByAccountIdentifierAndAuthenticationProviderName($resetPasswordFlow->getEmail(),
            'Sandstorm.UserManagement:Login');

        if (!$account) {
            $this->view->assign('accountNotFound', true);

            return;
        }

        $this->view->assign('success', true);
        $account->setCredentialsSource($resetPasswordFlow->getEncryptedPassword());
        $this->accountRepository->update($account);
        $this->resetPasswordFlowRepository->remove($resetPasswordFlow);
    }

    /**
     * Disable the default error flash message
     *
     * @return boolean
     */
    protected function getErrorFlashMessage()
    {
        return false;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Sandstorm\UserManagement\Controller;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Handle the "forgot password" flow
 */
class ResetPasswordController extends ResetPasswordController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if ('Sandstorm\UserManagement\Controller\ResetPasswordController' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            'indexAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'requestTokenAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'insertNewPasswordAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updatePasswordAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'errorAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
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

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
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
     * @\Neos\Flow\Annotations\SkipCsrfProtection
     */
    public function indexAction()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'])) {
            $result = parent::indexAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'] = TRUE;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('indexAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Sandstorm\UserManagement\Controller\ResetPasswordController', 'indexAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param ResetPasswordFlow $resetPasswordFlow
     */
    public function requestTokenAction(\Sandstorm\UserManagement\Domain\Model\ResetPasswordFlow $resetPasswordFlow)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['requestTokenAction'])) {
            $result = parent::requestTokenAction($resetPasswordFlow);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['requestTokenAction'] = TRUE;
            try {
            
                $methodArguments = [];

                $methodArguments['resetPasswordFlow'] = $resetPasswordFlow;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('requestTokenAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Sandstorm\UserManagement\Controller\ResetPasswordController', 'requestTokenAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['requestTokenAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['requestTokenAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param string $token
     */
    public function insertNewPasswordAction($token)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['insertNewPasswordAction'])) {
            $result = parent::insertNewPasswordAction($token);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['insertNewPasswordAction'] = TRUE;
            try {
            
                $methodArguments = [];

                $methodArguments['token'] = $token;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('insertNewPasswordAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Sandstorm\UserManagement\Controller\ResetPasswordController', 'insertNewPasswordAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['insertNewPasswordAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['insertNewPasswordAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param ResetPasswordFlow $resetPasswordFlow
     */
    public function updatePasswordAction(\Sandstorm\UserManagement\Domain\Model\ResetPasswordFlow $resetPasswordFlow)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updatePasswordAction'])) {
            $result = parent::updatePasswordAction($resetPasswordFlow);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updatePasswordAction'] = TRUE;
            try {
            
                $methodArguments = [];

                $methodArguments['resetPasswordFlow'] = $resetPasswordFlow;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updatePasswordAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Sandstorm\UserManagement\Controller\ResetPasswordController', 'updatePasswordAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updatePasswordAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updatePasswordAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @return string
     */
    protected function errorAction()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['errorAction'])) {
            $result = parent::errorAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['errorAction'] = TRUE;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('errorAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Sandstorm\UserManagement\Controller\ResetPasswordController', 'errorAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['errorAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['errorAction']);
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
  'resetPasswordFlowRepository' => 'Sandstorm\\UserManagement\\Domain\\Repository\\ResetPasswordFlowRepository',
  'userCreationService' => 'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface',
  'accountRepository' => 'Neos\\Flow\\Security\\AccountRepository',
  'emailService' => '\\Sandstorm\\TemplateMailer\\Domain\\Service\\EmailService',
  'subjectResetPassword' => 'string',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'reflectionService' => 'Neos\\Flow\\Reflection\\ReflectionService',
  'mvcPropertyMappingConfigurationService' => 'Neos\\Flow\\Mvc\\Controller\\MvcPropertyMappingConfigurationService',
  'viewConfigurationManager' => 'Neos\\Flow\\Mvc\\ViewConfigurationManager',
  'view' => 'Neos\\Flow\\Mvc\\View\\ViewInterface',
  'viewObjectNamePattern' => 'string',
  'viewFormatToObjectNameMap' => 'array',
  'defaultViewObjectName' => 'string',
  'defaultViewImplementation' => 'string',
  'actionMethodName' => 'string',
  'errorMethodName' => 'string',
  'settings' => 'array',
  'systemLogger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'uriBuilder' => 'Neos\\Flow\\Mvc\\Routing\\UriBuilder',
  'validatorResolver' => 'Neos\\Flow\\Validation\\ValidatorResolver',
  'request' => 'Neos\\Flow\\Mvc\\ActionRequest',
  'response' => 'Neos\\Flow\\Http\\Response',
  'arguments' => 'Neos\\Flow\\Mvc\\Controller\\Arguments',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'flashMessageContainer' => 'Neos\\Flow\\Mvc\\FlashMessageContainer',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'supportedMediaTypes' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Sandstorm.UserManagement'));
        $this->Flow_Proxy_LazyPropertyInjection('Sandstorm\UserManagement\Domain\Repository\ResetPasswordFlowRepository', 'Sandstorm\UserManagement\Domain\Repository\ResetPasswordFlowRepository', 'resetPasswordFlowRepository', '02baf22f424ee0590ba0b3119fed9b97', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Sandstorm\UserManagement\Domain\Repository\ResetPasswordFlowRepository'); });
        $this->userCreationService = new \schilter\gw2challenges\Service\CustomUserCreationService();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\AccountRepository', 'Neos\Flow\Security\AccountRepository', 'accountRepository', '8a496e58843e1121631cc3255b1e5e2d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\AccountRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Sandstorm\TemplateMailer\Domain\Service\EmailService', 'Sandstorm\TemplateMailer\Domain\Service\EmailService', 'emailService', '3c6342d1551db36c792c59bfe3683aa5', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Sandstorm\TemplateMailer\Domain\Service\EmailService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'mvcPropertyMappingConfigurationService', '245f31ad31ca22b8c2b2255e0f65f847', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\ViewConfigurationManager', 'Neos\Flow\Mvc\ViewConfigurationManager', 'viewConfigurationManager', '40e27e95b530777b9b476762cf735a69', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\ViewConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\SystemLoggerInterface', 'Neos\Flow\Log\Logger', 'systemLogger', '717e9de4d0309f4f47c821b9257eb5c2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\FlashMessageContainer', 'Neos\Flow\Mvc\FlashMessageContainer', 'flashMessageContainer', 'a5f5265657df54eb081324fb2ff5b8e1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\FlashMessageContainer'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->subjectResetPassword = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Sandstorm.UserManagement.email.subjectResetPassword');
        $this->defaultViewImplementation = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.view.defaultImplementation');
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'resetPasswordFlowRepository',
  2 => 'userCreationService',
  3 => 'accountRepository',
  4 => 'emailService',
  5 => 'objectManager',
  6 => 'reflectionService',
  7 => 'mvcPropertyMappingConfigurationService',
  8 => 'viewConfigurationManager',
  9 => 'systemLogger',
  10 => 'validatorResolver',
  11 => 'flashMessageContainer',
  12 => 'persistenceManager',
  13 => 'subjectResetPassword',
  14 => 'defaultViewImplementation',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Application/Sandstorm.UserManagement/Classes/Controller/ResetPasswordController.php
#
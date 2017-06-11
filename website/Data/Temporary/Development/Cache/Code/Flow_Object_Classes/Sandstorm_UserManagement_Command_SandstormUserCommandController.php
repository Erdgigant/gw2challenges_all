<?php 
namespace Sandstorm\UserManagement\Command;

use Sandstorm\UserManagement\Domain\Model\PasswordDto;
use Sandstorm\UserManagement\Domain\Model\RegistrationFlow;
use Sandstorm\UserManagement\Domain\Model\User;
use Sandstorm\UserManagement\Domain\Repository\RegistrationFlowRepository;
use Sandstorm\UserManagement\Domain\Repository\UserRepository;
use Sandstorm\UserManagement\Domain\Service\Neos\NeosUserCreationService;
use Sandstorm\UserManagement\Domain\Service\UserCreationServiceInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Cli\CommandController;
use Neos\Flow\Cli\Request;
use Neos\Flow\Cli\Response;
use Neos\Flow\Mvc\Dispatcher;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Persistence\Doctrine\PersistenceManager;
use Neos\Flow\Security\Account;
use Neos\Flow\Security\AccountFactory;
use Neos\Flow\Security\AccountRepository;
use Neos\Flow\Security\Cryptography\HashService;
use Neos\Neos\Command\UserCommandController;

/**
 * @Flow\Scope("singleton")
 */
class SandstormUserCommandController_Original extends CommandController
{

    /**
     * @Flow\Inject
     * @var AccountFactory
     */
    protected $accountFactory;

    /**
     * @Flow\Inject
     * @var AccountRepository
     */
    protected $accountRepository;

    /**
     * @Flow\Inject
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @Flow\Inject
     * @var RegistrationFlowRepository
     */
    protected $registrationFlowRepository;

    /**
     * @Flow\Inject
     * @var UserCreationServiceInterface
     */
    protected $userCreationService;

    /**
     * @Flow\Inject
     * @var PersistenceManager
     */
    protected $persistenceManager;

    /**
     * @Flow\Inject
     * @var Dispatcher
     */
    protected $dispatcher;

    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @Flow\Inject
     * @var HashService
     */
    protected $hashService;

    /**
     * Create User on the Command Line
     *
     * @param string $username The email address, which also serves as the username.
     * @param string $password This user's password.
     * @param string $additionalAttributes Additional attributes to pass to the registrationFlow as semicolon-separated list. Example: ./flow sandstormuser:create ... --additionalAttributes="customerType:CUSTOMER;color:blue"
     */
    public function createCommand($username, $password, $additionalAttributes = '')
    {
        // Parse additionalAttributes if they exist
        $attributes = [];
        if (strlen($additionalAttributes) > 0) {
            $attributesSplitBySeparator = explode(';', $additionalAttributes);
            array_map(function ($singleAttribute) use (&$attributes) {
                $splitAttribute = explode(':', $singleAttribute);
                $attributes[$splitAttribute[0]] = $splitAttribute[1];
            }, $attributesSplitBySeparator);
        }

        $passwordDto = new PasswordDto();
        $passwordDto->setPassword($password);
        $passwordDto->setPasswordConfirmation($password);
        $registrationFlow = new RegistrationFlow();
        $registrationFlow->setPasswordDto($passwordDto);
        $registrationFlow->setEmail($username);
        $registrationFlow->setAttributes($attributes);

        // Remove existing registration flows
        $alreadyExistingFlows = $this->registrationFlowRepository->findByEmail($registrationFlow->getEmail());
        if (count($alreadyExistingFlows) > 0) {
            foreach ($alreadyExistingFlows as $alreadyExistingFlow) {
                $this->registrationFlowRepository->remove($alreadyExistingFlow);
            }
        }
        $registrationFlow->storeEncryptedPassword();

        // Store the RF and persist so the activate command will find it
        $this->registrationFlowRepository->add($registrationFlow);
        $this->persistenceManager->persistAll();

        // Directly activate the account
        $this->activateRegistrationCommand($username);

        $this->outputLine('Added the User <b>"%s"</b> with password <b>"%s"</b>.', [$username, $password]);
    }

    /**
     * @param string $username The username identifying a pending registration flow.
     */
    public function activateRegistrationCommand($username)
    {
        /* @var $registrationFlow \Sandstorm\UserManagement\Domain\Model\RegistrationFlow */
        $registrationFlow = $this->registrationFlowRepository->findOneByEmail($username);

        if ($registrationFlow === null) {
            $this->outputLine('The user <b>' . $username . '</b> doesn\'t have a non-activated account.');
            $this->quit(1);
        }

        $this->userCreationService->createUserAndAccount($registrationFlow);
        $this->registrationFlowRepository->remove($registrationFlow);
    }


    /**
     * Set a new password for the given user
     *
     * @param string $username user to modify
     * @param string $password new password
     * @param string $authenticationProvider Name of the authentication provider to use for finding the user. Default: "Sandstorm.UserManagement:Login".
     * @return void
     */
    public function setPasswordCommand($username, $password, $authenticationProvider = 'Sandstorm.UserManagement:Login')
    {
        // If we're in Neos context, we simply forward the command to the Neos command controller.
        if ($this->shouldUseNeosService()) {
            $cliRequest = new Request($this->request);
            $cliRequest->setControllerObjectName(UserCommandController::class);
            $cliRequest->setControllerCommandName('setPassword');
            $cliRequest->setArguments([
                'username' => $username,
                'password' => $password,
                'authenticationProvider' => $authenticationProvider
            ]);
            $cliResponse = new Response($this->response);
            $this->dispatcher->dispatch($cliRequest, $cliResponse);
            $this->quit(0);
        }

        // Otherwise, we use our own logic.
        $account = $this->accountRepository->findByAccountIdentifierAndAuthenticationProviderName($username,
            $authenticationProvider);

        if ($account === null) {
            $this->outputLine('The user <b>' . $username . '</b> could not be found with auth provider <b>' .
                $authenticationProvider . '</b>.');
            $this->quit(1);
        }

        $encrypted = $this->hashService->hashPassword($password);
        $account->setCredentialsSource($encrypted);
        $this->accountRepository->update($account);
        $this->outputLine('Password for user <b>' . $username . '</b> changed.');
    }

    /**
     * Removes a user and his account.
     *
     * @param string $username user to remove
     * @return void
     */
    public function removeCommand($username)
    {
        /** @var User $user */
        $user = $this->userRepository->findOneByEmail($username);
        if ($user === null) {
            $this->outputLine('The user <b>' . $username . '</b> could not be found.');
            $this->quit(1);
        }

        $this->userRepository->remove($user);
        $this->accountRepository->remove($user->getAccount());
        $this->outputLine('Removed the user <b>' . $username . '</b>.');
    }

    /**
     * Lists all available accounts.
     */
    public function listAccountsCommand()
    {
        /** @var Account[] $accounts */
        $accounts = $this->accountRepository->findAll()->toArray();
        usort($accounts, function ($a, $b) {
            /** @var Account $a */
            /** @var Account $b */
            return ($a->getAccountIdentifier() > $b->getAccountIdentifier());
        });

        $tableRows = [];
        $headerRow = ['Identifier', 'Authentication Provider', 'Role(s)'];

        foreach ($accounts as $account) {
            $tableRows[] = [
                $account->getAccountIdentifier(),
                $account->getAuthenticationProviderName(),
                implode(' ,', $account->getRoles())
            ];
        }

        $this->output->outputTable($tableRows, $headerRow);
        $this->outputLine(sprintf('  <b>%s accounts total.</b>', count($accounts)));
    }

    /**
     * Lists all available users.
     */
    public function listUsersCommand()
    {
        // If we're in Neos context, we pass on the command.
        if ($this->shouldUseNeosService()) {
            $cliRequest = new Request($this->request);
            $cliRequest->setControllerObjectName(UserCommandController::class);
            $cliRequest->setControllerCommandName('list');
            $cliResponse = new Response($this->response);
            $this->dispatcher->dispatch($cliRequest, $cliResponse);

            return;
        }
        /** @var User[] $users */
        $users = $this->userRepository->findAll()->toArray();
        usort($users, function ($a, $b) {
            /** @var User $a */
            /** @var User $b */
            return ($a->getEmail() > $b->getEmail());
        });

        $tableRows = [];
        $headerRow = ['Email', 'Name', 'Role(s)'];

        foreach ($users as $user) {
            $tableRows[] = [$user->getEmail(), $user->getFullName(), implode(' ,', $user->getAccount()->getRoles())];
        }

        $this->output->outputTable($tableRows, $headerRow);
        $this->outputLine(sprintf('  <b>%s users total.</b>', count($users)));
    }

    /**
     * We check if we're in the Neos context by checking if we're using the Neos user creation service.
     *
     * @return boolean
     */
    protected function shouldUseNeosService()
    {
        // The userCreationService is a DependencyProxy instance here, we can get the class name from it
        return get_class($this->userCreationService) === NeosUserCreationService::class;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Sandstorm\UserManagement\Command;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * 
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class SandstormUserCommandController extends SandstormUserCommandController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Sandstorm\UserManagement\Command\SandstormUserCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Sandstorm\UserManagement\Command\SandstormUserCommandController', $this);
        parent::__construct();
        if ('Sandstorm\UserManagement\Command\SandstormUserCommandController' === get_class($this)) {
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
  'accountFactory' => 'Neos\\Flow\\Security\\AccountFactory',
  'accountRepository' => 'Neos\\Flow\\Security\\AccountRepository',
  'userRepository' => 'Sandstorm\\UserManagement\\Domain\\Repository\\UserRepository',
  'registrationFlowRepository' => 'Sandstorm\\UserManagement\\Domain\\Repository\\RegistrationFlowRepository',
  'userCreationService' => 'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\Doctrine\\PersistenceManager',
  'dispatcher' => 'Neos\\Flow\\Mvc\\Dispatcher',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'hashService' => 'Neos\\Flow\\Security\\Cryptography\\HashService',
  'request' => 'Neos\\Flow\\Cli\\Request',
  'response' => 'Neos\\Flow\\Cli\\Response',
  'arguments' => 'Neos\\Flow\\Mvc\\Controller\\Arguments',
  'commandMethodName' => 'string',
  'commandManager' => 'Neos\\Flow\\Cli\\CommandManager',
  'output' => 'Neos\\Flow\\Cli\\ConsoleOutput',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Sandstorm\UserManagement\Command\SandstormUserCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Sandstorm\UserManagement\Command\SandstormUserCommandController', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectCommandManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cli\CommandManager'));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\AccountFactory', 'Neos\Flow\Security\AccountFactory', 'accountFactory', '4bac9fd8a6c11164d0c69a407f2bbe53', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\AccountFactory'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\AccountRepository', 'Neos\Flow\Security\AccountRepository', 'accountRepository', '8a496e58843e1121631cc3255b1e5e2d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\AccountRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Sandstorm\UserManagement\Domain\Repository\UserRepository', 'Sandstorm\UserManagement\Domain\Repository\UserRepository', 'userRepository', '608cc0a1be6798e43846296e867f1ad1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Sandstorm\UserManagement\Domain\Repository\UserRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Sandstorm\UserManagement\Domain\Repository\RegistrationFlowRepository', 'Sandstorm\UserManagement\Domain\Repository\RegistrationFlowRepository', 'registrationFlowRepository', '079aca7f96157ead913652a53bacc3ec', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Sandstorm\UserManagement\Domain\Repository\RegistrationFlowRepository'); });
        $this->userCreationService = new \schilter\gw2challenges\Service\CustomUserCreationService();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\Doctrine\PersistenceManager', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '90135528ef7af4a013b4d45f90addf22', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\Doctrine\PersistenceManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Dispatcher', 'Neos\Flow\Mvc\Dispatcher', 'dispatcher', '8ddded8be27664ffb31ad6b8c6b2be64', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Dispatcher'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Cryptography\HashService', 'Neos\Flow\Security\Cryptography\HashService', 'hashService', '62d57ff7e7ce903303c867dd468c12fd', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Cryptography\HashService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'commandManager',
  1 => 'objectManager',
  2 => 'accountFactory',
  3 => 'accountRepository',
  4 => 'userRepository',
  5 => 'registrationFlowRepository',
  6 => 'userCreationService',
  7 => 'persistenceManager',
  8 => 'dispatcher',
  9 => 'hashService',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Application/Sandstorm.UserManagement/Classes/Command/SandstormUserCommandController.php
#
<?php return array (
  'Caches' => 
  array (
    'Eel_Expression_Code' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\PhpFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Fluid_TemplateCache' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\PhpFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Default' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
      'backendOptions' => 
      array (
        'defaultLifetime' => 0,
      ),
      'persistent' => false,
    ),
    'Flow_Cache_ResourceFiles' => 
    array (
    ),
    'Flow_Core' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_I18n_AvailableLocalesCache' => 
    array (
    ),
    'Flow_I18n_XmlModelCache' => 
    array (
    ),
    'Flow_I18n_Cldr_CldrModelCache' => 
    array (
    ),
    'Flow_I18n_Cldr_Reader_DatesReaderCache' => 
    array (
    ),
    'Flow_I18n_Cldr_Reader_NumbersReaderCache' => 
    array (
    ),
    'Flow_I18n_Cldr_Reader_PluralsReaderCache' => 
    array (
    ),
    'Flow_Monitor' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Mvc_Routing_Route' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Flow_Mvc_Routing_Resolve' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Flow_Mvc_ViewConfigurations' => 
    array (
    ),
    'Flow_Object_Classes' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\PhpFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Object_Configuration' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Persistence_Doctrine' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Persistence_Doctrine_Results' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
      'backendOptions' => 
      array (
        'defaultLifetime' => 60,
      ),
    ),
    'Flow_Persistence_Doctrine_SecondLevel' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Reflection_Status' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Reflection_CompiletimeData' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_Reflection_RuntimeData' => 
    array (
    ),
    'Flow_Reflection_RuntimeClassSchemata' => 
    array (
    ),
    'Flow_Resource_Status' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
    ),
    'Flow_Security_Authorization_Privilege_Method' => 
    array (
    ),
    'Flow_Security_Cryptography_RSAWallet' => 
    array (
      'backendOptions' => 
      array (
        'defaultLifetime' => 30,
      ),
    ),
    'Flow_Security_Cryptography_HashService' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\StringFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
      'persistent' => true,
    ),
    'Flow_Session_MetaData' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Flow_Session_Storage' => 
    array (
      'backend' => 'Neos\\Cache\\Backend\\FileBackend',
    ),
    'Flow_Aop_RuntimeExpressions' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\PhpFrontend',
      'backend' => 'Neos\\Cache\\Backend\\SimpleFileBackend',
    ),
    'Flow_PropertyMapper' => 
    array (
      'frontend' => 'Neos\\Cache\\Frontend\\VariableFrontend',
      'backend' => 'Neos\\Cache\\Backend\\NullBackend',
    ),
  ),
  'Objects' => 
  array (
    'Neos.Utility.Files' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Utility.Pdo' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'neos.utilitylock' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Utility.OpcodeCache' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Cache' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'neos.errormessages' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Utility.ObjectHandling' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Utility.Arrays' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Utility.MediaTypes' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Utility.Schema' => 
    array (
      'Neos\\Utility\\SchemaGenerator' => 
      array (
        'scope' => 'singleton',
      ),
      'Neos\\Utility\\SchemaValidator' => 
      array (
        'scope' => 'singleton',
      ),
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'neos.utilityunicode' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'typo3fluid.fluid' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'paragonie.randomcompat' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'ramsey.uuid' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Doctrine.Common.Collections' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Doctrine.Common.Inflector' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'doctrine.cache' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Doctrine.Common.Lexer' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'doctrine.annotations' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'doctrine.common' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Doctrine.DBAL' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'doctrine.instantiator' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'symfony.polyfillmbstring' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'psr.log' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'symfony.debug' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'symfony.console' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Doctrine.ORM' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'symfony.yaml' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'zendframework.zendeventmanager' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'zendframework.zendcode' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'ocramius.packageversions' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'ocramius.proxymanager' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'doctrine.migrations' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'symfony.domcrawler' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'neos.composerplugin' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'swiftmailer.swiftmailer' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'pelago.emogrifier' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'webmozart.assert' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'org.bovigo.vfs' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Eel' => 
    array (
      'Neos\\Eel\\CompilingEvaluator' => 
      array (
        'properties' => 
        array (
          'expressionCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Eel_Expression_Code',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Eel\\EelEvaluatorInterface' => 
      array (
        'className' => 'Neos\\Eel\\CompilingEvaluator',
      ),
      'Neos\\Eel\\FlowQuery\\OperationResolverInterface' => 
      array (
        'className' => 'Neos\\Eel\\FlowQuery\\OperationResolver',
      ),
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.FluidAdaptor' => 
    array (
      'Neos\\FluidAdaptor\\Core\\Cache\\CacheAdaptor' => 
      array (
        'properties' => 
        array (
          'flowCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Fluid_TemplateCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\TagBuilder' => 
      array (
        'scope' => 'prototype',
      ),
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Flow' => 
    array (
      'DateTime' => 
      array (
        'scope' => 'prototype',
        'autowiring' => 'off',
      ),
      'Neos\\Cache\\CacheFactoryInterface' => 
      array (
        'className' => 'Neos\\Flow\\Cache\\CacheFactory',
      ),
      'Neos\\Flow\\Cache\\CacheFactory' => 
      array (
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.context',
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Service' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_AvailableLocalesCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\CldrModel' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_CldrModelCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Xliff\\XliffModel' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_XmlModelCache',
                ),
              ),
            ),
          ),
          'i18nLogger' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Log\\LoggerFactory',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n',
                ),
                2 => 
                array (
                  'value' => 'Neos\\Flow\\Log\\Logger',
                ),
                3 => 
                array (
                  'setting' => 'Neos.Flow.log.i18nLogger.backend',
                ),
                4 => 
                array (
                  'setting' => 'Neos.Flow.log.i18nLogger.backendOptions',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\Reader\\DatesReader' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_Reader_DatesReaderCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\Reader\\NumbersReader' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_Reader_NumbersReaderCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\I18n\\Cldr\\Reader\\PluralsReader' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_I18n_Cldr_Reader_PluralsReaderCache',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Log\\Backend\\FileBackend' => 
      array (
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\Log\\Backend\\NullBackend' => 
      array (
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\Log\\SystemLoggerInterface' => 
      array (
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Log\\LoggerFactory',
        'arguments' => 
        array (
          1 => 
          array (
            'value' => 'SystemLogger',
          ),
          2 => 
          array (
            'setting' => 'Neos.Flow.log.systemLogger.logger',
          ),
          3 => 
          array (
            'setting' => 'Neos.Flow.log.systemLogger.backend',
          ),
          4 => 
          array (
            'setting' => 'Neos.Flow.log.systemLogger.backendOptions',
          ),
        ),
      ),
      'Neos\\Flow\\Log\\SecurityLoggerInterface' => 
      array (
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Log\\LoggerFactory',
        'arguments' => 
        array (
          1 => 
          array (
            'value' => 'Flow_Security',
          ),
          2 => 
          array (
            'value' => 'Neos\\Flow\\Log\\Logger',
          ),
          3 => 
          array (
            'setting' => 'Neos.Flow.log.securityLogger.backend',
          ),
          4 => 
          array (
            'setting' => 'Neos.Flow.log.securityLogger.backendOptions',
          ),
        ),
      ),
      'Neos\\Flow\\Monitor\\ChangeDetectionStrategy\\ModificationTimeStrategy' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Monitor',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Monitor\\FileMonitor' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Monitor',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Http\\Component\\ComponentChain' => 
      array (
        'factoryObjectName' => 'Neos\\Flow\\Http\\Component\\ComponentChainFactory',
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.http.chain',
          ),
        ),
      ),
      'Neos\\Flow\\Mvc\\Routing\\RouterCachingService' => 
      array (
        'properties' => 
        array (
          'routeCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Mvc_Routing_Route',
                ),
              ),
            ),
          ),
          'resolveCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Mvc_Routing_Resolve',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Mvc\\ViewConfigurationManager' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Mvc_ViewConfigurations',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\ObjectManagement\\ObjectManager',
        'scope' => 'singleton',
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\ObjectManagement\\ObjectManager' => 
      array (
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\ObjectManagement\\CompileTimeObjectManager' => 
      array (
        'autowiring' => 'off',
      ),
      'Neos\\Flow\\Package\\PackageManagerInterface' => 
      array (
        'scope' => 'singleton',
      ),
      'Doctrine\\Common\\Persistence\\ObjectManager' => 
      array (
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Persistence\\Doctrine\\EntityManagerFactory',
      ),
      'Neos\\Flow\\Persistence\\PersistenceManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\Persistence\\Doctrine\\PersistenceManager',
      ),
      'Neos\\Flow\\Persistence\\Doctrine\\Logging\\SqlLogger' => 
      array (
        'properties' => 
        array (
          'logger' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Log\\LoggerFactory',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Sql_Queries',
                ),
                2 => 
                array (
                  'value' => 'Neos\\Flow\\Log\\Logger',
                ),
                3 => 
                array (
                  'value' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
                ),
                4 => 
                array (
                  'setting' => 'Neos.Flow.log.sqlLogger.backendOptions',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Property\\PropertyMapper' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_PropertyMapper',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\ResourceManagement\\ResourceManager' => 
      array (
        'properties' => 
        array (
          'statusCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Resource_Status',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authentication\\AuthenticationManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Authentication\\AuthenticationProviderManager',
      ),
      'Neos\\Flow\\Security\\Cryptography\\RsaWalletServiceInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Cryptography\\RsaWalletServicePhp',
        'scope' => 'singleton',
        'properties' => 
        array (
          'keystoreCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Security_Cryptography_RSAWallet',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authorization\\PrivilegeManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Authorization\\PrivilegeManager',
      ),
      'Neos\\Flow\\Security\\Authorization\\FirewallInterface' => 
      array (
        'className' => 'Neos\\Flow\\Security\\Authorization\\FilterFirewall',
      ),
      'Neos\\Flow\\Security\\Cryptography\\HashService' => 
      array (
        'properties' => 
        array (
          'cache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Security_Cryptography_HashService',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Cryptography\\Pbkdf2HashingStrategy' => 
      array (
        'scope' => 'singleton',
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.dynamicSaltLength',
          ),
          2 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.iterationCount',
          ),
          3 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.derivedKeyLength',
          ),
          4 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.algorithm',
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Cryptography\\BCryptHashingStrategy' => 
      array (
        'scope' => 'singleton',
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.Flow.security.cryptography.BCryptHashingStrategy.cost',
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authorization\\Privilege\\Method\\MethodTargetExpressionParser' => 
      array (
        'scope' => 'singleton',
      ),
      'Neos\\Flow\\Security\\Authorization\\Privilege\\Method\\MethodPrivilegePointcutFilter' => 
      array (
        'scope' => 'singleton',
        'properties' => 
        array (
          'objectManager' => 
          array (
            'object' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
          ),
        ),
      ),
      'Neos\\Flow\\Security\\Authorization\\Privilege\\Entity\\Doctrine\\EntityPrivilegeExpressionEvaluator' => 
      array (
        'properties' => 
        array (
          'expressionCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Eel_Expression_Code',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Session\\SessionInterface' => 
      array (
        'scope' => 'singleton',
        'factoryObjectName' => 'Neos\\Flow\\Session\\SessionManagerInterface',
        'factoryMethodName' => 'getCurrentSession',
      ),
      'Neos\\Flow\\Session\\Session' => 
      array (
        'properties' => 
        array (
          'metaDataCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Session_MetaData',
                ),
              ),
            ),
          ),
          'storageCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Session_Storage',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Flow\\Session\\SessionManagerInterface' => 
      array (
        'className' => 'Neos\\Flow\\Session\\SessionManager',
      ),
      'Neos\\Flow\\Session\\SessionManager' => 
      array (
        'properties' => 
        array (
          'metaDataCache' => 
          array (
            'object' => 
            array (
              'factoryObjectName' => 'Neos\\Flow\\Cache\\CacheManager',
              'factoryMethodName' => 'getCache',
              'arguments' => 
              array (
                1 => 
                array (
                  'value' => 'Flow_Session_MetaData',
                ),
              ),
            ),
          ),
        ),
      ),
      'Neos\\Utility\\PdoHelper' => 
      array (
        'autowiring' => 'off',
        'scope' => 'prototype',
      ),
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.SwiftMailer' => 
    array (
      'Neos\\SwiftMailer\\TransportInterface' => 
      array (
        'scope' => 'prototype',
        'factoryObjectName' => 'Neos\\SwiftMailer\\TransportFactory',
        'arguments' => 
        array (
          1 => 
          array (
            'setting' => 'Neos.SwiftMailer.transport.type',
          ),
          2 => 
          array (
            'setting' => 'Neos.SwiftMailer.transport.options',
          ),
          3 => 
          array (
            'setting' => 'Neos.SwiftMailer.transport.arguments',
          ),
        ),
      ),
      'Neos\\SwiftMailer\\MailerInterface' => 
      array (
        'arguments' => 
        array (
          1 => 
          array (
            'object' => 'Neos\\SwiftMailer\\TransportInterface',
          ),
        ),
      ),
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Behat' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Sandstorm.TemplateMailer' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Sandstorm.UserManagement' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\RedirectTargetServiceInterface' => 
      array (
        'className' => 'Sandstorm\\UserManagement\\Domain\\Service\\Flow\\FlowRedirectTargetService',
      ),
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'schilter.gw2challenges' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Welcome' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpunit.phptimer' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpunit.phptexttemplate' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.recursioncontext' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.exporter' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpunit.phpunitmockobjects' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpunit.phptokenstream' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpunit.phpfileiterator' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.codeunitreverselookup' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.environment' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.version' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpunit.phpcodecoverage' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpdocumentor.reflectioncommon' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpdocumentor.typeresolver' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpdocumentor.reflectiondocblock' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.diff' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.comparator' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpspec.prophecy' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.globalstate' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.objectenumerator' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'sebastian.resourceoperations' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'myclabs.deepcopy' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'phpunit.phpunit' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
    'Neos.Kickstarter' => 
    array (
      'Sandstorm\\UserManagement\\Domain\\Service\\UserCreationServiceInterface' => 
      array (
        'className' => 'schilter\\gw2challenges\\Service\\CustomUserCreationService',
      ),
    ),
  ),
  'Settings' => 
  array (
    'Neos' => 
    array (
      'Flow' => 
      array (
        'aop' => 
        array (
          'globalObjects' => 
          array (
            'securityContext' => 'Neos\\Flow\\Security\\Context',
          ),
        ),
        'compatibility' => 
        array (
        ),
        'core' => 
        array (
          'context' => 'Development',
          'applicationPackageKey' => 'Neos.Flow',
          'applicationName' => 'Flow',
          'phpBinaryPathAndFilename' => (defined('PHP_BINDIR') ? constant('PHP_BINDIR') : null) . '/php',
          'subRequestEnvironmentVariables' => 
          array (
            'XDEBUG_CONFIG' => 'idekey=FLOW_SUBREQUEST remote_port=9001',
          ),
          'subRequestPhpIniPathAndFilename' => NULL,
          'subRequestIniEntries' => 
          array (
          ),
        ),
        'error' => 
        array (
          'exceptionHandler' => 
          array (
            'className' => 'Neos\\Flow\\Error\\DebugExceptionHandler',
            'defaultRenderingOptions' => 
            array (
              'viewClassName' => 'Neos\\FluidAdaptor\\View\\StandaloneView',
              'viewOptions' => 
              array (
              ),
              'renderTechnicalDetails' => true,
              'logException' => true,
            ),
            'renderingGroups' => 
            array (
              'notFoundExceptions' => 
              array (
                'matchingStatusCodes' => 
                array (
                  0 => 404,
                ),
                'options' => 
                array (
                  'logException' => false,
                  'templatePathAndFilename' => 'resource://Neos.Flow/Private/Templates/Error/Default.html',
                  'variables' => 
                  array (
                    'errorDescription' => 'Sorry, the page you requested was not found.',
                  ),
                ),
              ),
              'databaseConnectionExceptions' => 
              array (
                'matchingExceptionClassNames' => 
                array (
                  0 => 'Neos\\Flow\\Persistence\\Doctrine\\Exception\\DatabaseException',
                ),
                'options' => 
                array (
                  'templatePathAndFilename' => 'resource://Neos.Flow/Private/Templates/Error/Default.html',
                  'variables' => 
                  array (
                    'errorDescription' => 'Sorry, the database connection couldn\'t be established.',
                  ),
                ),
              ),
            ),
          ),
          'errorHandler' => 
          array (
            'exceptionalErrors' => 
            array (
              0 => (defined('E_USER_ERROR') ? constant('E_USER_ERROR') : null),
              1 => (defined('E_RECOVERABLE_ERROR') ? constant('E_RECOVERABLE_ERROR') : null),
              2 => (defined('E_WARNING') ? constant('E_WARNING') : null),
              3 => (defined('E_NOTICE') ? constant('E_NOTICE') : null),
              4 => (defined('E_USER_WARNING') ? constant('E_USER_WARNING') : null),
              5 => (defined('E_USER_NOTICE') ? constant('E_USER_NOTICE') : null),
              6 => (defined('E_STRICT') ? constant('E_STRICT') : null),
            ),
          ),
          'debugger' => 
          array (
            'ignoredClasses' => 
            array (
              'Neos\\\\Flow\\\\Aop.*' => true,
              'Neos\\\\Flow\\\\Cac.*' => true,
              'Neos\\\\Flow\\\\Core\\\\.*' => true,
              'Neos\\\\Flow\\\\Con.*' => true,
              'Neos\\\\Flow\\\\Http\\\\RequestHandler' => true,
              'Neos\\\\Flow\\\\Uti.*' => true,
              'Neos\\\\Flow\\\\Mvc\\\\Routing.*' => true,
              'Neos\\\\Flow\\\\Log.*' => true,
              'Neos\\\\Flow\\\\Obj.*' => true,
              'Neos\\\\Flow\\\\Pac.*' => true,
              'Neos\\\\Flow\\\\Persistence\\\\(?!Doctrine\\\\Mapping).*' => true,
              'Neos\\\\Flow\\\\Pro.*' => true,
              'Neos\\\\Flow\\\\Ref.*' => true,
              'Neos\\\\Flow\\\\Sec.*' => true,
              'Neos\\\\Flow\\\\Sig.*' => true,
              'Neos\\\\Flow\\\\.*ResourceManager' => true,
              'Neos\\\\FluidAdaptor\\\\.*' => true,
              '.+Service$' => true,
              '.+Repository$' => true,
              'PHPUnit_Framework_MockObject_InvocationMocker' => true,
            ),
          ),
        ),
        'mvc' => 
        array (
          'routes' => 
          array (
            'Sandstorm.UserManagement' => true,
            'Neos.Welcome' => 
            array (
              'position' => 'start',
            ),
          ),
          'view' => 
          array (
            'defaultImplementation' => 'Neos\\FluidAdaptor\\View\\TemplateView',
          ),
        ),
        'http' => 
        array (
          'applicationToken' => 'MinorVersion',
          'baseUri' => NULL,
          'chain' => 
          array (
            'preprocess' => 
            array (
              'position' => 'before process',
              'chain' => 
              array (
                'trustedProxies' => 
                array (
                  'position' => 'start',
                  'component' => 'Neos\\Flow\\Http\\Component\\TrustedProxiesComponent',
                ),
              ),
            ),
            'process' => 
            array (
              'chain' => 
              array (
                'routing' => 
                array (
                  'position' => 'start',
                  'component' => 'Neos\\Flow\\Mvc\\Routing\\RoutingComponent',
                ),
                'dispatching' => 
                array (
                  'component' => 'Neos\\Flow\\Mvc\\DispatchComponent',
                ),
                'ajaxWidget' => 
                array (
                  'position' => 'before routing',
                  'component' => 'Neos\\FluidAdaptor\\Core\\Widget\\AjaxWidgetComponent',
                ),
              ),
            ),
            'postprocess' => 
            array (
              'chain' => 
              array (
                'standardsCompliance' => 
                array (
                  'position' => 'end',
                  'component' => 'Neos\\Flow\\Http\\Component\\StandardsComplianceComponent',
                ),
              ),
            ),
          ),
          'trustedProxies' => 
          array (
            'proxies' => '*',
            'headers' => 
            array (
              'clientIp' => 'Client-Ip,X-Forwarded-For,X-Forwarded,X-Cluster-Client-Ip,Forwarded-For,Forwarded',
              'host' => 'X-Forwarded-Host',
              'port' => 'X-Forwarded-Port',
              'proto' => 'X-Forwarded-Proto',
            ),
          ),
        ),
        'log' => 
        array (
          'systemLogger' => 
          array (
            'logger' => 'Neos\\Flow\\Log\\Logger',
            'backend' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
            'backendOptions' => 
            array (
              'logFileURL' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/System_Development.log',
              'createParentDirectories' => true,
              'severityThreshold' => (defined('LOG_DEBUG') ? constant('LOG_DEBUG') : null),
              'maximumLogFileSize' => 10485760,
              'logFilesToKeep' => 1,
              'logMessageOrigin' => false,
            ),
          ),
          'securityLogger' => 
          array (
            'backend' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
            'backendOptions' => 
            array (
              'logFileURL' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/Security_Development.log',
              'createParentDirectories' => true,
              'severityThreshold' => (defined('LOG_DEBUG') ? constant('LOG_DEBUG') : null),
              'maximumLogFileSize' => 10485760,
              'logFilesToKeep' => 1,
              'logIpAddress' => true,
            ),
          ),
          'sqlLogger' => 
          array (
            'backend' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
            'backendOptions' => 
            array (
              'logFileURL' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/Query_Development.log',
              'createParentDirectories' => true,
              'severityThreshold' => (defined('LOG_DEBUG') ? constant('LOG_DEBUG') : null),
              'maximumLogFileSize' => 10485760,
              'logFilesToKeep' => 1,
            ),
          ),
          'i18nLogger' => 
          array (
            'backend' => 'Neos\\Flow\\Log\\Backend\\FileBackend',
            'backendOptions' => 
            array (
              'logFileURL' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Logs/I18n_Development.log',
              'createParentDirectories' => true,
              'severityThreshold' => (defined('LOG_DEBUG') ? constant('LOG_DEBUG') : null),
              'maximumLogFileSize' => 1048576,
              'logFilesToKeep' => 1,
            ),
          ),
        ),
        'i18n' => 
        array (
          'defaultLocale' => 'en',
          'fallbackRule' => 
          array (
            'strict' => false,
            'order' => 
            array (
            ),
          ),
          'scan' => 
          array (
            'includePaths' => 
            array (
              '/Public/' => true,
              '/Private/' => true,
            ),
            'excludePatterns' => 
            array (
              '/node_modules/' => true,
              '/bower_components/' => true,
              '/\\..*/' => true,
            ),
          ),
        ),
        'object' => 
        array (
          'registerFunctionalTestClasses' => false,
          'includeClasses' => 
          array (
          ),
        ),
        'package' => 
        array (
          'inactiveByDefault' => 
          array (
            0 => 'neos.composerplugin',
            1 => 'Composer.Installers',
          ),
          'packagesPathByType' => 
          array (
            'typo3-flow-package' => 'Application',
            'neos-package' => 'Application',
            'typo3-flow-framework' => 'Framework',
            'neos-framework' => 'Framework',
          ),
        ),
        'persistence' => 
        array (
          'backendOptions' => 
          array (
            'driver' => 'pdo_mysql',
            'host' => 'mariadb',
            'dbname' => 'gw2challenge',
            'user' => 'root',
            'password' => 'my-secret-pw',
            'charset' => 'utf8',
          ),
          'cacheAllQueryResults' => false,
          'doctrine' => 
          array (
            'enable' => true,
            'sqlLogger' => NULL,
            'filters' => 
            array (
              'Flow_Security_Entity_Filter' => 'Neos\\Flow\\Security\\Authorization\\Privilege\\Entity\\Doctrine\\SqlFilter',
            ),
            'dbal' => 
            array (
              'mappingTypes' => 
              array (
                'flow_json_array' => 
                array (
                  'dbType' => 'json_array',
                  'className' => 'Neos\\Flow\\Persistence\\Doctrine\\DataTypes\\JsonArrayType',
                ),
                'objectarray' => 
                array (
                  'dbType' => 'array',
                  'className' => 'Neos\\Flow\\Persistence\\Doctrine\\DataTypes\\ObjectArray',
                ),
              ),
            ),
            'eventSubscribers' => 
            array (
            ),
            'eventListeners' => 
            array (
            ),
            'secondLevelCache' => 
            array (
            ),
            'migrations' => 
            array (
              'ignoredTables' => 
              array (
              ),
            ),
          ),
        ),
        'reflection' => 
        array (
          'ignoredTags' => 
          array (
            'api' => true,
            'package' => true,
            'subpackage' => true,
            'license' => true,
            'copyright' => true,
            'author' => true,
            'const' => true,
            'see' => true,
            'todo' => true,
            'scope' => true,
            'fixme' => true,
            'test' => true,
            'expectedException' => true,
            'expectedExceptionMessage' => true,
            'expectedExceptionCode' => true,
            'depends' => true,
            'dataProvider' => true,
            'group' => true,
            'codeCoverageIgnore' => true,
            'requires' => true,
            'Given' => true,
            'When' => true,
            'Then' => true,
            'BeforeScenario' => true,
            'AfterScenario' => true,
            'fixtures' => true,
            'Isolated' => true,
            'AfterFeature' => true,
            'BeforeFeature' => true,
            'BeforeStep' => true,
            'AfterStep' => true,
            'WithoutSecurityChecks' => true,
            'covers' => true,
          ),
          'logIncorrectDocCommentHints' => false,
        ),
        'resource' => 
        array (
          'uploadExtensionBlacklist' => 
          array (
            'aspx' => true,
            'cgi' => true,
            'php3' => true,
            'php4' => true,
            'php5' => true,
            'phtml' => true,
            'php' => true,
            'pl' => true,
            'py' => true,
            'pyc' => true,
            'pyo' => true,
            'rb' => true,
          ),
          'storages' => 
          array (
            'defaultPersistentResourcesStorage' => 
            array (
              'storage' => 'Neos\\Flow\\ResourceManagement\\Storage\\WritableFileSystemStorage',
              'storageOptions' => 
              array (
                'path' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Persistent/Resources/',
              ),
            ),
            'defaultStaticResourcesStorage' => 
            array (
              'storage' => 'Neos\\Flow\\ResourceManagement\\Storage\\PackageStorage',
            ),
          ),
          'collections' => 
          array (
            'static' => 
            array (
              'storage' => 'defaultStaticResourcesStorage',
              'target' => 'localWebDirectoryStaticResourcesTarget',
              'pathPatterns' => 
              array (
                0 => '*/Resources/Public/*',
              ),
            ),
            'persistent' => 
            array (
              'storage' => 'defaultPersistentResourcesStorage',
              'target' => 'localWebDirectoryPersistentResourcesTarget',
            ),
          ),
          'targets' => 
          array (
            'localWebDirectoryStaticResourcesTarget' => 
            array (
              'target' => 'Neos\\Flow\\ResourceManagement\\Target\\FileSystemSymlinkTarget',
              'targetOptions' => 
              array (
                'path' => (defined('FLOW_PATH_WEB') ? constant('FLOW_PATH_WEB') : null) . '_Resources/Static/Packages/',
                'baseUri' => '_Resources/Static/Packages/',
                'extensionBlacklist' => 
                array (
                  'aspx' => true,
                  'cgi' => true,
                  'php3' => true,
                  'php4' => true,
                  'php5' => true,
                  'phtml' => true,
                  'php' => true,
                  'pl' => true,
                  'py' => true,
                  'pyc' => true,
                  'pyo' => true,
                  'rb' => true,
                ),
              ),
            ),
            'localWebDirectoryPersistentResourcesTarget' => 
            array (
              'target' => 'Neos\\Flow\\ResourceManagement\\Target\\FileSystemSymlinkTarget',
              'targetOptions' => 
              array (
                'path' => (defined('FLOW_PATH_WEB') ? constant('FLOW_PATH_WEB') : null) . '_Resources/Persistent/',
                'baseUri' => '_Resources/Persistent/',
                'extensionBlacklist' => 
                array (
                  'aspx' => true,
                  'cgi' => true,
                  'php3' => true,
                  'php4' => true,
                  'php5' => true,
                  'phtml' => true,
                  'php' => true,
                  'pl' => true,
                  'py' => true,
                  'pyc' => true,
                  'pyo' => true,
                  'rb' => true,
                ),
                'subdivideHashPathSegment' => false,
              ),
            ),
          ),
        ),
        'security' => 
        array (
          'firewall' => 
          array (
            'rejectAll' => false,
            'filters' => 
            array (
              'Neos.Flow:CsrfProtection' => 
              array (
                'pattern' => 'CsrfProtection',
                'interceptor' => 'AccessDeny',
              ),
            ),
          ),
          'authentication' => 
          array (
            'providers' => 
            array (
              'Sandstorm.UserManagement:Login' => 
              array (
                'provider' => 'PersistedUsernamePasswordProvider',
                'entryPoint' => 'WebRedirect',
                'entryPointOptions' => 
                array (
                  'routeValues' => 
                  array (
                    '@package' => 'Sandstorm.UserManagement',
                    '@controller' => 'Login',
                    '@action' => 'login',
                  ),
                ),
              ),
            ),
            'authenticationStrategy' => 'atLeastOneToken',
          ),
          'authorization' => 
          array (
            'allowAccessIfAllVotersAbstain' => false,
          ),
          'csrf' => 
          array (
            'csrfStrategy' => 'onePerSession',
          ),
          'cryptography' => 
          array (
            'hashingStrategies' => 
            array (
              'default' => 'bcrypt',
              'pbkdf2' => 'Neos\\Flow\\Security\\Cryptography\\Pbkdf2HashingStrategy',
              'bcrypt' => 'Neos\\Flow\\Security\\Cryptography\\BCryptHashingStrategy',
              'saltedmd5' => 'Neos\\Flow\\Security\\Cryptography\\SaltedMd5HashingStrategy',
            ),
            'Pbkdf2HashingStrategy' => 
            array (
              'dynamicSaltLength' => 8,
              'iterationCount' => 10000,
              'derivedKeyLength' => 64,
              'algorithm' => 'sha256',
            ),
            'BCryptHashingStrategy' => 
            array (
              'cost' => 14,
            ),
            'RSAWalletServicePHP' => 
            array (
              'keystorePath' => (defined('FLOW_PATH_DATA') ? constant('FLOW_PATH_DATA') : null) . 'Persistent/RsaWalletData',
              'openSSLConfiguration' => 
              array (
              ),
            ),
          ),
        ),
        'session' => 
        array (
          'inactivityTimeout' => 3600,
          'name' => 'Neos_Flow_Session',
          'garbageCollection' => 
          array (
            'probability' => 1,
            'maximumPerRun' => 1000,
          ),
          'cookie' => 
          array (
            'lifetime' => 0,
            'path' => '/',
            'secure' => false,
            'httponly' => true,
            'domain' => NULL,
          ),
        ),
        'utility' => 
        array (
          'lockStrategyClassName' => 'Neos\\Utility\\Lock\\FlockLockStrategy',
        ),
      ),
      'DocTools' => 
      array (
        'collections' => 
        array (
          'Flow' => 
          array (
            'commandReferences' => 
            array (
              0 => 'Flow:FlowCommands',
            ),
            'references' => 
            array (
              0 => 'TYPO3Fluid:ViewHelpers',
              1 => 'Flow:FluidAdaptorViewHelpers',
              2 => 'Flow:FlowValidators',
              3 => 'Flow:FlowSignals',
              4 => 'Flow:FlowTypeConverters',
              5 => 'Flow:FlowAnnotations',
            ),
          ),
        ),
        'commandReferences' => 
        array (
          'Flow:FlowCommands' => 
          array (
            'title' => 'Flow Command Reference',
            'packageKeys' => 
            array (
              0 => 'Neos.Flow',
              1 => 'Neos.Party',
              2 => 'Neos.FluidAdaptor',
              3 => 'Neos.Kickstart',
              4 => 'Neos.Welcome',
            ),
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/CommandReference.rst',
          ),
        ),
        'references' => 
        array (
          'TYPO3Fluid:ViewHelpers' => 
          array (
            'title' => 'TYPO3 Fluid ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/TYPO3FluidViewHelperReference.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^TYPO3Fluid\\\\Fluid\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'f' => 'TYPO3Fluid\\Fluid\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Flow:FluidAdaptorViewHelpers' => 
          array (
            'title' => 'FluidAdaptor ViewHelper Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/FluidAdaptorViewHelperReference.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\AbstractViewHelper',
              'classNamePattern' => '/^Neos\\\\FluidAdaptor\\\\ViewHelpers\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FluidViewHelperClassParser',
              'options' => 
              array (
                'namespaces' => 
                array (
                  'f' => 'Neos\\FluidAdaptor\\ViewHelpers',
                ),
              ),
            ),
          ),
          'Flow:FlowValidators' => 
          array (
            'title' => 'Flow Validator Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/ValidatorReference.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\Flow\\Validation\\Validator\\AbstractValidator',
              'classNamePattern' => '/^Neos\\\\Flow\\\\Validation\\\\Validator\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowValidatorClassParser',
            ),
          ),
          'Flow:FlowSignals' => 
          array (
            'title' => 'Flow Signals Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/SignalsReference.rst',
            'affectedClasses' => 
            array (
              'classesContainingMethodsAnnotatedWith' => 'Neos\\Flow\\Annotations\\Signal',
              'classNamePattern' => '/^Neos\\\\Flow\\\\.*$/i',
              'includeAbstractClasses' => true,
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\SignalsParser',
            ),
          ),
          'Flow:FlowTypeConverters' => 
          array (
            'title' => 'Flow TypeConverter Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/TypeConverterReference.rst',
            'affectedClasses' => 
            array (
              'parentClassName' => 'Neos\\Flow\\Property\\TypeConverter\\AbstractTypeConverter',
              'classNamePattern' => '/^Neos\\\\Flow\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowTypeConverterClassParser',
            ),
          ),
          'Flow:FlowAnnotations' => 
          array (
            'title' => 'Flow Annotation Reference',
            'savePathAndFilename' => (defined('FLOW_PATH_PACKAGES') ? constant('FLOW_PATH_PACKAGES') : null) . 'Framework/Neos.Flow/Documentation/TheDefinitiveGuide/PartV/AnnotationReference.rst',
            'affectedClasses' => 
            array (
              'classNamePattern' => '/^Neos\\\\Flow\\\\Annotations\\\\.*$/i',
            ),
            'parser' => 
            array (
              'implementationClassName' => 'Neos\\DocTools\\Domain\\Service\\FlowAnnotationClassParser',
            ),
          ),
        ),
      ),
      'Utility' => 
      array (
        'Files' => 
        array (
        ),
        'Pdo' => 
        array (
        ),
        'OpcodeCache' => 
        array (
        ),
        'ObjectHandling' => 
        array (
        ),
        'Arrays' => 
        array (
        ),
        'MediaTypes' => 
        array (
        ),
        'Schema' => 
        array (
        ),
      ),
      'Cache' => 
      array (
      ),
      'Eel' => 
      array (
      ),
      'FluidAdaptor' => 
      array (
      ),
      'SwiftMailer' => 
      array (
        'transport' => 
        array (
          'type' => 'Swift_SmtpTransport',
          'arguments' => NULL,
          'options' => 
          array (
            'host' => 'smtp.gmail.com',
            'port' => 465,
            'username' => 'gibz.module.151@gmail.com',
            'password' => 'Pe$6A+aprunu',
          ),
        ),
      ),
      'Behat' => 
      array (
      ),
      'Neos' => 
      array (
        'fusion' => 
        array (
          'autoInclude' => 
          array (
            'Sandstorm.UserManagement' => true,
          ),
        ),
        'userInterface' => 
        array (
          'translation' => 
          array (
            'autoInclude' => 
            array (
              'Sandstorm.UserManagement' => 
              array (
                0 => 'NodeTypes/*',
              ),
            ),
          ),
        ),
      ),
      'Welcome' => 
      array (
      ),
      'Kickstarter' => 
      array (
      ),
    ),
    'neos' => 
    array (
      'utilitylock' => 
      array (
      ),
      'errormessages' => 
      array (
      ),
      'utilityunicode' => 
      array (
      ),
      'composerplugin' => 
      array (
      ),
    ),
    'typo3fluid' => 
    array (
      'fluid' => 
      array (
      ),
    ),
    'paragonie' => 
    array (
      'randomcompat' => 
      array (
      ),
    ),
    'ramsey' => 
    array (
      'uuid' => 
      array (
      ),
    ),
    'Doctrine' => 
    array (
      'Common' => 
      array (
        'Collections' => 
        array (
        ),
        'Inflector' => 
        array (
        ),
        'Lexer' => 
        array (
        ),
      ),
      'DBAL' => 
      array (
      ),
      'ORM' => 
      array (
      ),
    ),
    'doctrine' => 
    array (
      'cache' => 
      array (
      ),
      'annotations' => 
      array (
      ),
      'common' => 
      array (
      ),
      'instantiator' => 
      array (
      ),
      'migrations' => 
      array (
      ),
    ),
    'symfony' => 
    array (
      'polyfillmbstring' => 
      array (
      ),
      'debug' => 
      array (
      ),
      'console' => 
      array (
      ),
      'yaml' => 
      array (
      ),
      'domcrawler' => 
      array (
      ),
    ),
    'psr' => 
    array (
      'log' => 
      array (
      ),
    ),
    'zendframework' => 
    array (
      'zendeventmanager' => 
      array (
      ),
      'zendcode' => 
      array (
      ),
    ),
    'ocramius' => 
    array (
      'packageversions' => 
      array (
      ),
      'proxymanager' => 
      array (
      ),
    ),
    'swiftmailer' => 
    array (
      'swiftmailer' => 
      array (
      ),
    ),
    'pelago' => 
    array (
      'emogrifier' => 
      array (
      ),
    ),
    'webmozart' => 
    array (
      'assert' => 
      array (
      ),
    ),
    'org' => 
    array (
      'bovigo' => 
      array (
        'vfs' => 
        array (
        ),
      ),
    ),
    'Sandstorm' => 
    array (
      'TemplateMailer' => 
      array (
        'senderAddresses' => 
        array (
          'default' => 
          array (
            'name' => 'Sandstorm TemplateMailer',
            'address' => 'test@example.com',
          ),
          'sandstorm_usermanagement_sender_email' => 
          array (
            'name' => 'Sandstorm Usermanagement Package',
            'address' => 'test@example.com',
          ),
        ),
        'templatePackages' => 
        array (
          99999 => 'Sandstorm.UserManagement',
        ),
        'defaultTemplateVariables' => 
        array (
          'baseUri' => 'Neos.Flow.http.baseUri',
        ),
        'logging' => 
        array (
          'sendingErrors' => 'log',
          'sendingSuccess' => 'log',
        ),
      ),
      'UserManagement' => 
      array (
        'activationTokenTimeout' => '2 days',
        'resetPasswordTokenTimeout' => '4 hours',
        'authFailedMessage' => 
        array (
          'title' => 'Login nicht möglich',
          'body' => 'Sie haben ungültige Zugangsdaten eingegeben. Bitte versuchen Sie es noch einmal.',
        ),
        'email' => 
        array (
          'subjectActivation' => 'Please confirm your account',
          'subjectResetPassword' => 'Password reset',
        ),
        'rolesForNewUsers' => 
        array (
        ),
        'redirect' => 
        array (
          'afterLogin' => 
          array (
          ),
          'afterLogout' => 
          array (
          ),
        ),
      ),
    ),
    'schilter' => 
    array (
      'gw2challenges' => 
      array (
      ),
    ),
    'phpunit' => 
    array (
      'phptimer' => 
      array (
      ),
      'phptexttemplate' => 
      array (
      ),
      'phpunitmockobjects' => 
      array (
      ),
      'phptokenstream' => 
      array (
      ),
      'phpfileiterator' => 
      array (
      ),
      'phpcodecoverage' => 
      array (
      ),
      'phpunit' => 
      array (
      ),
    ),
    'sebastian' => 
    array (
      'recursioncontext' => 
      array (
      ),
      'exporter' => 
      array (
      ),
      'codeunitreverselookup' => 
      array (
      ),
      'environment' => 
      array (
      ),
      'version' => 
      array (
      ),
      'diff' => 
      array (
      ),
      'comparator' => 
      array (
      ),
      'globalstate' => 
      array (
      ),
      'objectenumerator' => 
      array (
      ),
      'resourceoperations' => 
      array (
      ),
    ),
    'phpdocumentor' => 
    array (
      'reflectioncommon' => 
      array (
      ),
      'typeresolver' => 
      array (
      ),
      'reflectiondocblock' => 
      array (
      ),
    ),
    'phpspec' => 
    array (
      'prophecy' => 
      array (
      ),
    ),
    'myclabs' => 
    array (
      'deepcopy' => 
      array (
      ),
    ),
  ),
  'Routes' => 
  array (
    0 => 
    array (
      'name' => 'gw2challenges :: Index',
      'uriPattern' => '',
      'defaults' => 
      array (
        '@package' => 'schilter.gw2challenges',
        '@controller' => 'Mini',
        '@action' => 'index',
        '@format' => 'html',
      ),
    ),
    1 => 
    array (
      'name' => 'gw2challenges :: MiniController',
      'uriPattern' => 'mini/{@action}',
      'defaults' => 
      array (
        '@package' => 'schilter.gw2challenges',
        '@controller' => 'Mini',
        '@format' => 'html',
      ),
    ),
    2 => 
    array (
      'name' => 'gw2challenges :: UserController',
      'uriPattern' => 'user/{@action}',
      'defaults' => 
      array (
        '@package' => 'schilter.gw2challenges',
        '@controller' => 'User',
        '@format' => 'html',
      ),
    ),
    3 => 
    array (
      'name' => 'gw2challenges :: ChallengeController',
      'uriPattern' => 'challenge/{@action}',
      'defaults' => 
      array (
        '@package' => 'schilter.gw2challenges',
        '@controller' => 'Challenge',
        '@format' => 'html',
      ),
    ),
    4 => 
    array (
      'name' => 'Neos.Welcome :: Welcome screen',
      'uriPattern' => 'flow/welcome',
      'defaults' => 
      array (
        '@package' => 'Neos.Welcome',
        '@controller' => 'Standard',
        '@action' => 'index',
        '@format' => 'html',
      ),
    ),
    5 => 
    array (
      'name' => 'Neos.Welcome :: Redirect to welcome screen',
      'uriPattern' => '',
      'defaults' => 
      array (
        '@package' => 'Neos.Welcome',
        '@controller' => 'Standard',
        '@action' => 'redirect',
        '@format' => 'html',
      ),
    ),
    6 => 
    array (
      'name' => 'Sandstorm.UserManagement :: Login Screen',
      'uriPattern' => 'login',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'Login',
        '@action' => 'login',
        '@format' => 'html',
      ),
    ),
    7 => 
    array (
      'name' => 'Sandstorm.UserManagement :: Login: Authenticate',
      'uriPattern' => 'login/authenticate',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'Login',
        '@action' => 'authenticate',
        '@format' => 'html',
      ),
    ),
    8 => 
    array (
      'name' => 'Sandstorm.UserManagement :: Logout',
      'uriPattern' => 'logout',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'Login',
        '@action' => 'logout',
        '@format' => 'html',
      ),
    ),
    9 => 
    array (
      'name' => 'Sandstorm.UserManagement :: Account: Registration: show form',
      'uriPattern' => 'account/signup/index',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'Registration',
        '@action' => 'index',
        '@format' => 'html',
      ),
    ),
    10 => 
    array (
      'name' => 'Sandstorm.UserManagement :: Account: submit signup form',
      'uriPattern' => 'account/signup/submit',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'Registration',
        '@action' => 'register',
        '@format' => 'html',
      ),
    ),
    11 => 
    array (
      'name' => 'Sandstorm.UserManagement :: Account: activate',
      'uriPattern' => 'account/activate/{token}',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'Registration',
        '@action' => 'activateAccount',
        '@format' => 'html',
      ),
    ),
    12 => 
    array (
      'name' => 'Sandstorm.UserManagement :: User: send new password link',
      'uriPattern' => 'account/forgotpassword',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'ResetPassword',
        '@action' => 'index',
        '@format' => 'html',
      ),
    ),
    13 => 
    array (
      'name' => 'Sandstorm.UserManagement :: User: request new password token',
      'uriPattern' => 'account/requestpasswordtoken',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'ResetPassword',
        '@action' => 'requestToken',
        '@format' => 'html',
      ),
    ),
    14 => 
    array (
      'name' => 'Sandstorm.UserManagement :: User: reset password',
      'uriPattern' => 'account/resetpassword/{token}',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'ResetPassword',
        '@action' => 'insertNewPassword',
        '@format' => 'html',
      ),
    ),
    15 => 
    array (
      'name' => 'Sandstorm.UserManagement :: User: reset password',
      'uriPattern' => 'account/updatepassword',
      'defaults' => 
      array (
        '@package' => 'Sandstorm.UserManagement',
        '@controller' => 'ResetPassword',
        '@action' => 'updatePassword',
        '@format' => 'html',
      ),
    ),
  ),
  'Policy' => 
  array (
    'roles' => 
    array (
      'Neos.Flow:Everybody' => 
      array (
        'abstract' => true,
        'privileges' => 
        array (
          0 => 
          array (
            'privilegeTarget' => 'Sandstorm.UserManagement:Login',
            'permission' => 'GRANT',
          ),
          1 => 
          array (
            'privilegeTarget' => 'Sandstorm.UserManagement:Registration',
            'permission' => 'GRANT',
          ),
          2 => 
          array (
            'privilegeTarget' => 'Sandstorm.UserManagement:Logout',
            'permission' => 'GRANT',
          ),
        ),
      ),
      'Neos.Flow:Anonymous' => 
      array (
        'abstract' => true,
      ),
      'Neos.Flow:AuthenticatedUser' => 
      array (
        'abstract' => true,
      ),
    ),
    'privilegeTargets' => 
    array (
      'Neos\\Flow\\Security\\Authorization\\Privilege\\Method\\MethodPrivilege' => 
      array (
        'Sandstorm.UserManagement:Login' => 
        array (
          'matcher' => 'method(Sandstorm\\UserManagement\\Controller\\(Login|ResetPassword)Controller->(?!initialize).*Action())',
        ),
        'Sandstorm.UserManagement:Logout' => 
        array (
          'matcher' => 'method(Neos\\Flow\\Security\\Authentication\\Controller\\AbstractAuthenticationController->logoutAction())',
        ),
        'Sandstorm.UserManagement:Registration' => 
        array (
          'matcher' => 'method(Sandstorm\\UserManagement\\Controller\\RegistrationController->(?!initialize).*Action())',
        ),
      ),
    ),
  ),
  'Views' => 
  array (
    0 => 
    array (
      'requestFilter' => 'mainRequest.isPackage("Neos.Neos") && isPackage("Sandstorm.UserManagement")',
      'options' => 
      array (
        'layoutRootPaths' => 
        array (
          0 => 'resource://Sandstorm.UserManagement/Private/Layouts/Neos',
        ),
      ),
    ),
  ),
);
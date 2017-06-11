<?php 
class layout_Default_0aa3acb6b50f98f99498807ee2ab99c076dc31ad extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'Neos\\FluidAdaptor\\ViewHelpers',
  ),
  'neos.utility.files' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.pdo' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utilitylock' => 
  array (
    0 => 'Neos\\Utility\\Lock\\ViewHelpers',
  ),
  'neos.utility.opcodecache' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.cache' => 
  array (
    0 => 'Neos\\Cache\\ViewHelpers',
  ),
  'neos.errormessages' => 
  array (
    0 => 'Neos\\Error\\Messages\\ViewHelpers',
  ),
  'neos.utility.objecthandling' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.arrays' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.mediatypes' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.schema' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utilityunicode' => 
  array (
    0 => 'Neos\\Utility\\Unicode\\ViewHelpers',
  ),
  'typo3fluid.fluid' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
  ),
  'ramsey.uuid' => 
  array (
    0 => 'Ramsey\\Uuid\\ViewHelpers',
  ),
  'doctrine.common.collections' => 
  array (
    0 => 'Doctrine\\Common\\Collections\\ViewHelpers',
  ),
  'doctrine.common.inflector' => 
  array (
    0 => 'Doctrine\\Common\\Inflector\\ViewHelpers',
  ),
  'doctrine.cache' => 
  array (
    0 => 'Doctrine\\Common\\Cache\\ViewHelpers',
  ),
  'doctrine.common.lexer' => 
  array (
    0 => 'Doctrine\\Common\\Lexer\\ViewHelpers',
  ),
  'doctrine.annotations' => 
  array (
    0 => 'Doctrine\\Common\\Annotations\\ViewHelpers',
  ),
  'doctrine.common' => 
  array (
    0 => 'Doctrine\\Common\\ViewHelpers',
  ),
  'doctrine.dbal' => 
  array (
    0 => 'Doctrine\\DBAL\\ViewHelpers',
  ),
  'doctrine.instantiator' => 
  array (
    0 => 'Doctrine\\Instantiator\\ViewHelpers',
  ),
  'symfony.polyfillmbstring' => 
  array (
    0 => 'Symfony\\Polyfill\\Mbstring\\ViewHelpers',
  ),
  'psr.log' => 
  array (
    0 => 'Psr\\Log\\ViewHelpers',
  ),
  'symfony.debug' => 
  array (
    0 => 'Symfony\\Component\\Debug\\ViewHelpers',
  ),
  'symfony.console' => 
  array (
    0 => 'Symfony\\Component\\Console\\ViewHelpers',
  ),
  'doctrine.orm' => 
  array (
    0 => 'Doctrine\\ORM\\ViewHelpers',
  ),
  'symfony.yaml' => 
  array (
    0 => 'Symfony\\Component\\Yaml\\ViewHelpers',
  ),
  'zendframework.zendeventmanager' => 
  array (
    0 => 'Zend\\EventManager\\ViewHelpers',
  ),
  'zendframework.zendcode' => 
  array (
    0 => 'Zend\\Code\\ViewHelpers',
  ),
  'ocramius.packageversions' => 
  array (
    0 => 'PackageVersions\\ViewHelpers',
  ),
  'ocramius.proxymanager' => 
  array (
    0 => 'ProxyManager\\ViewHelpers',
  ),
  'doctrine.migrations' => 
  array (
    0 => 'Doctrine\\DBAL\\Migrations\\ViewHelpers',
  ),
  'symfony.domcrawler' => 
  array (
    0 => 'Symfony\\Component\\DomCrawler\\ViewHelpers',
  ),
  'neos.composerplugin' => 
  array (
    0 => 'Neos\\ComposerPlugin\\ViewHelpers',
  ),
  'pelago.emogrifier' => 
  array (
    0 => 'Pelago\\ViewHelpers',
  ),
  'webmozart.assert' => 
  array (
    0 => 'Webmozart\\Assert\\ViewHelpers',
  ),
  'org.bovigo.vfs' => 
  array (
    0 => 'org\\bovigo\\vfs\\ViewHelpers',
  ),
  'neos.eel' => 
  array (
    0 => 'Neos\\Eel\\ViewHelpers',
  ),
  'neos.fluidadaptor' => 
  array (
    0 => 'Neos\\FluidAdaptor\\ViewHelpers',
  ),
  'neos.flow' => 
  array (
    0 => 'Neos\\Flow\\ViewHelpers',
    1 => 'Neos\\Flow\\Core\\Migrations\\ViewHelpers',
  ),
  'neos.swiftmailer' => 
  array (
    0 => 'Neos\\SwiftMailer\\ViewHelpers',
  ),
  'neos.behat' => 
  array (
    0 => 'Neos\\Behat\\ViewHelpers',
  ),
  'sandstorm.templatemailer' => 
  array (
    0 => 'Sandstorm\\TemplateMailer\\ViewHelpers',
  ),
  'sandstorm.usermanagement' => 
  array (
    0 => 'Sandstorm\\UserManagement\\ViewHelpers',
  ),
  'schilter.gw2challenges' => 
  array (
    0 => 'schilter\\gw2challenges\\ViewHelpers',
  ),
  'neos.welcome' => 
  array (
    0 => 'Neos\\Welcome\\ViewHelpers',
  ),
  'phpdocumentor.reflectioncommon' => 
  array (
    0 => 'phpDocumentor\\Reflection\\ViewHelpers',
  ),
  'phpdocumentor.typeresolver' => 
  array (
    0 => 'phpDocumentor\\Reflection\\ViewHelpers',
  ),
  'phpdocumentor.reflectiondocblock' => 
  array (
    0 => 'phpDocumentor\\Reflection\\ViewHelpers',
  ),
  'phpspec.prophecy' => 
  array (
    0 => 'Prophecy\\ViewHelpers',
  ),
  'myclabs.deepcopy' => 
  array (
    0 => 'DeepCopy\\ViewHelpers',
  ),
  'neos.kickstarter' => 
  array (
    0 => 'Neos\\Kickstarter\\ViewHelpers',
  ),
  'um' => 
  array (
    0 => 'Sandstorm\\UserManagement\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

<!DOCTYPE html>
<html>
    <head>
    	';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\BaseViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();

$output0 .= Neos\FluidAdaptor\ViewHelpers\BaseViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '    
        <meta charset="utf-8">
        <title>GW2Challenges</title>        
        <script src="https://unpkg.com/jquery" ></script>
        <script src="https://unpkg.com/vue" ></script>
        <link href="_Resources/Static/Packages/Default/css/stylesheet.css" rel="stylesheet" type="text/css"/>              
    </head>
    <body>
    	<div>
    		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return 'Index';
};
$arguments3 = array();
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['action'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['controller'] = NULL;
$arguments3['package'] = NULL;
$arguments3['subpackage'] = NULL;
$arguments3['section'] = '';
$arguments3['format'] = '';
$arguments3['additionalParams'] = array (
);
$arguments3['addQueryString'] = false;
$arguments3['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments3['useParentRequest'] = false;
$arguments3['absolute'] = true;
$arguments3['useMainRequest'] = false;
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['name'] = NULL;
$arguments3['rel'] = NULL;
$arguments3['rev'] = NULL;
$arguments3['target'] = NULL;
$arguments3['action'] = 'index';
$arguments3['controller'] = 'Mini';

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return 'All Minis';
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['package'] = NULL;
$arguments5['subpackage'] = NULL;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['useParentRequest'] = false;
$arguments5['absolute'] = true;
$arguments5['useMainRequest'] = false;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['name'] = NULL;
$arguments5['rel'] = NULL;
$arguments5['rev'] = NULL;
$arguments5['target'] = NULL;
$arguments5['action'] = 'all';
$arguments5['controller'] = 'Mini';

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
    		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return 'My Minis';
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['action'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['controller'] = NULL;
$arguments7['package'] = NULL;
$arguments7['subpackage'] = NULL;
$arguments7['section'] = '';
$arguments7['format'] = '';
$arguments7['additionalParams'] = array (
);
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['useParentRequest'] = false;
$arguments7['absolute'] = true;
$arguments7['useMainRequest'] = false;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = NULL;
$arguments7['rel'] = NULL;
$arguments7['rev'] = NULL;
$arguments7['target'] = NULL;
$arguments7['action'] = 'my';
$arguments7['controller'] = 'Mini';

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
    		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return 'Reload my Minis';
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['action'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['controller'] = NULL;
$arguments9['package'] = NULL;
$arguments9['subpackage'] = NULL;
$arguments9['section'] = '';
$arguments9['format'] = '';
$arguments9['additionalParams'] = array (
);
$arguments9['addQueryString'] = false;
$arguments9['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments9['useParentRequest'] = false;
$arguments9['absolute'] = true;
$arguments9['useMainRequest'] = false;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['name'] = NULL;
$arguments9['rel'] = NULL;
$arguments9['rev'] = NULL;
$arguments9['target'] = NULL;
$arguments9['action'] = 'reload';
$arguments9['controller'] = 'Mini';

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
    		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return 'Api Key';
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['action'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['controller'] = NULL;
$arguments11['package'] = NULL;
$arguments11['subpackage'] = NULL;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['additionalParams'] = array (
);
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['useParentRequest'] = false;
$arguments11['absolute'] = true;
$arguments11['useMainRequest'] = false;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['name'] = NULL;
$arguments11['rel'] = NULL;
$arguments11['rev'] = NULL;
$arguments11['target'] = NULL;
$arguments11['action'] = 'api';
$arguments11['controller'] = 'User';

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
    		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return 'Challenges';
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['action'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['controller'] = NULL;
$arguments13['package'] = NULL;
$arguments13['subpackage'] = NULL;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['additionalParams'] = array (
);
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['useParentRequest'] = false;
$arguments13['absolute'] = true;
$arguments13['useMainRequest'] = false;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['name'] = NULL;
$arguments13['rel'] = NULL;
$arguments13['rev'] = NULL;
$arguments13['target'] = NULL;
$arguments13['action'] = 'list';
$arguments13['controller'] = 'Challenge';

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
    		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return 'New Challenges';
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['action'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['controller'] = NULL;
$arguments15['package'] = NULL;
$arguments15['subpackage'] = NULL;
$arguments15['section'] = '';
$arguments15['format'] = '';
$arguments15['additionalParams'] = array (
);
$arguments15['addQueryString'] = false;
$arguments15['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments15['useParentRequest'] = false;
$arguments15['absolute'] = true;
$arguments15['useMainRequest'] = false;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$arguments15['action'] = 'new';
$arguments15['controller'] = 'Challenge';

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
    	</div>
    	
    	<div>
    		';
// Rendering ViewHelper Sandstorm\UserManagement\ViewHelpers\IfAuthenticatedViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
			  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
			    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return 'Logout';
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['action'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['controller'] = NULL;
$arguments29['package'] = NULL;
$arguments29['subpackage'] = NULL;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['additionalParams'] = array (
);
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['useParentRequest'] = false;
$arguments29['absolute'] = true;
$arguments29['useMainRequest'] = false;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = NULL;
$arguments29['rel'] = NULL;
$arguments29['rev'] = NULL;
$arguments29['target'] = NULL;
$arguments29['action'] = 'logout';
$arguments29['controller'] = 'Login';
$arguments29['package'] = 'Sandstorm.UserManagement';

$output28 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
			  ';
return $output28;
};
$arguments26 = array();

$output25 .= '';

$output25 .= '
			  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
			    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return 'Login';
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['action'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['controller'] = NULL;
$arguments34['package'] = NULL;
$arguments34['subpackage'] = NULL;
$arguments34['section'] = '';
$arguments34['format'] = '';
$arguments34['additionalParams'] = array (
);
$arguments34['addQueryString'] = false;
$arguments34['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments34['useParentRequest'] = false;
$arguments34['absolute'] = true;
$arguments34['useMainRequest'] = false;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = NULL;
$arguments34['rel'] = NULL;
$arguments34['rev'] = NULL;
$arguments34['target'] = NULL;
$arguments34['action'] = 'login';
$arguments34['controller'] = 'Login';
$arguments34['package'] = 'Sandstorm.UserManagement';

$output33 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
			  ';
return $output33;
};
$arguments31 = array();
$arguments31['if'] = NULL;

$output25 .= '';

$output25 .= '
			';
return $output25;
};
$arguments17 = array();
$arguments17['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
			    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return 'Logout';
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['action'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['controller'] = NULL;
$arguments20['package'] = NULL;
$arguments20['subpackage'] = NULL;
$arguments20['section'] = '';
$arguments20['format'] = '';
$arguments20['additionalParams'] = array (
);
$arguments20['addQueryString'] = false;
$arguments20['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments20['useParentRequest'] = false;
$arguments20['absolute'] = true;
$arguments20['useMainRequest'] = false;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['name'] = NULL;
$arguments20['rel'] = NULL;
$arguments20['rev'] = NULL;
$arguments20['target'] = NULL;
$arguments20['action'] = 'logout';
$arguments20['controller'] = 'Login';
$arguments20['package'] = 'Sandstorm.UserManagement';

$output19 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
			  ';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
			    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return 'Login';
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['action'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['controller'] = NULL;
$arguments23['package'] = NULL;
$arguments23['subpackage'] = NULL;
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['additionalParams'] = array (
);
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['useParentRequest'] = false;
$arguments23['absolute'] = true;
$arguments23['useMainRequest'] = false;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['name'] = NULL;
$arguments23['rel'] = NULL;
$arguments23['rev'] = NULL;
$arguments23['target'] = NULL;
$arguments23['action'] = 'login';
$arguments23['controller'] = 'Login';
$arguments23['package'] = 'Sandstorm.UserManagement';

$output22 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
			  ';
return $output22;
};

$output0 .= Sandstorm\UserManagement\ViewHelpers\IfAuthenticatedViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
    	</div>
    
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['as'] = NULL;
$arguments36['severity'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['class'] = 'flashmessages';

$output0 .= Neos\FluidAdaptor\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['section'] = NULL;
$arguments38['partial'] = NULL;
$arguments38['delegate'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['optional'] = false;
$arguments38['default'] = NULL;
$arguments38['contentAs'] = NULL;
$arguments38['section'] = 'Content';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '
    </body>
    <footer>
    	<script src="_Resources/Static/Packages/Default/Javascript/script.js" type="text/javascript"></script>
    </footer>
</html>
';

return $output0;
}


}
#0             24585     
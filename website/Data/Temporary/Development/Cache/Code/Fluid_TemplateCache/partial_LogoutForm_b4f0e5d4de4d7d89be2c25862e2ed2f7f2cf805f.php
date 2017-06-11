<?php 
class partial_LogoutForm_b4f0e5d4de4d7d89be2c25862e2ed2f7f2cf805f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    2 => 'TYPO3\\Fluid\\ViewHelpers',
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
  'usermanagement' => 
  array (
    0 => 'Sandstorm\\UserManagement\\ViewHelpers',
  ),
));
}

/**
 * section Logout
 */
public function section_e43d612e11f1568f2373e719d4c4b08dcecdc7cc(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
  <p>Sie sind eingeloggt als <strong>';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('account.accountIdentifier', $array1), ENT_QUOTES);

$output0 .= '</strong>.</p>
  ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['value'] = 'Ausloggen';
$arguments6['class'] = 'button primary';

$output5 .= Neos\FluidAdaptor\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
  ';
return $output5;
};
$arguments2 = array();
$arguments2['additionalAttributes'] = NULL;
$arguments2['data'] = NULL;
$arguments2['action'] = NULL;
$arguments2['arguments'] = array (
);
$arguments2['controller'] = NULL;
$arguments2['package'] = NULL;
$arguments2['subpackage'] = NULL;
$arguments2['object'] = NULL;
$arguments2['section'] = '';
$arguments2['format'] = '';
$arguments2['additionalParams'] = array (
);
$arguments2['absolute'] = false;
$arguments2['addQueryString'] = false;
$arguments2['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments2['fieldNamePrefix'] = NULL;
$arguments2['actionUri'] = NULL;
$arguments2['objectName'] = NULL;
$arguments2['useParentRequest'] = false;
$arguments2['enctype'] = NULL;
$arguments2['method'] = NULL;
$arguments2['name'] = NULL;
$arguments2['onreset'] = NULL;
$arguments2['onsubmit'] = NULL;
$arguments2['class'] = NULL;
$arguments2['dir'] = NULL;
$arguments2['id'] = NULL;
$arguments2['lang'] = NULL;
$arguments2['style'] = NULL;
$arguments2['title'] = NULL;
$arguments2['accesskey'] = NULL;
$arguments2['tabindex'] = NULL;
$arguments2['onclick'] = NULL;
$arguments2['action'] = 'logout';
$arguments2['method'] = 'post';
// Rendering Array
$array4 = array();
$array4['role'] = 'form';
$arguments2['additionalAttributes'] = $array4;

$output0 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output8 = '';

$output8 .= '<!DOCTYPE html>
<html xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
      xmlns:usermanagement="http://typo3.org/ns/Sandstorm/UserManagement/ViewHelpers"
      xmlns="http://www.w3.org/1999/xhtml"
      lang="en">

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
  <p>Sie sind eingeloggt als <strong>';
$array12 = array (
);
$output11 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('account.accountIdentifier', $array12), ENT_QUOTES);

$output11 .= '</strong>.</p>
  ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['property'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['value'] = 'Ausloggen';
$arguments17['class'] = 'button primary';

$output16 .= Neos\FluidAdaptor\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
  ';
return $output16;
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
$arguments13['object'] = NULL;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['fieldNamePrefix'] = NULL;
$arguments13['actionUri'] = NULL;
$arguments13['objectName'] = NULL;
$arguments13['useParentRequest'] = false;
$arguments13['enctype'] = NULL;
$arguments13['method'] = NULL;
$arguments13['name'] = NULL;
$arguments13['onreset'] = NULL;
$arguments13['onsubmit'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['action'] = 'logout';
$arguments13['method'] = 'post';
// Rendering Array
$array15 = array();
$array15['role'] = 'form';
$arguments13['additionalAttributes'] = $array15;

$output11 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output11 .= '
';
return $output11;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['name'] = 'Logout';

$output8 .= '';

$output8 .= '

</html>
';

return $output8;
}


}
#0             11801     
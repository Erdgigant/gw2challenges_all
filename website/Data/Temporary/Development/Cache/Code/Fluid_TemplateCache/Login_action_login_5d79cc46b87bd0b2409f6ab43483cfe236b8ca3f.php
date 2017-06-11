<?php 
class Login_action_login_5d79cc46b87bd0b2409f6ab43483cfe236b8ca3f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Login';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

  ';
// Rendering ViewHelper Sandstorm\UserManagement\ViewHelpers\IfAuthenticatedViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['partial'] = 'LogoutForm';
$arguments18['section'] = 'Logout';
$arguments18['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
    ';
return $output17;
};
$arguments15 = array();

$output14 .= '';

$output14 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return '
        <fieldset>
          <input placeholder="test@example.com" name="__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]" type="email" autofocus>
          <input placeholder="Passwort" name="__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]" type="password" value="">
          <input type="submit" value="Login" class="button large primary" />
        </fieldset>
      ';
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['action'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['controller'] = NULL;
$arguments24['package'] = NULL;
$arguments24['subpackage'] = NULL;
$arguments24['object'] = NULL;
$arguments24['section'] = '';
$arguments24['format'] = '';
$arguments24['additionalParams'] = array (
);
$arguments24['absolute'] = false;
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['fieldNamePrefix'] = NULL;
$arguments24['actionUri'] = NULL;
$arguments24['objectName'] = NULL;
$arguments24['useParentRequest'] = false;
$arguments24['enctype'] = NULL;
$arguments24['method'] = NULL;
$arguments24['name'] = NULL;
$arguments24['onreset'] = NULL;
$arguments24['onsubmit'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['action'] = 'authenticate';
$arguments24['method'] = 'post';

$output23 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return 'Passwort vergessen?';
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['action'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['controller'] = NULL;
$arguments26['package'] = NULL;
$arguments26['subpackage'] = NULL;
$arguments26['section'] = '';
$arguments26['format'] = '';
$arguments26['additionalParams'] = array (
);
$arguments26['addQueryString'] = false;
$arguments26['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments26['useParentRequest'] = false;
$arguments26['absolute'] = true;
$arguments26['useMainRequest'] = false;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = NULL;
$arguments26['rel'] = NULL;
$arguments26['rev'] = NULL;
$arguments26['target'] = NULL;
$arguments26['action'] = 'index';
$arguments26['controller'] = 'ResetPassword';

$output23 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output23 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return 'Registrierung';
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['action'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['controller'] = NULL;
$arguments28['package'] = NULL;
$arguments28['subpackage'] = NULL;
$arguments28['section'] = '';
$arguments28['format'] = '';
$arguments28['additionalParams'] = array (
);
$arguments28['addQueryString'] = false;
$arguments28['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments28['useParentRequest'] = false;
$arguments28['absolute'] = true;
$arguments28['useMainRequest'] = false;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['rev'] = NULL;
$arguments28['target'] = NULL;
$arguments28['action'] = 'index';
$arguments28['controller'] = 'Registration';

$output23 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output23 .= '
    ';
return $output23;
};
$arguments21 = array();
$arguments21['if'] = NULL;

$output14 .= '';

$output14 .= '
  ';
return $output14;
};
$arguments1 = array();
$arguments1['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
$arguments1['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['partial'] = 'LogoutForm';
$arguments4['section'] = 'Logout';
$arguments4['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return '
        <fieldset>
          <input placeholder="test@example.com" name="__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]" type="email" autofocus>
          <input placeholder="Passwort" name="__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]" type="password" value="">
          <input type="submit" value="Login" class="button large primary" />
        </fieldset>
      ';
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['action'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['controller'] = NULL;
$arguments8['package'] = NULL;
$arguments8['subpackage'] = NULL;
$arguments8['object'] = NULL;
$arguments8['section'] = '';
$arguments8['format'] = '';
$arguments8['additionalParams'] = array (
);
$arguments8['absolute'] = false;
$arguments8['addQueryString'] = false;
$arguments8['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments8['fieldNamePrefix'] = NULL;
$arguments8['actionUri'] = NULL;
$arguments8['objectName'] = NULL;
$arguments8['useParentRequest'] = false;
$arguments8['enctype'] = NULL;
$arguments8['method'] = NULL;
$arguments8['name'] = NULL;
$arguments8['onreset'] = NULL;
$arguments8['onsubmit'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['action'] = 'authenticate';
$arguments8['method'] = 'post';

$output7 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return 'Passwort vergessen?';
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['action'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['controller'] = NULL;
$arguments10['package'] = NULL;
$arguments10['subpackage'] = NULL;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['useParentRequest'] = false;
$arguments10['absolute'] = true;
$arguments10['useMainRequest'] = false;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['name'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['rev'] = NULL;
$arguments10['target'] = NULL;
$arguments10['action'] = 'index';
$arguments10['controller'] = 'ResetPassword';

$output7 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output7 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return 'Registrierung';
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['action'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['controller'] = NULL;
$arguments12['package'] = NULL;
$arguments12['subpackage'] = NULL;
$arguments12['section'] = '';
$arguments12['format'] = '';
$arguments12['additionalParams'] = array (
);
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['useParentRequest'] = false;
$arguments12['absolute'] = true;
$arguments12['useMainRequest'] = false;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['name'] = NULL;
$arguments12['rel'] = NULL;
$arguments12['rev'] = NULL;
$arguments12['target'] = NULL;
$arguments12['action'] = 'index';
$arguments12['controller'] = 'Registration';

$output7 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output7 .= '
    ';
return $output7;
};

$output0 .= Sandstorm\UserManagement\ViewHelpers\IfAuthenticatedViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output30 = '';

$output30 .= '<!DOCTYPE html>
<html xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
      xmlns:usermanagement="http://typo3.org/ns/Sandstorm/UserManagement/ViewHelpers"
      xmlns="http://www.w3.org/1999/xhtml"
      lang="en">

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['name'] = NULL;
$arguments31['name'] = 'Default';

$output30 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext), ENT_QUOTES);

$output30 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return 'Login';
};
$arguments33 = array();
$arguments33['name'] = NULL;
$arguments33['name'] = 'Title';

$output30 .= '';

$output30 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '

  ';
// Rendering ViewHelper Sandstorm\UserManagement\ViewHelpers\IfAuthenticatedViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['section'] = NULL;
$arguments55['partial'] = NULL;
$arguments55['delegate'] = NULL;
$arguments55['arguments'] = array (
);
$arguments55['optional'] = false;
$arguments55['default'] = NULL;
$arguments55['contentAs'] = NULL;
$arguments55['partial'] = 'LogoutForm';
$arguments55['section'] = 'Logout';
$arguments55['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
    ';
return $output54;
};
$arguments52 = array();

$output51 .= '';

$output51 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return '
        <fieldset>
          <input placeholder="test@example.com" name="__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]" type="email" autofocus>
          <input placeholder="Passwort" name="__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]" type="password" value="">
          <input type="submit" value="Login" class="button large primary" />
        </fieldset>
      ';
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['action'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['controller'] = NULL;
$arguments61['package'] = NULL;
$arguments61['subpackage'] = NULL;
$arguments61['object'] = NULL;
$arguments61['section'] = '';
$arguments61['format'] = '';
$arguments61['additionalParams'] = array (
);
$arguments61['absolute'] = false;
$arguments61['addQueryString'] = false;
$arguments61['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments61['fieldNamePrefix'] = NULL;
$arguments61['actionUri'] = NULL;
$arguments61['objectName'] = NULL;
$arguments61['useParentRequest'] = false;
$arguments61['enctype'] = NULL;
$arguments61['method'] = NULL;
$arguments61['name'] = NULL;
$arguments61['onreset'] = NULL;
$arguments61['onsubmit'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['action'] = 'authenticate';
$arguments61['method'] = 'post';

$output60 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return 'Passwort vergessen?';
};
$arguments63 = array();
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['action'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['controller'] = NULL;
$arguments63['package'] = NULL;
$arguments63['subpackage'] = NULL;
$arguments63['section'] = '';
$arguments63['format'] = '';
$arguments63['additionalParams'] = array (
);
$arguments63['addQueryString'] = false;
$arguments63['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments63['useParentRequest'] = false;
$arguments63['absolute'] = true;
$arguments63['useMainRequest'] = false;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['name'] = NULL;
$arguments63['rel'] = NULL;
$arguments63['rev'] = NULL;
$arguments63['target'] = NULL;
$arguments63['action'] = 'index';
$arguments63['controller'] = 'ResetPassword';

$output60 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output60 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return 'Registrierung';
};
$arguments65 = array();
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['action'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['controller'] = NULL;
$arguments65['package'] = NULL;
$arguments65['subpackage'] = NULL;
$arguments65['section'] = '';
$arguments65['format'] = '';
$arguments65['additionalParams'] = array (
);
$arguments65['addQueryString'] = false;
$arguments65['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments65['useParentRequest'] = false;
$arguments65['absolute'] = true;
$arguments65['useMainRequest'] = false;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['name'] = NULL;
$arguments65['rel'] = NULL;
$arguments65['rev'] = NULL;
$arguments65['target'] = NULL;
$arguments65['action'] = 'index';
$arguments65['controller'] = 'Registration';

$output60 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output60 .= '
    ';
return $output60;
};
$arguments58 = array();
$arguments58['if'] = NULL;

$output51 .= '';

$output51 .= '
  ';
return $output51;
};
$arguments38 = array();
$arguments38['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
$arguments38['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments38['__thenClosure'] = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['section'] = NULL;
$arguments41['partial'] = NULL;
$arguments41['delegate'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['optional'] = false;
$arguments41['default'] = NULL;
$arguments41['contentAs'] = NULL;
$arguments41['partial'] = 'LogoutForm';
$arguments41['section'] = 'Logout';
$arguments41['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
    ';
return $output40;
};
$arguments38['__elseClosures'][] = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return '
        <fieldset>
          <input placeholder="test@example.com" name="__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]" type="email" autofocus>
          <input placeholder="Passwort" name="__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]" type="password" value="">
          <input type="submit" value="Login" class="button large primary" />
        </fieldset>
      ';
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['action'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['controller'] = NULL;
$arguments45['package'] = NULL;
$arguments45['subpackage'] = NULL;
$arguments45['object'] = NULL;
$arguments45['section'] = '';
$arguments45['format'] = '';
$arguments45['additionalParams'] = array (
);
$arguments45['absolute'] = false;
$arguments45['addQueryString'] = false;
$arguments45['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments45['fieldNamePrefix'] = NULL;
$arguments45['actionUri'] = NULL;
$arguments45['objectName'] = NULL;
$arguments45['useParentRequest'] = false;
$arguments45['enctype'] = NULL;
$arguments45['method'] = NULL;
$arguments45['name'] = NULL;
$arguments45['onreset'] = NULL;
$arguments45['onsubmit'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['action'] = 'authenticate';
$arguments45['method'] = 'post';

$output44 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return 'Passwort vergessen?';
};
$arguments47 = array();
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['action'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['controller'] = NULL;
$arguments47['package'] = NULL;
$arguments47['subpackage'] = NULL;
$arguments47['section'] = '';
$arguments47['format'] = '';
$arguments47['additionalParams'] = array (
);
$arguments47['addQueryString'] = false;
$arguments47['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments47['useParentRequest'] = false;
$arguments47['absolute'] = true;
$arguments47['useMainRequest'] = false;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['name'] = NULL;
$arguments47['rel'] = NULL;
$arguments47['rev'] = NULL;
$arguments47['target'] = NULL;
$arguments47['action'] = 'index';
$arguments47['controller'] = 'ResetPassword';

$output44 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return 'Registrierung';
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['action'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['controller'] = NULL;
$arguments49['package'] = NULL;
$arguments49['subpackage'] = NULL;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['additionalParams'] = array (
);
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['useParentRequest'] = false;
$arguments49['absolute'] = true;
$arguments49['useMainRequest'] = false;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$arguments49['action'] = 'index';
$arguments49['controller'] = 'Registration';

$output44 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output44 .= '
    ';
return $output44;
};

$output37 .= Sandstorm\UserManagement\ViewHelpers\IfAuthenticatedViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
';
return $output37;
};
$arguments35 = array();
$arguments35['name'] = NULL;
$arguments35['name'] = 'Content';

$output30 .= '';

$output30 .= '

</html>
';

return $output30;
}


}
#0             32188     
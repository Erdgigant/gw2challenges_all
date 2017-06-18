<?php 
class Registration_action_index_35e8aa9d52d69051dede8239c85bad3b877bb998 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'Registration';
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
$output24 = '';

$output24 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return '
    ';
};
$arguments25 = array();

$output24 .= '';

$output24 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
        <fieldset>
          <label>
            E-Mail-Adresse
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['required'] = false;
$arguments33['type'] = 'text';
$arguments33['name'] = NULL;
$arguments33['value'] = NULL;
$arguments33['property'] = NULL;
$arguments33['disabled'] = NULL;
$arguments33['maxlength'] = NULL;
$arguments33['readonly'] = NULL;
$arguments33['size'] = NULL;
$arguments33['placeholder'] = NULL;
$arguments33['autofocus'] = NULL;
$arguments33['errorClass'] = 'f3-form-error';
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['property'] = 'email';
$arguments33['placeholder'] = 'test@example.com';
$arguments33['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
$arguments33['type'] = 'email';

$output32 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['section'] = NULL;
$arguments35['partial'] = NULL;
$arguments35['delegate'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$arguments35['default'] = NULL;
$arguments35['contentAs'] = NULL;
$arguments35['partial'] = 'FormErrors';
$arguments35['section'] = 'ValidationResults';
// Rendering Array
$array37 = array();
$array37['for'] = 'registrationFlow.email';
$arguments35['arguments'] = $array37;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output32 .= '
          </label>

          <label>
            Passwort
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['required'] = false;
$arguments38['name'] = NULL;
$arguments38['value'] = NULL;
$arguments38['property'] = NULL;
$arguments38['disabled'] = NULL;
$arguments38['maxlength'] = NULL;
$arguments38['readonly'] = NULL;
$arguments38['size'] = NULL;
$arguments38['placeholder'] = NULL;
$arguments38['errorClass'] = 'f3-form-error';
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['placeholder'] = 'Ihr Passwort';
$arguments38['property'] = 'passwordDto.password';

$output32 .= Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output32 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['partial'] = 'FormErrors';
$arguments40['section'] = 'ValidationResults';
// Rendering Array
$array42 = array();
$array42['for'] = 'registrationFlow.passwordDto.password';
$arguments40['arguments'] = $array42;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output32 .= '
          </label>

          <label>
            Passwortbestätigung
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['required'] = false;
$arguments43['name'] = NULL;
$arguments43['value'] = NULL;
$arguments43['property'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['maxlength'] = NULL;
$arguments43['readonly'] = NULL;
$arguments43['size'] = NULL;
$arguments43['placeholder'] = NULL;
$arguments43['errorClass'] = 'f3-form-error';
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['placeholder'] = 'Passwort wiederholen';
$arguments43['property'] = 'passwordDto.passwordConfirmation';

$output32 .= Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output32 .= '
          </label>

          <label>
            Api-Key
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['required'] = false;
$arguments45['type'] = 'text';
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['maxlength'] = NULL;
$arguments45['readonly'] = NULL;
$arguments45['size'] = NULL;
$arguments45['placeholder'] = NULL;
$arguments45['autofocus'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['placeholder'] = 'key';
$arguments45['property'] = 'attributes.apiKey';

$output32 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output32 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['section'] = NULL;
$arguments47['partial'] = NULL;
$arguments47['delegate'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['optional'] = false;
$arguments47['default'] = NULL;
$arguments47['contentAs'] = NULL;
$arguments47['partial'] = 'FormErrors';
$arguments47['section'] = 'ValidationResults';
// Rendering Array
$array49 = array();
$array49['for'] = 'registrationFlow.attributes.apiKey';
$arguments47['arguments'] = $array49;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output32 .= '
          </label>

          <input type="submit" value="Registrieren" class="button large primary"/>
        </fieldset>
      ';
return $output32;
};
$arguments30 = array();
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['action'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['controller'] = NULL;
$arguments30['package'] = NULL;
$arguments30['subpackage'] = NULL;
$arguments30['object'] = NULL;
$arguments30['section'] = '';
$arguments30['format'] = '';
$arguments30['additionalParams'] = array (
);
$arguments30['absolute'] = false;
$arguments30['addQueryString'] = false;
$arguments30['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments30['fieldNamePrefix'] = NULL;
$arguments30['actionUri'] = NULL;
$arguments30['objectName'] = NULL;
$arguments30['useParentRequest'] = false;
$arguments30['enctype'] = NULL;
$arguments30['method'] = NULL;
$arguments30['name'] = NULL;
$arguments30['onreset'] = NULL;
$arguments30['onsubmit'] = NULL;
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['action'] = 'register';
$arguments30['method'] = 'post';
$arguments30['objectName'] = 'registrationFlow';

$output29 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
    ';
return $output29;
};
$arguments27 = array();
$arguments27['if'] = NULL;

$output24 .= '';

$output24 .= '
  ';
return $output24;
};
$arguments1 = array();
$arguments1['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
$arguments1['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
return '
    ';
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <fieldset>
          <label>
            E-Mail-Adresse
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['required'] = false;
$arguments7['type'] = 'text';
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['maxlength'] = NULL;
$arguments7['readonly'] = NULL;
$arguments7['size'] = NULL;
$arguments7['placeholder'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['property'] = 'email';
$arguments7['placeholder'] = 'test@example.com';
$arguments7['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
$arguments7['type'] = 'email';

$output6 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['section'] = NULL;
$arguments9['partial'] = NULL;
$arguments9['delegate'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$arguments9['default'] = NULL;
$arguments9['contentAs'] = NULL;
$arguments9['partial'] = 'FormErrors';
$arguments9['section'] = 'ValidationResults';
// Rendering Array
$array11 = array();
$array11['for'] = 'registrationFlow.email';
$arguments9['arguments'] = $array11;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
          </label>

          <label>
            Passwort
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['required'] = false;
$arguments12['name'] = NULL;
$arguments12['value'] = NULL;
$arguments12['property'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['maxlength'] = NULL;
$arguments12['readonly'] = NULL;
$arguments12['size'] = NULL;
$arguments12['placeholder'] = NULL;
$arguments12['errorClass'] = 'f3-form-error';
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['placeholder'] = 'Ihr Passwort';
$arguments12['property'] = 'passwordDto.password';

$output6 .= Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['partial'] = 'FormErrors';
$arguments14['section'] = 'ValidationResults';
// Rendering Array
$array16 = array();
$array16['for'] = 'registrationFlow.passwordDto.password';
$arguments14['arguments'] = $array16;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output6 .= '
          </label>

          <label>
            Passwortbestätigung
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['required'] = false;
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['property'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['maxlength'] = NULL;
$arguments17['readonly'] = NULL;
$arguments17['size'] = NULL;
$arguments17['placeholder'] = NULL;
$arguments17['errorClass'] = 'f3-form-error';
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['placeholder'] = 'Passwort wiederholen';
$arguments17['property'] = 'passwordDto.passwordConfirmation';

$output6 .= Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
          </label>

          <label>
            Api-Key
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['required'] = false;
$arguments19['type'] = 'text';
$arguments19['name'] = NULL;
$arguments19['value'] = NULL;
$arguments19['property'] = NULL;
$arguments19['disabled'] = NULL;
$arguments19['maxlength'] = NULL;
$arguments19['readonly'] = NULL;
$arguments19['size'] = NULL;
$arguments19['placeholder'] = NULL;
$arguments19['autofocus'] = NULL;
$arguments19['errorClass'] = 'f3-form-error';
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['placeholder'] = 'key';
$arguments19['property'] = 'attributes.apiKey';

$output6 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['section'] = NULL;
$arguments21['partial'] = NULL;
$arguments21['delegate'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['optional'] = false;
$arguments21['default'] = NULL;
$arguments21['contentAs'] = NULL;
$arguments21['partial'] = 'FormErrors';
$arguments21['section'] = 'ValidationResults';
// Rendering Array
$array23 = array();
$array23['for'] = 'registrationFlow.attributes.apiKey';
$arguments21['arguments'] = $array23;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output6 .= '
          </label>

          <input type="submit" value="Registrieren" class="button large primary"/>
        </fieldset>
      ';
return $output6;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['action'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['controller'] = NULL;
$arguments4['package'] = NULL;
$arguments4['subpackage'] = NULL;
$arguments4['object'] = NULL;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['fieldNamePrefix'] = NULL;
$arguments4['actionUri'] = NULL;
$arguments4['objectName'] = NULL;
$arguments4['useParentRequest'] = false;
$arguments4['enctype'] = NULL;
$arguments4['method'] = NULL;
$arguments4['name'] = NULL;
$arguments4['onreset'] = NULL;
$arguments4['onsubmit'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['action'] = 'register';
$arguments4['method'] = 'post';
$arguments4['objectName'] = 'registrationFlow';

$output3 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
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
$output50 = '';

$output50 .= '<!DOCTYPE html>
<html xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
      xmlns:usermanagement="http://typo3.org/ns/Sandstorm/UserManagement/ViewHelpers"
      xmlns="http://www.w3.org/1999/xhtml"
      lang="en">

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['name'] = NULL;
$arguments51['name'] = 'Default';

$output50 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext), ENT_QUOTES);

$output50 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return 'Registration';
};
$arguments53 = array();
$arguments53['name'] = NULL;
$arguments53['name'] = 'Title';

$output50 .= '';

$output50 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
  ';
// Rendering ViewHelper Sandstorm\UserManagement\ViewHelpers\IfAuthenticatedViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return '
    ';
};
$arguments82 = array();

$output81 .= '';

$output81 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
        <fieldset>
          <label>
            E-Mail-Adresse
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['required'] = false;
$arguments90['type'] = 'text';
$arguments90['name'] = NULL;
$arguments90['value'] = NULL;
$arguments90['property'] = NULL;
$arguments90['disabled'] = NULL;
$arguments90['maxlength'] = NULL;
$arguments90['readonly'] = NULL;
$arguments90['size'] = NULL;
$arguments90['placeholder'] = NULL;
$arguments90['autofocus'] = NULL;
$arguments90['errorClass'] = 'f3-form-error';
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['property'] = 'email';
$arguments90['placeholder'] = 'test@example.com';
$arguments90['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
$arguments90['type'] = 'email';

$output89 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['section'] = NULL;
$arguments92['partial'] = NULL;
$arguments92['delegate'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['optional'] = false;
$arguments92['default'] = NULL;
$arguments92['contentAs'] = NULL;
$arguments92['partial'] = 'FormErrors';
$arguments92['section'] = 'ValidationResults';
// Rendering Array
$array94 = array();
$array94['for'] = 'registrationFlow.email';
$arguments92['arguments'] = $array94;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output89 .= '
          </label>

          <label>
            Passwort
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['required'] = false;
$arguments95['name'] = NULL;
$arguments95['value'] = NULL;
$arguments95['property'] = NULL;
$arguments95['disabled'] = NULL;
$arguments95['maxlength'] = NULL;
$arguments95['readonly'] = NULL;
$arguments95['size'] = NULL;
$arguments95['placeholder'] = NULL;
$arguments95['errorClass'] = 'f3-form-error';
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['placeholder'] = 'Ihr Passwort';
$arguments95['property'] = 'passwordDto.password';

$output89 .= Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output89 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['partial'] = 'FormErrors';
$arguments97['section'] = 'ValidationResults';
// Rendering Array
$array99 = array();
$array99['for'] = 'registrationFlow.passwordDto.password';
$arguments97['arguments'] = $array99;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output89 .= '
          </label>

          <label>
            Passwortbestätigung
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['required'] = false;
$arguments100['name'] = NULL;
$arguments100['value'] = NULL;
$arguments100['property'] = NULL;
$arguments100['disabled'] = NULL;
$arguments100['maxlength'] = NULL;
$arguments100['readonly'] = NULL;
$arguments100['size'] = NULL;
$arguments100['placeholder'] = NULL;
$arguments100['errorClass'] = 'f3-form-error';
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['placeholder'] = 'Passwort wiederholen';
$arguments100['property'] = 'passwordDto.passwordConfirmation';

$output89 .= Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output89 .= '
          </label>

          <label>
            Api-Key
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['required'] = false;
$arguments102['type'] = 'text';
$arguments102['name'] = NULL;
$arguments102['value'] = NULL;
$arguments102['property'] = NULL;
$arguments102['disabled'] = NULL;
$arguments102['maxlength'] = NULL;
$arguments102['readonly'] = NULL;
$arguments102['size'] = NULL;
$arguments102['placeholder'] = NULL;
$arguments102['autofocus'] = NULL;
$arguments102['errorClass'] = 'f3-form-error';
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['placeholder'] = 'key';
$arguments102['property'] = 'attributes.apiKey';

$output89 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output89 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['section'] = NULL;
$arguments104['partial'] = NULL;
$arguments104['delegate'] = NULL;
$arguments104['arguments'] = array (
);
$arguments104['optional'] = false;
$arguments104['default'] = NULL;
$arguments104['contentAs'] = NULL;
$arguments104['partial'] = 'FormErrors';
$arguments104['section'] = 'ValidationResults';
// Rendering Array
$array106 = array();
$array106['for'] = 'registrationFlow.attributes.apiKey';
$arguments104['arguments'] = $array106;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output89 .= '
          </label>

          <input type="submit" value="Registrieren" class="button large primary"/>
        </fieldset>
      ';
return $output89;
};
$arguments87 = array();
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['action'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['controller'] = NULL;
$arguments87['package'] = NULL;
$arguments87['subpackage'] = NULL;
$arguments87['object'] = NULL;
$arguments87['section'] = '';
$arguments87['format'] = '';
$arguments87['additionalParams'] = array (
);
$arguments87['absolute'] = false;
$arguments87['addQueryString'] = false;
$arguments87['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments87['fieldNamePrefix'] = NULL;
$arguments87['actionUri'] = NULL;
$arguments87['objectName'] = NULL;
$arguments87['useParentRequest'] = false;
$arguments87['enctype'] = NULL;
$arguments87['method'] = NULL;
$arguments87['name'] = NULL;
$arguments87['onreset'] = NULL;
$arguments87['onsubmit'] = NULL;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['action'] = 'register';
$arguments87['method'] = 'post';
$arguments87['objectName'] = 'registrationFlow';

$output86 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
    ';
return $output86;
};
$arguments84 = array();
$arguments84['if'] = NULL;

$output81 .= '';

$output81 .= '
  ';
return $output81;
};
$arguments58 = array();
$arguments58['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
$arguments58['authenticationProviderName'] = 'Sandstorm.UserManagement:Login';
$arguments58['__thenClosure'] = function() use ($renderingContext, $self) {
return '
    ';
};
$arguments58['__elseClosures'][] = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
      ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
        <fieldset>
          <label>
            E-Mail-Adresse
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['required'] = false;
$arguments64['type'] = 'text';
$arguments64['name'] = NULL;
$arguments64['value'] = NULL;
$arguments64['property'] = NULL;
$arguments64['disabled'] = NULL;
$arguments64['maxlength'] = NULL;
$arguments64['readonly'] = NULL;
$arguments64['size'] = NULL;
$arguments64['placeholder'] = NULL;
$arguments64['autofocus'] = NULL;
$arguments64['errorClass'] = 'f3-form-error';
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['property'] = 'email';
$arguments64['placeholder'] = 'test@example.com';
$arguments64['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
$arguments64['type'] = 'email';

$output63 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['section'] = NULL;
$arguments66['partial'] = NULL;
$arguments66['delegate'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['optional'] = false;
$arguments66['default'] = NULL;
$arguments66['contentAs'] = NULL;
$arguments66['partial'] = 'FormErrors';
$arguments66['section'] = 'ValidationResults';
// Rendering Array
$array68 = array();
$array68['for'] = 'registrationFlow.email';
$arguments66['arguments'] = $array68;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output63 .= '
          </label>

          <label>
            Passwort
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['required'] = false;
$arguments69['name'] = NULL;
$arguments69['value'] = NULL;
$arguments69['property'] = NULL;
$arguments69['disabled'] = NULL;
$arguments69['maxlength'] = NULL;
$arguments69['readonly'] = NULL;
$arguments69['size'] = NULL;
$arguments69['placeholder'] = NULL;
$arguments69['errorClass'] = 'f3-form-error';
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['placeholder'] = 'Ihr Passwort';
$arguments69['property'] = 'passwordDto.password';

$output63 .= Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output63 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['section'] = NULL;
$arguments71['partial'] = NULL;
$arguments71['delegate'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['optional'] = false;
$arguments71['default'] = NULL;
$arguments71['contentAs'] = NULL;
$arguments71['partial'] = 'FormErrors';
$arguments71['section'] = 'ValidationResults';
// Rendering Array
$array73 = array();
$array73['for'] = 'registrationFlow.passwordDto.password';
$arguments71['arguments'] = $array73;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output63 .= '
          </label>

          <label>
            Passwortbestätigung
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['required'] = false;
$arguments74['name'] = NULL;
$arguments74['value'] = NULL;
$arguments74['property'] = NULL;
$arguments74['disabled'] = NULL;
$arguments74['maxlength'] = NULL;
$arguments74['readonly'] = NULL;
$arguments74['size'] = NULL;
$arguments74['placeholder'] = NULL;
$arguments74['errorClass'] = 'f3-form-error';
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['placeholder'] = 'Passwort wiederholen';
$arguments74['property'] = 'passwordDto.passwordConfirmation';

$output63 .= Neos\FluidAdaptor\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output63 .= '
          </label>

          <label>
            Api-Key
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['required'] = false;
$arguments76['type'] = 'text';
$arguments76['name'] = NULL;
$arguments76['value'] = NULL;
$arguments76['property'] = NULL;
$arguments76['disabled'] = NULL;
$arguments76['maxlength'] = NULL;
$arguments76['readonly'] = NULL;
$arguments76['size'] = NULL;
$arguments76['placeholder'] = NULL;
$arguments76['autofocus'] = NULL;
$arguments76['errorClass'] = 'f3-form-error';
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['placeholder'] = 'key';
$arguments76['property'] = 'attributes.apiKey';

$output63 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output63 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['partial'] = 'FormErrors';
$arguments78['section'] = 'ValidationResults';
// Rendering Array
$array80 = array();
$array80['for'] = 'registrationFlow.attributes.apiKey';
$arguments78['arguments'] = $array80;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output63 .= '
          </label>

          <input type="submit" value="Registrieren" class="button large primary"/>
        </fieldset>
      ';
return $output63;
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
$arguments61['action'] = 'register';
$arguments61['method'] = 'post';
$arguments61['objectName'] = 'registrationFlow';

$output60 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
    ';
return $output60;
};

$output57 .= Sandstorm\UserManagement\ViewHelpers\IfAuthenticatedViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
';
return $output57;
};
$arguments55 = array();
$arguments55['name'] = NULL;
$arguments55['name'] = 'Content';

$output50 .= '';

$output50 .= '

</html>
';

return $output50;
}


}
#0             46942     
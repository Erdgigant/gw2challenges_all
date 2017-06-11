<?php 
class Challenge_action_new_5808e2a0959cf3e9526d2e46deee3069c11a435d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <div id="wrapper">
        <h2>Minis</h2>
        <input id="miniData" type="hidden" value="';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('minis', $array1), ENT_QUOTES);

$output0 .= '"/>
        
        <h3>Challenge Minis</h6>   
        <div id="miniList1" class="dragBox" @dragover.prevent @drop="drop">
            <mini v-for="mini in getMinisByList(1)" :key="mini.uid" :mini="mini"></mini>
        </div>
        
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return '
        	<input type="text" name="name" placeholder="Name"/>
        	<input type="hidden" name="ids" v-model="getMinisForChallenge"/>
        	<Button>Create Challenge</Button>
        ';
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
$arguments2['action'] = 'create';
$arguments2['method'] = 'post';

$output0 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '

		<div><input type="text" v-model="filterText" placeholder="Filter"/></div>		
        <div id="minisList0" class="dragBox" @dragover.prevent @drop="drop">
            <mini v-for="mini in getMinisByList(0, true)" :key="mini.uid" :mini="mini"></mini>
        </div>
    </div>
    
    <script>
    	
    </script>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['name'] = NULL;
$arguments5['name'] = 'Default';

$output4 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext), ENT_QUOTES);

$output4 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
    <div id="wrapper">
        <h2>Minis</h2>
        <input id="miniData" type="hidden" value="';
$array10 = array (
);
$output9 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('minis', $array10), ENT_QUOTES);

$output9 .= '"/>
        
        <h3>Challenge Minis</h6>   
        <div id="miniList1" class="dragBox" @dragover.prevent @drop="drop">
            <mini v-for="mini in getMinisByList(1)" :key="mini.uid" :mini="mini"></mini>
        </div>
        
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return '
        	<input type="text" name="name" placeholder="Name"/>
        	<input type="hidden" name="ids" v-model="getMinisForChallenge"/>
        	<Button>Create Challenge</Button>
        ';
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
$arguments11['object'] = NULL;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['additionalParams'] = array (
);
$arguments11['absolute'] = false;
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['fieldNamePrefix'] = NULL;
$arguments11['actionUri'] = NULL;
$arguments11['objectName'] = NULL;
$arguments11['useParentRequest'] = false;
$arguments11['enctype'] = NULL;
$arguments11['method'] = NULL;
$arguments11['name'] = NULL;
$arguments11['onreset'] = NULL;
$arguments11['onsubmit'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['action'] = 'create';
$arguments11['method'] = 'post';

$output9 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output9 .= '

		<div><input type="text" v-model="filterText" placeholder="Filter"/></div>		
        <div id="minisList0" class="dragBox" @dragover.prevent @drop="drop">
            <mini v-for="mini in getMinisByList(0, true)" :key="mini.uid" :mini="mini"></mini>
        </div>
    </div>
    
    <script>
    	
    </script>
';
return $output9;
};
$arguments7 = array();
$arguments7['name'] = NULL;
$arguments7['name'] = 'Content';

$output4 .= '';

$output4 .= '
';

return $output4;
}


}
#0             11297     
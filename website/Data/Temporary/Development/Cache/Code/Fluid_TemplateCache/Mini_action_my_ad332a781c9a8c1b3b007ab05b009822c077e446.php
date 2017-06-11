<?php 
class Mini_action_my_ad332a781c9a8c1b3b007ab05b009822c077e446 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
        
        <p><input type="text" v-model="filterText"/></p>
        <div>
	        <div id="miniList0" class="dragBox" @dragover.prevent @drop="drop">
	            <mini v-for="mini in getMinisByList(0, true)" :key="mini.uid" :mini="mini"></mini>
	        </div>
        </div>
    </div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output2 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['name'] = NULL;
$arguments3['name'] = 'Default';

$output2 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext), ENT_QUOTES);

$output2 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
    <div id="wrapper">
        <h2>Minis</h2>
        <input id="miniData" type="hidden" value="';
$array8 = array (
);
$output7 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('minis', $array8), ENT_QUOTES);

$output7 .= '"/>
        
        <p><input type="text" v-model="filterText"/></p>
        <div>
	        <div id="miniList0" class="dragBox" @dragover.prevent @drop="drop">
	            <mini v-for="mini in getMinisByList(0, true)" :key="mini.uid" :mini="mini"></mini>
	        </div>
        </div>
    </div>
';
return $output7;
};
$arguments5 = array();
$arguments5['name'] = NULL;
$arguments5['name'] = 'Content';

$output2 .= '';

return $output2;
}


}
#0             7413      
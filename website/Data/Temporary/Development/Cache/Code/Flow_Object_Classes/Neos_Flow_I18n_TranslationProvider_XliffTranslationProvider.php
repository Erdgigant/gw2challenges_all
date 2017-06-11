<?php 
namespace Neos\Flow\I18n\TranslationProvider;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n\Cldr\Reader\PluralsReader;
use Neos\Flow\I18n;
use Neos\Flow\I18n\TranslationProvider\Exception\InvalidPluralFormException;
use Neos\Flow\I18n\Xliff\XliffModel;
use Neos\Utility\Files;

/**
 * The concrete implementation of TranslationProviderInterface which uses XLIFF
 * file format to store labels.
 *
 * @Flow\Scope("singleton")
 */
class XliffTranslationProvider_Original implements TranslationProviderInterface
{
    /**
     * An absolute path to the directory where translation files reside.
     *
     * @var string
     */
    protected $xliffBasePath = 'Private/Translations/';

    /**
     * @var I18n\Service
     */
    protected $localizationService;

    /**
     * @var PluralsReader
     */
    protected $pluralsReader;

    /**
     * A collection of models requested at least once in current request.
     *
     * This is an associative array with pairs as follow:
     * ['filename'] => $model,
     *
     * @var array<XliffModel>
     */
    protected $models;

    /**
     * @param I18n\Service $localizationService
     * @return void
     */
    public function injectLocalizationService(I18n\Service $localizationService)
    {
        $this->localizationService = $localizationService;
    }

    /**
     * @param PluralsReader $pluralsReader
     * @return void
     */
    public function injectPluralsReader(PluralsReader $pluralsReader)
    {
        $this->pluralsReader = $pluralsReader;
    }

    /**
     * Returns translated label of $originalLabel from a file defined by $sourceName.
     *
     * Chooses particular form of label if available and defined in $pluralForm.
     *
     * @param string $originalLabel Label used as a key in order to find translation
     * @param I18n\Locale $locale Locale to use
     * @param string $pluralForm One of RULE constants of PluralsReader
     * @param string $sourceName A relative path to the filename with translations (labels' catalog)
     * @param string $packageKey Key of the package containing the source file
     * @return mixed Translated label or FALSE on failure
     * @throws InvalidPluralFormException
     */
    public function getTranslationByOriginalLabel($originalLabel, I18n\Locale $locale, $pluralForm = null, $sourceName = 'Main', $packageKey = 'Neos.Flow')
    {
        $model = $this->getModel($packageKey, $sourceName, $locale);

        if ($pluralForm !== null) {
            $pluralFormsForProvidedLocale = $this->pluralsReader->getPluralForms($locale);

            if (!is_array($pluralFormsForProvidedLocale) || !in_array($pluralForm, $pluralFormsForProvidedLocale)) {
                throw new InvalidPluralFormException('There is no plural form "' . $pluralForm . '" in "' . (string)$locale . '" locale.', 1281033386);
            }
            // We need to convert plural form's string to index, as they are accessed using integers in XLIFF files
            $pluralFormIndex = (int)array_search($pluralForm, $pluralFormsForProvidedLocale);
        } else {
            $pluralFormIndex = 0;
        }

        return $model->getTargetBySource($originalLabel, $pluralFormIndex);
    }

    /**
     * Returns label for a key ($labelId) from a file defined by $sourceName.
     *
     * Chooses particular form of label if available and defined in $pluralForm.
     *
     * @param string $labelId Key used to find translated label
     * @param I18n\Locale $locale Locale to use
     * @param string $pluralForm One of RULE constants of PluralsReader
     * @param string $sourceName A relative path to the filename with translations (labels' catalog)
     * @param string $packageKey Key of the package containing the source file
     * @return mixed Translated label or FALSE on failure
     * @throws InvalidPluralFormException
     */
    public function getTranslationById($labelId, I18n\Locale $locale, $pluralForm = null, $sourceName = 'Main', $packageKey = 'Neos.Flow')
    {
        $model = $this->getModel($packageKey, $sourceName, $locale);

        if ($pluralForm !== null) {
            $pluralFormsForProvidedLocale = $this->pluralsReader->getPluralForms($locale);

            if (!in_array($pluralForm, $pluralFormsForProvidedLocale)) {
                throw new InvalidPluralFormException('There is no plural form "' . $pluralForm . '" in "' . (string)$locale . '" locale.', 1281033387);
            }
            // We need to convert plural form's string to index, as they are accessed using integers in XLIFF files
            $pluralFormIndex = (int)array_search($pluralForm, $pluralFormsForProvidedLocale);
        } else {
            $pluralFormIndex = 0;
        }

        return $model->getTargetByTransUnitId($labelId, $pluralFormIndex);
    }

    /**
     * Returns a XliffModel instance representing desired XLIFF file.
     *
     * Will return existing instance if a model for given $sourceName was already
     * requested before. Returns FALSE when $sourceName doesn't point to existing
     * file.
     *
     * @param string $packageKey Key of the package containing the source file
     * @param string $sourceName Relative path to existing CLDR file
     * @param I18n\Locale $locale Locale object
     * @return XliffModel New or existing instance
     * @throws I18n\Exception
     */
    protected function getModel($packageKey, $sourceName, I18n\Locale $locale)
    {
        $sourcePath = Files::concatenatePaths(['resource://' . $packageKey, $this->xliffBasePath]);
        list($sourcePath, $foundLocale) = $this->localizationService->getXliffFilenameAndPath($sourcePath, $sourceName, $locale);

        if ($sourcePath === false) {
            throw new I18n\Exception('No XLIFF file is available for ' . $packageKey . '::' . $sourceName . '::' . $locale . ' in the locale chain.', 1334759591);
        }
        if (isset($this->models[$sourcePath])) {
            return $this->models[$sourcePath];
        }
        return $this->models[$sourcePath] = new XliffModel($sourcePath, $foundLocale);
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\I18n\TranslationProvider;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * The concrete implementation of TranslationProviderInterface which uses XLIFF
 * file format to store labels.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class XliffTranslationProvider extends XliffTranslationProvider_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider', $this);
        if (get_class($this) === 'Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\TranslationProvider\TranslationProviderInterface', $this);
        if ('Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider' === get_class($this)) {
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
  'xliffBasePath' => 'string',
  'localizationService' => 'Neos\\Flow\\I18n\\Service',
  'pluralsReader' => 'Neos\\Flow\\I18n\\Cldr\\Reader\\PluralsReader',
  'models' => 'array<Neos\\Flow\\I18n\\Xliff\\XliffModel>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider', $this);
        if (get_class($this) === 'Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\TranslationProvider\TranslationProviderInterface', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectLocalizationService(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'));
        $this->injectPluralsReader(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Cldr\Reader\PluralsReader'));
        $this->Flow_Injected_Properties = array (
  0 => 'localizationService',
  1 => 'pluralsReader',
);
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/I18n/TranslationProvider/XliffTranslationProvider.php
#
<?php 
namespace Neos\Flow\Http\Component;

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
use Neos\Flow\Http\Response;

/**
 * The HTTP component chain
 *
 * The chain is a HTTP component itself and handles all the configured components until one
 * component sets the "cancelled" flag.
 */
class ComponentChain_Original implements ComponentInterface
{
    /**
     * Configurable options of the component chain, it mainly contains the "components" to handle
     *
     * @var array
     */
    protected $options;

    /**
     * @var Response
     */
    protected $response;

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * Handle the configured components in the order of the chain
     *
     * @param ComponentContext $componentContext
     * @return void
     */
    public function handle(ComponentContext $componentContext)
    {
        if (!isset($this->options['components'])) {
            return;
        }
        /** @var ComponentInterface $component */
        foreach ($this->options['components'] as $component) {
            if ($component === null) {
                continue;
            }
            $component->handle($componentContext);
            $this->response = $componentContext->getHttpResponse();
            if ($componentContext->getParameter(ComponentChain::class, 'cancel') === true) {
                $componentContext->setParameter(ComponentChain::class, 'cancel', null);
                return;
            }
        }
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Http\Component;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * The HTTP component chain
 * 
 * The chain is a HTTP component itself and handles all the configured components until one
 * component sets the "cancelled" flag.
 */
class ComponentChain extends ComponentChain_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     * @param array $options
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->getSettingsByPath(explode('.', 'Neos.Flow.http.chain'));
        call_user_func_array('parent::__construct', $arguments);
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
  'options' => 'array',
  'response' => 'Neos\\Flow\\Http\\Response',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /var/www/php/Packages/Framework/Neos.Flow/Classes/Http/Component/ComponentChain.php
#
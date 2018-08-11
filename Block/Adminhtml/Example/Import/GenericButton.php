<?php
namespace Starter\Example\Block\Adminhtml\Example\Import;

use Magento\Search\Controller\RegistryConstants;

/**
 * Class GenericButton
 */
class GenericButton
{
    /**
     * Url Builder
     *
     * @var \Magento\Framework\UrlInterface
     */
    protected $urlBuilder;

    /**
     * Registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * Starter LegacyProduct
     *
     * @var \Starter\LegacyProducts\Model\Product
     */
    protected $Starter_legacy_product;


    /**
     * Constructor
     *
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Starter\LegacyProducts\Model\Product
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
        \Starter\LegacyProducts\Model\Product $Starter_legacy_product
    ) {
        $this->urlBuilder = $context->getUrlBuilder();
        $this->registry = $registry;
        $this->Starter_legacy_product = $Starter_legacy_product;
        $this->context = $context;
    }

    /**
     * Return the synonyms group Id.
     *
     * @return int|null
     */
    public function getId()
    {
        $request = $this->context->getRequest();
        $id      = NULL;
        if(!is_null($request)){
            $id  = array_key_exists('id',$request->getParams()) ? $request->getParams()['id'] : NULL;
        }
        return $id ;
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->urlBuilder->getUrl($route, $params);
    }
}
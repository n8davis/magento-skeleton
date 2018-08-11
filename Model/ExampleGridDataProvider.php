<?php
namespace Starter\Example\Model\Example;

use Magento\Eav\Model\Config;
use Magento\Eav\Model\Entity\Attribute\AbstractAttribute;
use Magento\Eav\Model\Entity\Type;
use Magento\Framework\App\ObjectManager;
use Magento\Ui\DataProvider\EavValidationRules;
use Magento\Framework\View\Element\UiComponent\DataProvider\FilterPool;

/**
 * Class DataProvider
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    protected $magento_order;
    /**
     * @var Collection
     */
    protected $collection;

    /**
     * @var FilterPool
     */
    protected $filterPool;


    protected $loadedData;

    /**
     * DataProvider Constructor
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param EavValidationRules $eavValidationRules
     * @param CustomerCollectionFactory $customerCollectionFactory
     * @param Config $eavConfig
     * @param FilterPool $filterPool
     * @param array $meta
     * @param array $data
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        EavValidationRules $eavValidationRules,
        \Starter\Example\Model\ResourceModel\Example\Collection $Starter_Example,
        \Magento\Sales\Model\Order $magento_order,
        Config $eavConfig,
        FilterPool $filterPool,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $Starter_Example;
        $this->eavValidationRules = $eavValidationRules;
        $this->eavConfig = $eavConfig;
        $this->filterPool = $filterPool;
        $this->magento_order = $magento_order;
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {

        if ( isset ($this->loadedData ) ) return $this->loadedData;

        $items = $this->collection->getItems();
        $id    = NULL;
        /** @var \Starter\Example\Model\Example $example */

        // there is only one item

        foreach ($items as  $example ) {
            $this->loadedData[ $example->getId()]['example'] =  $example->getData();
            $this->loadedData[ $example->getId()]['example']['id']  =   $example->getId(); // converts 0 to OFF, 1 to ON
            $this->loadedData[ $example->getId()]['example']['company']  =   $example->getCompany(); // converts 0 to OFF, 1 to ON
            $this->loadedData[ $example->getId()]['example']['created_at']  =   $example->getCreatedAt(); // converts 0 to OFF, 1 to ON
            $this->loadedData[ $example->getId()]['example']['updated_at'] =  $example->getUpdatedAt(); // converts 0 to OFF, 1 to ON
        }
        //$mageOrder = $this->magento_example->loadByIncrementId($id);
        //$this->loadedData[ $example->getId()]['example']['shippingCountry']= $shippingAddress->getCountryId();
        return ['items'=>[],'totalRecords' => 0];
    }


}

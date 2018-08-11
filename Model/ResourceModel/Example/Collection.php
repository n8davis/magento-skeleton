<?php
namespace Starter\Example\Model\ResourceModel\Example;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Example Resource Model Collection
 *
 * @author
 */
class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(
            'Starter\Example\Model\Example',
            'Starter\Example\Model\ResourceModel\Example'
        );
    }
}
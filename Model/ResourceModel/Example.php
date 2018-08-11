<?php
namespace Starter\Example\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Example Resource Model
 *
 * @author
 */
class Example extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('starter_example', 'id');
    }
}
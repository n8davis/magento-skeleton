<?php

namespace Starter\Example\Model;

use Magento\Cron\Exception;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

/**
 * Example Model
 *
 * @author
 */
class Example extends AbstractModel implements IdentityInterface
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $_dateTime;

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('\Starter\Example\Model\ResourceModel\Example');
    }

}
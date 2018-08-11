<?php

namespace Starter\Example\Model;
use \Magento\Framework\App\Config\Base;
use \Magento\Framework\ObjectManagerInterface;


class ExampleFactory
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    private $_objectManager;

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     */
    public function __construct( ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }
    /**
     * Create config model
     * @param string|\Magento\Framework\Simplexml\Element $sourceData
     * @return \Magento\Framework\App\Config\Base
     */
    public function create($sourceData = null)
    {
        return $this->_objectManager->create( Base::class, ['sourceData' => $sourceData]);
    }

    /**
     * @param $id
     * @return Example\
     */
    public function get( $id )
    {
        return $this->_objectManager->get( 'Starter\Example\Model\Example' )->load( $id ) ;
    }

}
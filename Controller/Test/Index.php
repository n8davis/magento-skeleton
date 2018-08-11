<?php
namespace Starter\Example\Controller\Test;

use Magento\Framework\App\Action\Context;
use Starter\Example\Model\ResourceModel\Example;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_exampleFactory;

    public function __construct( Context $context  )
    {
        parent::__construct( $context );
    }

    public function execute()
    {
        // execute code here

    }

    public function display( $data ){
        echo '<pre>';
        print_r( $data ) ;
        echo '</pre>';
    }
}
<?php
namespace Starter\Example\Block;
use Magento\Framework\View\Element\Template;

class ExampleList extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = array())
    {
        parent::__construct($context, $data);
        $this->setData('example',array());
    }

    public function addExample($count)
    {
        $_example = $this->getData('example');
        $actualNumber = count($_example);
        $names = array();
        for($i=$actualNumber;$i<($actualNumber+$count);$i++) {
            $_example[] = 'nom '.($i+1);
        }

        $this->setData('example',$_example);
    }
}

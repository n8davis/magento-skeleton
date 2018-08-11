<?php
namespace Starter\Example\Block\Adminhtml\Example\Import;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class UpdateButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Update'),
            'class' => 'primary',
            'on_click' => 'deleteConfirm(\''
                . __('Are you sure?')
                . '\', \'' . $this->getUpdateUrl() . '\')',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 80,
        ];
    }

    /**
     * Get URL
     *
     * @return string
     */
    public function getUpdateUrl()
    {
        return $this->getUrl('*/*/update' , ['id' => $this->getId(),'actions' => 'update'] );
    }
}
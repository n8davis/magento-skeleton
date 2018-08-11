<?php
namespace Starter\Example\Block\Adminhtml\Example\Import;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class BackButton
 */
class ImportButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Lorem Ipsum'),
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
        return $this->getUrl('*/import/example/');
    }
}
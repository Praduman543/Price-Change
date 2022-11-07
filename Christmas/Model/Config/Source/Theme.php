<?php
/**
 * My own options
 *
 */
namespace Conceptive\Christmas\Model\Config\Source;
class Theme implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Christmas Theme')],
            ['value' => '0', 'label' => __('Halloween Theme')]
        ];
    }
}
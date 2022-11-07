<?php

namespace Conceptive\Christmas\Model\Config\Source;

class DisplayIn implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'Both', 'label' => __('All Pages')],
            ['value' => 'Desktop', 'label' => __('Desktop')],
            ['value' => 'Mobile', 'label' => __('Mobile')]
        ];
    }
}
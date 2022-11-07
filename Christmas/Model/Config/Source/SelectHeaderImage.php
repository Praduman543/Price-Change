<?php

namespace Conceptive\Christmas\Model\Config\Source;

class SelectHeaderImage implements \Magento\Framework\Data\OptionSourceInterface
{

    protected $template;

    public function __construct(
        \Magento\Framework\View\Element\Template $template
    )
    {
        $this->template = $template; 
    }

    /**
     * To option array
     */
    public function toOptionArray()
    {
        $firstImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Header/header1.png');
        $secondImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Header/header2.png');
        $thirdImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Header/header3.png');

        return [
            ['value' => 1, 'label' => __("<img src=\"$firstImgUrl\" />")],
            ['value' => 2, 'label' => __("<img src=\"$secondImgUrl\" />")],
            ['value' => 3, 'label' => __("<img src=\"$thirdImgUrl\" />")]
        ];
    }
}
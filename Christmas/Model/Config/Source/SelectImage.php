<?php

namespace Conceptive\Christmas\Model\Config\Source;

class SelectImage implements \Magento\Framework\Data\OptionSourceInterface
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
        $firstImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Decoration/star.png');
        $secondImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Decoration/lolipop.png');
        $thirdImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Decoration/jinglebell.png');

        return [
            // ['value' => 1, 'label' => __("<img src=\"$firstImgUrl\" />")],
            ['value' => 2, 'label' => __("<img src=\"$secondImgUrl\" />")],
            ['value' => 3, 'label' => __("<img src=\"$thirdImgUrl\" />")]
        ];
    }
}
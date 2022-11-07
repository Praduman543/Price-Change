<?php

namespace Conceptive\Christmas\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{

    protected $registry;

    public $helper;


    /**
     * Hello constructor.
     * @param Template\Context $context
     * @param array $data
     */

    public function __construct(
        Template\Context $context,
        \Conceptive\Christmas\Helper\Data $helper,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
        $this->registry = $registry;
    }
}

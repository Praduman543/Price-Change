<?php

namespace Conceptive\Christmas\Model;
 
class Currency extends \Magento\Directory\Model\Currency {

/**
     * Format price to currency format
     *
     * @param float $price
     * @param array $options
     * @param bool $includeContainer
     * @param bool $addBrackets
     * @return string
     */
    public function format($price, $options = [], $includeContainer = true, $addBrackets = false)
    {
        return $this->formatPrecision($price, 3, $options, $includeContainer, $addBrackets);
    }
}
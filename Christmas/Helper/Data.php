<?php

namespace Conceptive\Christmas\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper 
{
    /**
	 * Admin configuration paths
	 *
	 */

    const IS_ENABLED = 'christmas/general/enable';

	const XML_PATH_RSGITECH_NEWS = 'conceptive/';



    public function __construct(
		\Magento\Framework\App\Helper\Context $context,
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
	) {
		parent::__construct($context);
	}


    
	/**
	 * @return $isEnabled
	 */
	public function isEnabled()
	{
		$isEnabled = $this->scopeConfig->getValue(
			self::IS_ENABLED,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);

		return $isEnabled;
	}

	public function getConfigValue($field, $storeCode = null)
	{
		return $this->scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE, $storeCode);
	}

	public function getGeneralConfig($fieldid, $storeCode = null)
	{
		return $this->getConfigValue(self::XML_PATH_RSGITECH_NEWS.'general/'.$fieldid, $storeCode);
	}

	public function getStorefrontConfig($fieldid, $storeCode = null)
	{
		return $this->getConfigValue(self::XML_PATH_RSGITECH_NEWS.'storefront/'.$fieldid, $storeCode);
	}
}
?>

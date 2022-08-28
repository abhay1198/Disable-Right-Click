<?php

namespace Abhay\DisableRightClick\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const CONFIG_PATH_MODULE_ENABLED = 'catalog/disable_right_click/mod_status';
    const CONFIG_PATH_MODULE_IMAGE_STATUS = 'catalog/disable_right_click/image_status';
    public $scopeConfig;
    
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $context->getScopeConfig();
        parent::__construct($context);
    }

    public function isEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_PATH_MODULE_ENABLED);
    }

    public function isImageEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_PATH_MODULE_IMAGE_STATUS);
    }
}

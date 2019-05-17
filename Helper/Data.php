<?php

/**
 * A Magento 2 module named Magestat/CookieLawBanner
 * Copyright (C) 2018 Magestat
 *
 * This file included in Magestat/CookieLawBanner is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Magestat\CookieLawBanner\Helper;

/**
 * Class Data
 * @package Magestat\CookieLawBanner\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Check if module is active.
     *
     * @return bool
     */
    public function isActive()
    {
        return (bool) $this->scopeConfig->isSetFlag(
            'magestat_cookielawbanner/module/enabled',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve banner title.
     *
     * @return null|string
     */
    public function getTitle()
    {
        return $this->scopeConfig->getValue(
            'magestat_cookielawbanner/general/title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve banner message content.
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->scopeConfig->getValue(
            'magestat_cookielawbanner/general/message',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve banner more info text.
     *
     * @return null|string
     */
    public function getInfoMessage()
    {
        return $this->scopeConfig->getValue(
            'magestat_cookielawbanner/general/details',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve banner more info link to.
     *
     * @return null|string
     */
    public function getInfoLink()
    {
        return $this->scopeConfig->getValue(
            'magestat_cookielawbanner/general/link',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve banner accept button text.
     *
     * @return null|string
     */
    public function getButton()
    {
        return $this->scopeConfig->getValue(
            'magestat_cookielawbanner/general/button',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve banner accept button text.
     *
     * @return null|string
     */
    public function getPosition()
    {
        return $this->scopeConfig->getValue(
            'magestat_cookielawbanner/layout/position',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Check if module is active.
     *
     * @return bool
     */
    public function isDefaultStyle()
    {
        return (bool) $this->scopeConfig->isSetFlag(
            'magestat_cookielawbanner/layout/default',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}

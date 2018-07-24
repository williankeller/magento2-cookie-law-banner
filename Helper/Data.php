<?php

/**
 * A Magento 2 module named Magestat/CookieLawBanner
 * Copyright (C) 2018 Magestat (http://magestat.com)
 *
 * This file included in Magestat/CookieLawBanner is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Magestat\CookieLawBanner\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Check if module is active.
     *
     * @return bool
     */
    public function isActive()
    {
        return (bool) $this->getConfigValue(
            'magestat_cookielawbanner/module/enabled'
        );
    }

    /**
     * Retrieve banner title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getConfigValue(
            'magestat_cookielawbanner/general/title'
        );
    }

    /**
     * Retrieve banner message content.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->getConfigValue(
            'magestat_cookielawbanner/general/description'
        );
    }

    /**
     * Retrieve banner more info text.
     *
     * @return string
     */
    public function getInfoMessage()
    {
        return $this->getConfigValue(
            'magestat_cookielawbanner/general/text'
        );
    }

    /**
     * Retrieve banner more info link to.
     *
     * @return string
     */
    public function getInfoLink()
    {
        return $this->getConfigValue(
            'magestat_cookielawbanner/general/link'
        );
    }

    /**
     * Retrieve banner accept button text.
     *
     * @return string
     */
    public function getButton()
    {
        return $this->getConfigValue(
            'magestat_cookielawbanner/general/button'
        );
    }

    /**
     * @param string $path
     * @return string
     */
    public function getConfigValue($path)
    {
        return $this->scopeConfig->getValue(
            $path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}

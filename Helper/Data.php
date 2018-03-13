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

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    /**
     * Used to get title setting.
     */
    const PATH_TITLE = 'magestat_cookielawbanner/general/title';

    /**
     * Used to get banner message setting.
     */
    const PATH_MESSAGE = 'magestat_cookielawbanner/general/message';

    /**
     * Used to get more info message setting.
     */
    const PATH_INFO_MESSAGE = 'magestat_cookielawbanner/general/info_message';

    /**
     * Used to get more info link setting.
     */
    const PATH_INFO_LINK = 'magestat_cookielawbanner/general/info_link';

    /**
     * Used to get button title setting.
     */
    const PATH_BUTTON = 'magestat_cookielawbanner/general/accept_button';

    /**
     * Retrieve banner title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getConfigValue(self::PATH_TITLE);
    }

    /**
     * Retrieve banner message content.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->getConfigValue(self::PATH_MESSAGE);
    }

    /**
     * Retrieve banner more info text.
     *
     * @return string
     */
    public function getInfoMessage()
    {
        return $this->getConfigValue(self::PATH_INFO_MESSAGE);
    }

    /**
     * Retrieve banner more info link to.
     *
     * @return string
     */
    public function getInfoLink()
    {
        return $this->getConfigValue(self::PATH_INFO_LINK);
    }

    /**
     * Retrieve banner accept button text.
     *
     * @return string
     */
    public function getButton()
    {
        return $this->getConfigValue(self::PATH_BUTTON);
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

<?php

/**
 * A Magento 2 module named Magestat/CookieNotice
 * Copyright (C) 2018 Magestat
 *
 * This file included in Magestat/CookieNotice is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Magestat\CookieNotice\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @param string $path
     * @return string
     */
    public function getConfig($path)
    {
        return $this->scopeConfig->getValue(
                $path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

}

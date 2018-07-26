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

namespace Magestat\CookieLawBanner\Api;

interface CookieHandlerInterface
{
    /**
     * @var string Cookie name.
     */
    const COOKIE_NAME = 'm_cookie-law-banner';

    /**
     * Check if cookie exists.
     *
     * @return boolean
     */
    public function exists();
}

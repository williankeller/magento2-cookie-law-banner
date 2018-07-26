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

namespace Magestat\CookieLawBanner\Model;

use Magento\Framework\Stdlib\CookieManagerInterface;
use Magestat\CookieLawBanner\Api\CookieHandlerInterface;

class CookieHandler implements CookieHandlerInterface
{
    /**
     * @var \Magento\Framework\Stdlib\CookieManagerInterface
     */
    protected $cookieManager;

    /**
     * @param CookieManagerInterface $cookieManager
     */
    public function __construct(
        CookieManagerInterface $cookieManager
    ) {
        $this->cookieManager = $cookieManager;
    }

    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        if (empty($this->cookieManager->getCookie(self::COOKIE_NAME))) {
            return false;
        }
        return true;
    }
}

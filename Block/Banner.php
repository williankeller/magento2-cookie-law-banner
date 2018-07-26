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

namespace Magestat\CookieLawBanner\Block;

use Magento\Catalog\Block\Product\Context;
use Magestat\CookieLawBanner\Helper\Data;
use Magestat\CookieLawBanner\Api\CookieHandlerInterface;

class Banner extends \Magento\Framework\View\Element\Template
{    
    /**
     * @var \Magestat\CookieLawBanner\Helper\Data
     */
    protected $helperData;

    /**
     * @var \Magestat\CookieLawBanner\Api\CookieHandlerInterface
     */
    protected $cookieHandler;

    /**
     * @param Context $context
     * @param Data $helper
     * @param CookieHandlerInterface $cookieHandler
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $helper,
        CookieHandlerInterface $cookieHandler,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helperData = $helper;
        $this->cookieHandler = $cookieHandler;
    }

    /**
     * {@inheritdoc}
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * Get if module is enabled.
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        if ($this->helperData->isActive() && !$this->cookieHandler->exists())
        {
            return true;
        }
        return false;
    }

    /**
     * Retrieve banner title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->helperData->getTitle();
    }

    /**
     * Retrieve banner message content.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->helperData->getMessage();
    }

    /**
     * Retrieve banner more info text.
     *
     * @return string
     */
    public function getInfoMessage()
    {
        return $this->helperData->getInfoMessage();
    }

    /**
     * Retrieve banner more info link to.
     *
     * @return string
     */
    public function getInfoLink()
    {
        return $this->helperData->getInfoLink();
    }

    /**
     * Retrieve banner accept button text.
     *
     * @return string
     */
    public function getButton()
    {
        $button = $this->helperData->getButton();
        if (empty($button)) {
            return __('Accept');
        }
        return $button;
    }
}

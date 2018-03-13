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

namespace Magestat\CookieLawBanner\Block;

use Magento\Catalog\Block\Product\Context;
use Magestat\CookieLawBanner\Helper\Data;

class CookieLawBanner extends \Magento\Framework\View\Element\Template
{    
    /**
     * @var Magestat\CookieLawBanner\Helper\Data
     */
    protected $dataHelper = null;

    /**
     * @param Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ) {
        $this->dataHelper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * Retrieve banner title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->dataHelper->getTitle();
    }

    /**
     * Retrieve banner message content.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->dataHelper->getMessage();
    }

    /**
     * Retrieve banner more info text.
     *
     * @return string
     */
    public function getInfoMessage()
    {
        return $this->dataHelper->getInfoMessage();
    }

    /**
     * Retrieve banner more info link to.
     *
     * @return string
     */
    public function getInfoLink()
    {
        return $this->dataHelper->getInfoLink();
    }

    /**
     * Retrieve banner accept button text.
     *
     * @return string
     */
    public function getButton()
    {
        return $this->dataHelper->getButton();
    }
}

<?php
/**
 * A Magento 2 module named Magestat/CookieLawBanner
 *
 * This file included in Magestat/CookieLawBanner is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Magestat\CookieLawBanner\Model\Config\Source;

/**
 * Class ButtonPosition
 * @package Magestat\CookieLawBanner\Model\Config\Source
 */
class BannerPosition implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Get options as array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'bottom-right',
                'label' => __('Footer Right Block')
            ],
            [
                'value' => 'bottom-left',
                'label' => __('Footer Left Block')
            ],
            [
                'value' => 'bottom-full',
                'label' => __('Footer Full Banner')
            ],
            [
                'value' => 'top-right',
                'label' => __('Head Right Block')
            ],
            [
                'value' => 'top-left',
                'label' => __('Head Left Block')
            ],
            [
                'value' => 'top-full',
                'label' => __('Head Full Banner')
            ]
        ];
    }
}

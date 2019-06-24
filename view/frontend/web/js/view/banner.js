/**
 * A Magento 2 module named Magestat/CookieLawBanner
 * Copyright (C) 2018-2019 Magestat
 *
 * This file included in Magestat/CookieLawBanner is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */
define([
    'uiComponent',
    'jquery',
    'mage/cookies'
], function (Component, $) {
    'use strict';

    return Component.extend({
        defaults: {
            cookieName: 'user_agreed_with_cookies',
            context: '#magestat-cookie-law-banner',
            button: '.button-accept',
            cookieLifetime: 31556952 // 1 Year in seconds.
        },

        /** @inheritdoc */
        initialize: function () {
            this._super();
            this.displayBanner();
            this.buttonClick();
        },

        /**
         * Trigger button click action.
         *
         * @returns {banner}
         */
        buttonClick: function () {
            var self = this;

            $(self.context).on('click', self.button, function () {
                // Add class to hide container.
                $(this).closest(self.context).fadeOut(300);

                // Set cookie as accepted.
                var cookieExpires = new Date(new Date().getTime() + self.cookieLifetime * 1000);
                $.mage.cookies.set(self.cookieName, true, {
                    expires: cookieExpires
                });
            });
            return self;
        },

        /**
         * Responsible to show the banner up.
         *
         * @returns {exports}
         */
        displayBanner: function () {
            if (!$.mage.cookies.get(this.cookieName)) {
                $(this.context).addClass('display');
            }
            return this;
        }
    });
});

/**
 * A Magento 2 module named Magestat/CookieLawBanner
 * Copyright (C) 2018 Magestat
 *
 * This file included in Magestat/CookieLawBanner is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */
define([
    'uiComponent',
    'jquery',
    'jquery/jquery.cookie'
], function (Component, $) {
    'use strict';

    return Component.extend({
        defaults: {
            cookieName: 'm_cookie-law-banner',
            context: '#magestat-cookie-law-banner',
            button: '.button-accept'
        },

        /** @inheritdoc */
        initialize: function () {
            this._super();
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
                $.cookie(self.cookieName, true);
            });
            return self;
        }
    });
});

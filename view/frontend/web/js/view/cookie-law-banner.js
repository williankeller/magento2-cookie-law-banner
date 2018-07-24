/**
 * A Magento 2 module named Magestat/CookieLawBanner
 * Copyright (C) 2018 Magestat (http://magestat.com)
 *
 * This file included in Magestat/CookieLawBanner is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */
define([
    'jquery',
    'uiComponent'
], function ($, Component) {
    'use strict';

    return Component.extend({
        defaults: {
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
         * @returns {magestat-cookie-law-banner}
         */
        buttonClick: function () {
            var self = this;

            $(self.context).on('click', self.button, function () {
                $(this).closest(self.context).addClass('remove');
            });
            return self;
        }
    });
});

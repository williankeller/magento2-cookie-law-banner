Cookie Law Banner for Magento 2
=====================

This extension allow you to setup a Cookie Law Banner to inform your customers 
about the Cookie Privacy. This extension is also fully customizable, you're 
able to change the title, description, link and button text. Also compatible 
mobile version.

[![Build Status](https://travis-ci.org/magestat/magento2-cookie-law-banner.svg?branch=develop)](https://travis-ci.org/magestat/magento2-cookie-law-banner) [![Packagist](https://img.shields.io/packagist/v/magestat/module-cookie-law-banner.svg)](https://packagist.org/packages/magestat/module-cookie-law-banner) [![Downloads](https://img.shields.io/packagist/dt/magestat/module-cookie-law-banner.svg)](https://packagist.org/packages/magestat/module-cookie-law-banner)

## 1. Installation

### Install via composer (recommend)

Run the following command in Magento 2 root folder:
```sh
composer require magestat/module-cookie-law-banner
```

### Using GIT clone

Run the following command in Magento 2 root folder:
```sh
git clone git@github.com:magestat/magento2-cookie-law-banner.git app/code/Magestat/CookieLawBanner
```

## 2. Activation

Run the following command in Magento 2 root folder:
```sh
php bin/magento module:enable Magestat_CookieLawBanner --clear-static-content
php bin/magento setup:upgrade
```

Clear the caches:
```sh
php bin/magento cache:clean
```

## 3. Configuration

1. Go to **Stores** > **Configuration** > **Magestat** > **Cookie Law Banner**:
2. In **Enable Module** tab, select **Enabled** option to enable module.
3. In **Settings** tab, Fill the fields as you want.

## Contribution

Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

## Support

If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magestat/magento2-cookie-law-banner/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email willianlkeller@outlook.com and if we like your idea we will add this feature for free or at a discounted rate.

© Magestat.

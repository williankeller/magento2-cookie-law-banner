# Cookie Law Banner for Magento 2

This extension allows you to set up a Cookie Law Banner to inform your customers about the Cookie Privacy. This extension is also fully customizable, you're able to change the title, description, link, and button text, it is also compatible mobile version. Consent cookie banner extension for Magento 2.

[![Build Status](https://travis-ci.org/magestat/magento2-cookie-law-banner.svg?branch=develop)](https://travis-ci.org/magestat/magento2-cookie-law-banner) [![Packagist](https://img.shields.io/packagist/v/magestat/module-cookie-law-banner.svg)](https://packagist.org/packages/magestat/module-cookie-law-banner) [![Downloads](https://img.shields.io/packagist/dt/magestat/module-cookie-law-banner.svg)](https://packagist.org/packages/magestat/module-cookie-law-banner)

## Installation

### Install via composer (recommended)

Run the following command in Magento 2 root folder:
```sh
composer require magestat/module-cookie-law-banner
```

### Using GIT clone

Run the following command in Magento 2 root folder:
```sh
git clone git@github.com:magestat/magento2-cookie-law-banner.git app/code/Magestat/CookieLawBanner
```

## Activation

Run the following command in Magento 2 root folder:
```sh
php bin/magento module:enable Magestat_CookieLawBanner
```
```sh
php bin/magento setup:upgrade
```

Clear the caches:
```sh
php bin/magento cache:clean
```

## Configuration

1. Go to **STORES** > **Configuration** > **MAGESTAT** > **Cookie Law Banner**:
2. Under the **Enable Module** tab, select **Enabled** option to enable module.
3. Under the **Content Management** tab, fill the fields as you want.
3. Under the **Layout Configuration** tab, select the options that better fit to your store.

## Wiki

For detailed documentation, please follow our [WIKI Page](https://github.com/magestat/magento2-cookie-law-banner/wiki). There you can find images and examples.

## Contribution

Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

## Support

If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magestat/magento2-cookie-law-banner/issues).

Need help setting up or want to customize this extension to meet your business needs? Please open an issue and if we like your idea we will add this feature for free or at a discounted rate.

© Magestat.

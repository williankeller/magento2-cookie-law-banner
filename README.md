Cookie Law Banner for Magento 2
=====================

A simple way that allows the integration of a Floating Buy Button in your store;
No matter how much content it has, like, long product description or a lot of 
reviews, the button follow your customers along each product page. Bringing the 
product name, price and of course, the buy button.
Get your customer attention the most important action in your online store, the 
purchase.

[![Packagist](https://img.shields.io/packagist/v/magestat/module-cookie-law-banner.svg)](https://packagist.org/packages/magestat/module-cookie-law-banner)

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
3. In **Settings** tab, Fill the fields as you need.

## Contribution

Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

## Support

If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magestat/magento2-cookie-law-banner/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email support@magestat.com and if we like your idea we will add this feature for free or at a discounted rate.

© Magestat. | [www.magestat.com](http:/www.magestat.com)

# Sweet Tooth Module for Magento2

## Installation Instructions

Navigate to your magento root folder and install the module via composer
```
composer require "romeoc/sweettooth-magento2":"dev-master"
```

You may need to create a Magento 2 Access Key at https://developer.magento.com/customer/accessKeys/list/
to run composer. As a note the the magento public key is the username and private key is the password.

Run the composer update command
```
composer update
```

Add `Sweettooth_Rewards` to your `app/etc/config.php`
```php
<?php
return array (
  'modules' => 
  array (
    // ...
    'Sweettooth_Rewards' => 1,
    // ...
  ),
);
```

Run database migrations
```
php bin/magento setup:upgrade
```

Delete all cache directories
```
rm -rf var/cache/ var/generation/ var/page_cache/ var/view_preprocessed/ 
```

Set your SweetTooth API credentials in the control panel (request for an account at https://sweettoothrewards.com/):
`Control Panel -> Stores -> Configuration -> Sweet Tooth Settings`

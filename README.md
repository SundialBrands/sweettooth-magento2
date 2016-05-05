# Sweet Tooth Module for Magento2

## Installation Instructions

Install via composer
```
composer require "romeoc/sweettooth-magento2":"dev-master"
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

Set your SweetTooth API credentials in the control panel (request for an account at https://sweettoothrewards.com/):
`Control Panel -> Stores -> Configuration -> Sweet Tooth Settings`

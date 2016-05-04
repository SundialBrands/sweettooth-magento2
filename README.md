# Sweet Tooth Module for Magento2

## Installation Instructions

Install via composer
```
composer require romeoc/sweettooth-magento2
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

Create and connect your account at https://sweettoothrewards.com/

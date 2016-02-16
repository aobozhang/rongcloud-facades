# rongcloud-facades for laravel
used rongcloud as Normal laravel facades


[![Latest Stable Version](https://poser.pugx.org/aobozhang/rongcloud-facades/v/stable)](https://packagist.org/packages/aobozhang/rongcloud-facades) [![Total Downloads](https://poser.pugx.org/aobozhang/rongcloud-facades/downloads)](https://packagist.org/packages/aobozhang/rongcloud-facades) [![Latest Unstable Version](https://poser.pugx.org/aobozhang/rongcloud-facades/v/unstable)](https://packagist.org/packages/aobozhang/rongcloud-facades) [![License](https://poser.pugx.org/aobozhang/rongcloud-facades/license)](https://packagist.org/packages/aobozhang/rongcloud-facades)


## Installation  

* First:  

```
composer require aobozhang/RongFacades
```

* Second:  

Modify "config\app.php"  

```php
<?php

    return = [

        ...,

        'providers' = [

            ...,

            Aobo\RongCloud\RongCloudServiceProvider::class,

        ],
    ];

```  
* Third:  

```
php artisan vendor:publish
```


## Usage  

```php
use RongCloud;

```  

## To Use Your Own Configuration  

Modify ".env" -- recommend

```
RONGCLOUD_APP_KEY=YourAppKey
RONGCLOUD_APP_SECRET=YourAppSecret
```

Or You Can Modify "config\rongcloud.php" -- The Same effect.

```php
return [
    'AppKey'      => env('RONGCLOUD_APP_KEY', 'your appKey'),
    'AppSecret'      => env('RONGCLOUD_APP_SECRET', 'your appSecret')
];
```  

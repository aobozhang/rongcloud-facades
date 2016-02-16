# rongcloud-facades for laravel
used rongcloud as Normal laravel facades


## Installation  

* First:  

```
composer require aobozhang/EasemobFacades
```

* Second:  

Modify "config\app.php"  

```php
<?php

    return = [

        ...,

        'providers' = [

            ...,

            Aobo\Easemob\EasemobServiceProvider::class,

        ],
    ];

```  
* Third:  

```
php artisan vendor:publish
```

> <strong>Till now, you can use it </strong>  
> Test Account Supply by [http://github/easemob/](http://github/easemob/)



## Usage  

```php
use Easemob;

...

$options = [
    'username' => 'test_username',
    'password' => 'test_password'
];

return Easemob::accreditRegister($options);

```  

## To Use Your Own Configuration  

Modify ".env" -- recommend

```
EASEMOB_ORG_NAME=YourOrgName
EASEMOB_APP_NAME=YourAppName
EASEMOB_CLIENT_ID=YourClientID
EASEMOB_CLIENT_SECRET=YourClientSecret
```

Or You Can Modify "config\easemob.php" -- The Same effect.

```
return [
    'org_name'      => env('EASEMOB_ORG_NAME', 'easemob-playground'),
    'app_name'      => env('EASEMOB_APP_NAME', 'test1'),
    'client_id'     => env('EASEMOB_CLIENT_ID', 'YXA6wDs-MARqEeSO0VcBzaqg5A'),
    'client_secret' => env('EASEMOB_CLIENT_SECRET', 'YXA6JOMWlLap_YbI_ucz77j-4-mI0JA'),
];
```  

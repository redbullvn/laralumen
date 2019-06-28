# Lumen

### install more artisan cmd
```bash 
 _link : https://github.com/flipboxstudio/lumen-generator
 // require 
$ composer require flipbox/lumen-generator

1. inside your bootstrap/app.php , add :
2. $app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
```
### start
```php
    #@create Users Table
php artisan make:migration create_users_table --create=users
```
### install debug
```php
@link https://github.com/barryvdh/laravel-debugbar/issues/797
Thanks guys.

For me using Lumen 5.6.1 and Debugbar 3.1.3

To get working I had to add both:
DEBUGBAR_ENABLED=true to .env
Change config.debugbar.collectors.auth to false
```
### required package for Edu
```
{
    "require": {
        "php": "^7.1.3",
        "barryvdh/laravel-cors": "^0.11.0",
        "canducci/zipcode": "1.1",
        "fideloper/proxy": "^4.0",
        "guzzlehttp/guzzle": "5.3.2",
        "illuminate/contracts": "5.8.",
        "illuminate/filesystem": "^5.8",
        "illuminate/support": "5.8.",
        "laravel/framework": "5.8.*",
        "laravel/tinker": "^1.0",
        "mdanter/ecc": "^0.5.2",
        "phpseclib/phpseclib": "^2.0",
        "spatie/laravel-permission": "^2.12",
        "symfony/finder": "^4.2",
        "tymon/jwt-auth": "^1.0"   -->  //@ add new
    }
}
```
#### run jwt . create key secret 
`bash php artisan jwt:secret`
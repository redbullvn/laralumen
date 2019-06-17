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
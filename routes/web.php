<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Artisan;

Route::get("/page", function(){
    Artisan::call('route:list');
    return Route::getRoutes();
   return View::make("dir.page");
});
$router->get('/', function () use ($router) {
    return $router->app->version();
});
// group for API
$router->group(['prefix' => 'api/v1', 'middleware' => 'api-json'], function() use ($router) {
    // group for modules PRODUCTS
    $router->get('products', ['uses'=> 'ProductController@index', 'as'=> 'product.index']);
    $router->get('product/{id}', ['uses'=> 'ProductController@show', 'as'=> 'product.show']);
    $router->post('product/create', ['uses'=> 'ProductController@create', 'as'=> 'product.create']);


    // group for modules
    $router->group(['prefix' => 'c'], function () use ($router) {
        $router->get('about', ['uses'=> 'AboutController@test', 'as'=> 'about.test']);
    });

});

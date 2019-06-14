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
#$router->get('/about', 'AboutController@index');
$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$router->get('about', ['uses'=> 'AboutController@index', 'as'=> 'about.index']);
$router->get('home', ['uses'=> 'AboutController@home', 'as'=> 'about.home']);

// group for API
$router->group(['prefix' => 'api'], function() use ($router) {
    // group for modules
    $router->group(['prefix' => 'c'], function () use ($router) {
        $router->get('about', ['uses'=> 'AboutController@test', 'as'=> 'about.test']);
    });
    
    
    
    
    
    $router->get('about', ['uses'=> 'AboutController@index', 'as'=> 'about.index']);
});
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/javad', 'WelcomeController@index');
Route::get('/news/search','NewsController@getSearch');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);








Route::get('/home',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/',['as'=>'home','uses'=>'HomeController@index']);


Route::get('laravel/laravel',['as'=>'laravel1','uses'=>'LaravelController@index']);
Route::resource('laravel', 'LaravelController');
Route::resource('news', 'NewsController');
Route::controller('news','NewsController');
Route::resource('search','SearchController');
Route::resource('admin/tag', 'TagController');
Route::controller('admin','AdminController');
Route::resource('admin','AdminController');



Route::get('/foo', function()
{
    $exitCode = Artisan::call('vendor:publish');
    return $exitCode;
//
});

Route::get('/charts', function()
{
    return View::make('mcharts');
});

Route::get('/tables', function()
{
    return View::make('table');
});

Route::get('/forms', function()
{
    return View::make('form');
});

Route::get('/grid', function()
{
    return View::make('grid');
});

Route::get('/buttons', function()
{
    return View::make('buttons');
});


Route::get('/icons', function()
{
    return View::make('icons');
});

Route::get('/panels', function()
{
    return View::make('panel');
});

Route::get('/typography', function()
{
    return View::make('typography');
});

Route::get('/notifications', function()
{
    return View::make('notifications');
});

Route::get('/blank', function()
{
    return View::make('blank');
});

Route::get('/login', function()
{
    return View::make('login');
});

Route::get('/documentation', function()
{
    return View::make('documentation');
});

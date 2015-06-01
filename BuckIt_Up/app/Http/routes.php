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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'WelcomeController@home');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/**********************************************
    Bucket Routes
**********************************************/

Route::get('bucket', 'BucketController@bucket');
Route::get('new_bucket', 'BucketController@create');
Route::post('new_bucket', 'BucketController@postCreate');
Route::get('edit_Bucket', 'BucketController@edit');
Route::post('edit_Bucket', 'BucketController@postEdit');

/**********************************************
    User Routes
**********************************************/

Route::get('create_account', 'UserController@create');
Route::post('create_account', 'UserController@postCreate');
Route::get('login', 'UserController@login');
Route::get('logout', 'UserController@logout');
Route::get('view_account', 'UserController@view');

/**********************************************
    Item Routes
**********************************************/

Route::get('item', 'ItemController@item');
Route::get('new_item', 'ItemController@create');
Route::post('new_item', 'ItemController@postCreate');
Route::get('edit_item', 'ItemController@edit');
Route::post('edit_item', 'ItemController@postEdit');
Route::get('view_all_items', 'ItemController@allItems');

/**********************************************
    Misc Routes
**********************************************/

Route::get('about', 'WelcomeController@about');
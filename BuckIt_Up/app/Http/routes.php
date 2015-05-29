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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/**********************************************
    Bucket Routes
**********************************************/

Route::get('Make_your_bucket', 'BucketController@create');
Route::post('Make_your_bucket', 'BucketController@postCreate');
Route::get('Edit_Bucket', 'BucketController@edit');
Route::post('Edit_Bucket', 'BucketController@postEdit');

/**********************************************
    User Routes
**********************************************/

Route::get('Create_Account', 'UserController@create');
Route::post('Create_Account', 'UserController@postCreate');
Route::get('Login', 'UserController@login');
Route::get('Logout', 'UserController@logout');
Route::get('View_account', 'UserController@view');

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

Route::get('about', 'HomeController@about');
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

Route::get('/', function() {
    return view('home');
});

Route::get('home', function() {
    return view('home');
});

Route::get('about', function() {
    return view('about');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/**********************************************
    Bucket Routes
**********************************************/

Route::get('bucket/{user_id}', 'BucketController@viewBucket');
Route::get('new_bucket', 'BucketController@createBucket');
Route::post('new_bucket', 'BucketController@postCreate');
Route::get('edit_bucket', 'BucketController@editBucket');
Route::post('edit_bucket', 'BucketController@postEdit');
Route::get('bucket/{id}/delete', 'BucketController@delete');

/**********************************************
    User Routes
**********************************************/

Route::get('auth/register', 'UserController@create');
Route::post('auth/register', 'UserController@postCreate');
Route::get('auth/login', 'UserController@login');
Route::get('auth/logout', 'UserController@logout');
Route::get('user/{id}', 'UserController@view');
Route::get('user/{id}/delete', 'UserController@delete');
Route::get('user', 'UserController@view');

/**********************************************
    Item Routes
**********************************************/

Route::get('item/{id}', 'ItemController@item');
Route::get('new_item', 'ItemController@create');
Route::post('new_item', 'ItemController@postCreate');
Route::get('item/{id}/edit', 'ItemController@edit');
Route::post('item/{id}/edit', 'ItemController@postEdit');
Route::get('all_items', 'ItemController@allItems');
Route::get('item/{id}/delete', 'ItemController@delete');


/**********************************************
    Misc Routes
**********************************************/
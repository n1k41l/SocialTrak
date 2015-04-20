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

/*
 * Static Pages Routes
 */
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('help', 'PagesController@help');
Route::get('contact', 'PagesController@contact');

Route::get('signup',[
	'as' => 'register_path', 'uses' => 'UsersController@signup'
]);

Route::resource('users', 'UsersController');

Route::resource('microposts', 'MicropostsController',[
		'only' => ['store', 'destroy']
	]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

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

Route::get('home', 'PagesController@home');


// Users
Route::get('users', 'UserController@users');
Route::get('users/create', 'UserController@create');
Route::get('users/{id}/edit', 'UserController@edit');
Route::get('users/{id}', 'UserController@entry');
Route::post('users', 'UserController@store');

// Entries
Route::get('entries/recent', 'EntriesController@recent');
Route::get('entries/popular', 'EntriesController@popular');
Route::get('entries/create', 'EntriesController@create');
Route::get('entries/{username}', 'EntriesController@entries_by_user');
Route::get('entries/entry/{id}', 'EntriesController@show');
Route::resource('entries', 'EntriesController');

// Comments
Route::get('comments/create', 'CommentsController@create');
Route::post('comments', 'CommentsController@store');

// Auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);
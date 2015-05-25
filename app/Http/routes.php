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

// TODO: named route to views

Route::group(['middleware' => 'auth'], function () {

	Route::get('/', 'HomeController@index');

	Route::resource('entries', 'EntriesController');
	Route::get('/entries/{entries}/edit', ['before' => 'owner.entries', 'uses' => 'EntriesController@edit']);
	Route::model('entries', 'App\Entry');
	// TODO: filter to middleware or maybe more useful
	// TODO: other routes are vulnerable, example destroy
	Route::filter('owner.entries', function ($route) {
		if ($route->parameter('entries')->user_id !== Auth::user()->id) {
			return Redirect::back()->withErrors('Sorry, you can only access entries that you created');
		}
	});

	Route::resource('tasks', 'TasksController');
	Route::model('tasks', 'App\Task');

	Route::resource('departments', 'DepartmentsController');
	Route::model('departments', 'App\Department');

	Route::resource('users', 'UsersController');
	Route::model('users', 'App\User');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

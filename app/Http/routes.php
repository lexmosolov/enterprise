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

	Route::get('/', 'DashboardController@index');

	Route::get('support', 'SupportController@create');
	Route::post('support', 'SupportController@send');

	Route::get('profile', 'ProfileController@edit');
	Route::patch('profile', 'ProfileController@update');

	Route::resource('entries', 'EntriesController');
	Route::model('entries', 'App\Entry');

	Route::resource('tasks', 'TasksController');
	Route::model('tasks', 'App\Task');

	Route::resource('organizations', 'OrganizationsController');
	Route::model('organizations', 'App\Organization');

	Route::resource('departments', 'DepartmentsController');
	Route::model('departments', 'App\Department');

	Route::resource('users', 'UsersController');
	Route::model('users', 'App\User');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

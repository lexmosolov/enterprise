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

Route::group(['middleware' => 'auth'], function () {

	Route::get('/', 'HomeController@index');
	Route::get('files', 'FilesController@index');

	Route::resource('projects', 'ProjectsController');
	Route::bind('projects', function ($value, $route) {
		return App\Project::whereSlug($value)->first();
	});

	Route::resource('projects.tasks', 'TasksController');
	Route::bind('tasks', function ($value, $route) {
		return App\Task::whereSlug($value)->first();
	});

	Route::resource('departments', 'DepartmentsController');
	Route::bind('departments', function ($value) {
		return App\Department::whereSlug($value)->first();
	});
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

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

Route::get('/', 'HomeController@index');
Route::get('files', 'FilesController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
// Provide controller methods with object instead of ID
//Route::model('tasks', 'Task');
//Route::model('projects', 'Project');
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');
// Use slugs rather than IDs in URLs
Route::bind('projects', function ($value, $route) {
	return App\Project::whereSlug($value)->first();
});
Route::bind('tasks', function ($value, $route) {
	return App\Task::whereSlug($value)->first();
});

Route::resource('departments', 'DepartmentsController');
Route::bind('departments', function ($value) {
	return App\Department::whereSlug($value)->first();
});
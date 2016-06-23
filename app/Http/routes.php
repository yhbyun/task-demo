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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', ['as' => 'tasks.index', 'uses' => 'TasksController@index']);
Route::get('/tasks/create', ['as' => 'tasks.create', 'uses' => 'TasksController@create']);
Route::get('/tasks/{id}', ['as' => 'tasks.show', 'uses' => 'TasksController@show']);
Route::post('/tasks', ['as' => 'tasks.store', 'uses' => 'TasksController@store']);
Route::get('/tasks/{id}/edit', ['as' => 'tasks.edit', 'uses' => 'TasksController@edit']);
Route::put('/tasks/{id}', ['as' => 'tasks.update', 'uses' => 'TasksController@update']);
Route::delete('/tasks/{id}', ['as' => 'tasks.delete', 'uses' => 'TasksController@destroy']);


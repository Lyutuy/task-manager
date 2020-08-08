<?php

use Illuminate\Support\Facades\Route;
use Illuminate\HTTP\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('project', 'ProjectsController')->middleware('auth');
Route::post('create', 'ProjectsController@create')->middleware('auth');
Route::get('project/{projectID}/tasks', 'ProjectsController@showTasks')->middleware('auth');


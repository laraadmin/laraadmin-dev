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

Config::set('sitename', "LaraAdmin 0.1");
Config::set('sitename2', ["Lara", "Admin 0.1"]); // {{ Config::get('sitename2')[0] }}</b> {{ Config::get('sitename2')[1] }}
Config::set('sitedesc', "LaraAdmin is a better and smoother way to manage Projects, Clients, Revenue and all the other aspects of Small & Medium Businesses.");

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::auth();
Route::get('/la', 'LA\DashboardController@index');
Route::get('/la/dashboard', 'LA\DashboardController@index');
Route::get('/dashboard', 'LA\DashboardController@index');

/* ================== Files ================== */
Route::get('/la/folder_files/{folder_name}', 'LA\FileController@get_folder_files');

/* ================== Modules ================== */
Route::resource('/la/modules', 'LA\ModuleController');
Route::resource('/la/module_fields', 'LA\FieldController');
Route::get('/la/module_generate_crud/{model_id}', 'LA\ModuleController@generate_crud');
Route::get('/la/module_generate_migr/{model_id}', 'LA\ModuleController@generate_migr');

/* ================== Users ================== */

Route::get('/la/user/{id}', 'LA\UserController@show');

/* ================== Books ================== */
Route::resource('/la/books', 'LA\BooksController');
Route::get('/la/book_dt_ajax', 'LA\BooksController@dtajax');

/* ================== Employees ================== */
Route::resource('/la/employees', 'LA\EmployeesController');
Route::get('/la/employee_dt_ajax', 'LA\EmployeesController@dtajax');

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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');

/* ================== Modules ================== */
Route::resource('modules', 'ModuleController');
Route::resource('module_fields', 'FieldController');
// Route::get('module_generate_crud', function() {
//     return redirect()->action('ModuleController@generate_crud', [1]);
// });
Route::get('module_generate_crud/{model_id}', 'ModuleController@generate_crud');
Route::get('module_generate_migr/{model_id}', 'ModuleController@generate_migr');

/* ================== Users ================== */

Route::get('user/{id}', 'UserController@show');

/* ================== Books ================== */
Route::resource('books', 'BooksController');
Route::get('book_dt_ajax', 'BooksController@dtajax');

/* ================== Employees ================== */
Route::resource('employees', 'EmployeesController');
Route::get('employee_dt_ajax', 'EmployeesController@dtajax');

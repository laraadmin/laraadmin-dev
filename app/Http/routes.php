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

/* ================== Users ================== */

Route::get('user/{id}', 'UserController@showProfile');

/* ================== Employees ================== */

Route::get('employee/{id}', 'EmployeeController@showProfile');
Route::resource('employee', 'EmployeeController');

/* ================== Books ================== */
Route::resource('books', 'BooksController');
Route::get('book_dt_ajax', 'BooksController@dtajax');
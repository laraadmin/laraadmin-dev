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

/* ================== Homepage ================== */

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::auth();

/* ================== Dashboard ================== */

Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
Route::get('/dashboard', 'LA\DashboardController@index');

/* ================== Users ================== */
Route::get(config('laraadmin.adminRoute') . '/user/{id}', 'LA\UserController@show');

/* ================== Roles ================== */
Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');

/* ================== Departments ================== */
Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');

/* ================== Employees ================== */
Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');

/* ================== Books ================== */
Route::resource(config('laraadmin.adminRoute') . '/books', 'LA\BooksController');
Route::get(config('laraadmin.adminRoute') . '/book_dt_ajax', 'LA\BooksController@dtajax');

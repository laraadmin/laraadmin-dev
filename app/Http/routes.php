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

Config::set('sitename', "Dwij SBS 3.0");
Config::set('sitedesc', "Dwij SBS is a better and smoother way to manage Projects, Clients, Revenue and all the other aspects of Small & Medium Businesses.");

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}', 'UserController@showProfile');
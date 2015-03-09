<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Home page route
Route::get('/', function()
{
	return View::make('login');
});

//Handles login post request
Route::post('login', 'HomeController@login');

//Handles dashboard request
Route::get('dashboard', 'DashboardController@index');

//Handles user request
Route::get('users', function(){

    $users = User::all();

   return View::make('users')->with('users', $users);
});

//Handles logout request
Route::get('logout', 'HomeController@logout');

//Handles view all assets request
Route::get('assets/all', '');

//Handles create new user request
Route::get('user/new', 'DashboardController@newUserForm');

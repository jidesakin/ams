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
//Route::get('assets/all', '');

//Handles create new user request
Route::get('user/new', 'DashboardController@newUserForm');

//Create user action
Route::post('user/create', 'UserController@create');

//Fetches all the users from the database
Route::get('users', 'UserController@index');

//Gets create new asset form
Route::get('asset/hardware/new', 'DashboardController@newHardwareAssetForm');

//Creates a new Asset
Route::post('asset/create', 'HardwareAssetController@create');

//Fetches the suppliers of assets
Route::get('suppliers', 'SupplierController@index');

// Add new supplier
Route::get('supplier/new', 'SupplierController@newSupplierForm');

// Creates a new supplier
Route::post('supplier/create', 'SupplierController@create');

// Gets new license form
Route::get('asset/software/new', 'SoftwareAssetController@newSoftwareAssetForm');

//Gets all the software assets from the database
Route::get('asset/software/all', 'SoftwareAssetController@index');

// handles create new software action
Route::post('asset/software/create', 'SoftwareAssetController@create');

// Creates a new location
Route::post('location/create', 'LocationController@create');

//Fetches all the saved locations from the database
Route::get('locations', 'LocationController@index');

// gets the new location form
Route::get('location/new', 'LocationController@newLocationForm');

// Get all manufacturers from the Database
Route::get('manufacturers', 'ManufacturerController@index');

//Gets the New Manufacturers form
Route::get('manufacturer/new', 'ManufacturerController@newManufacturerForm');

//Handles create a new manufacturer
Route::post('manufacturer/create', 'ManufacturerController@create');

//Fetches all the groups from the database
Route::get('groups', 'GroupController@index');

//Gets new group form
Route::get('group/new', 'GroupController@newGroupForm');

// Handles create new group action
Route::post('group/create', 'GroupController@create');

//Fetches all hardware from the database
Route::get('asset/hardware/all', 'HardwareAssetController@index');

// Fetches the various categories of the hardware assets
Route::get('asset/hardware', 'HardwareAssetController@getAssets');

// Fetches all th accessories from the database
Route::get('accessories', 'AccessoryController@index');

// Gets the new accessory form
Route::get('accessory/new', 'AccessoryController@newAccessoryForm');

// Handles create accessory action
Route::post('accessory/create', 'AccessoryController@create');


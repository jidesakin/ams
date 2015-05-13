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

//Handles check out action for hardware assets
Route::post('asset/hardware/checkout/confirm', 'HardwareAssetController@checkOut');

// Gets the checkin form
Route::get('asset/hardware/checkin/{asset_id}', 'HardwareAssetController@checkInForm');

// Handles the check in action for hardware assets
Route::post('asset/hardware/checkin/confirm', 'HardwareAssetController@checkIn');

// Gets the hardware report form
Route::get('report/asset/hardware', 'HardwareAssetController@reportForm');

// Fetch the summary report between a start date and end date
Route::post('report/asset/hardware/view', 'HardwareAssetController@report');
Route::get('report/asset/hardware/view', 'HardwareAssetController@report');
Route::post('report/asset/hardware/download', 'HardwareAssetController@getCSVLink');

Route::get('report/asset/software', 'SoftwareAssetController@reportForm');

// software report
Route::post('report/asset/software/view', 'SoftwareAssetController@report');
Route::get('report/asset/software/view', 'SoftwareAssetController@report');
Route::post('report/asset/software/download', 'SoftwareAssetController@getCSVLink');


// Sends scan network request to the web api
Route::get('scan/network', 'HardwareAssetController@scanNetwork');

// gets the assign software software page
Route::get('asset/software/assign/{asset_id}', 'SoftwareAssetController@assignForm');

// handles the confirm assign software asset
Route::post('asset/software/assign/confirm', 'SoftwareAssetController@assign');

// Handles edit software asset action
Route::get('asset/software/edit/{asset_id}', 'SoftwareAssetController@edit');

// Handles delete software asset action
Route::get('asset/software/delete/{asset_id}', 'SoftwareAssetController@delete');

// Handles updates software asset action
Route::post('asset/software/update', 'SoftwareAssetController@update');


// Handles add device from scan result
Route::get('scan/result/add/{name}', 'HardwareAssetController@addFoundDevice');
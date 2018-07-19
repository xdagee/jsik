<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('dashboard', 'DashboardController');

Route::get('/profile', function () {
	return view('profile');
});


// skills routing...
Route::get('/skills', 'SpecialitiesController@index');
Route::resource('skills', 'SpecialitiesController');

// Route::get('skills/create','SpecialitiesController@create');
// Route::post('skills', 'SpecialitiesController@store');
// Route::get('skills/{skill}', 'SpecialitiesController@show');

// employees routing...
Route::get('/employees', 'EmployeesController@index');
Route::resource('employees', 'EmployeesController');

// Route::get('employees/create', 'EmployeesController@create');
// Route::post('employees', 'EmployeesController@store');
// Route::get('employees/{employee}', 'EmployeesController@show');

// calendar
Route::get('/calendar','CalendarController@index');
Route::resource('calendar', 'CalendarController');
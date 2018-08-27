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

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('dashboard', 'DashboardController');

Route::get('profile', function () {
	return view('profile');
});


// skills
Route::get('skills', 'SpecialitiesController@index')->name('skills');
Route::resource('skills', 'SpecialitiesController');

// employees
Route::get('employees', 'EmployeesController@index')->name('employees');
Route::resource('employees', 'EmployeesController');

// calendar
Route::get('calendar','CalendarController@index')->name('calendar');
Route::resource('calendar', 'CalendarController');
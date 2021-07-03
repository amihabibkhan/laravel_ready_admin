<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Auth::routes();



// admin routes
Route::get('/home', 'HomeController@index')->name('home');

// general routes
Route::get('/settings', 'SettingsController@adminSettingsPage')->name('adminSettingsPage');
Route::post('/settings', 'SettingsController@updateSettings')->name('updateSettings');

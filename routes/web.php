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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('/cities', 'CityController');
    Route::resource('/clients', 'ClientController');
    Route::resource('/users', 'UserController');
	Route::post('/clientstore','ajaxController@clientStore')->name('clientStore');
});

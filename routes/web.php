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
// Route::post('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

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
    return view('landing');
})->name('landing');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::post('/contacto', 'App\Http\Controllers\HomeController@contacto')->name('contacto');

/* Login */
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();
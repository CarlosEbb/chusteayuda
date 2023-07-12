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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/material', function () {
    return view('material');
})->name('material');

Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::post('/contacto', 'App\Http\Controllers\HomeController@contacto')->name('contacto');

/* Login */
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::resource('materiales', App\Http\Controllers\MaterialesController::class);
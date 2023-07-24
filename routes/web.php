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

//Route::get('materiales', [App\Http\Controllers\MaterialesController::class, 'index'])->name('materiales.index');
//Route::get('materiales/create', [App\Http\Controllers\MaterialesController::class, 'create'])->name('materiales.create');
Route::post('materiales', [App\Http\Controllers\MaterialesController::class, 'store'])->name('materiales.store')->middleware('role:1');
Route::get('materiales/{id}', [App\Http\Controllers\MaterialesController::class, 'show'])->name('materiales.show');
Route::get('materiales/{id}/edit', [App\Http\Controllers\MaterialesController::class, 'edit'])->name('materiales.edit')->middleware('role:1');
Route::put('materiales/{id}', [App\Http\Controllers\MaterialesController::class, 'update'])->name('materiales.update')->middleware('role:1');
Route::delete('materiales/{id}', [App\Http\Controllers\MaterialesController::class, 'destroy'])->name('materiales.destroy')->middleware('role:1');
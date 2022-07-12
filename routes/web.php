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
});

Route::get('evaluacion-del-desarrollo', function () {
    return view('admin.incidencias.formularios.InformeEvaluacionDelDesarrollo');
});

Route::get('reporte-finalizado', function () {
    return view('admin.incidencias.formularios.ReporteFinalizado');
});


Auth::routes();

Route::post('/contacto', 'App\Http\Controllers\HomeController@contacto')->name('contacto');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('consultar-qr/{id}', 'App\Http\Controllers\IncidenciaController@qr');

Route::get('/{id}', 'App\Http\Controllers\HomeController@incidencias');
Route::get('/reporte/{id}', 'App\Http\Controllers\IncidenciaController@incidencia');
Route::get('/reportePDF/{id}', 'App\Http\Controllers\IncidenciaController@incidenciaPDF');

Route::resource('cliente', App\Http\Controllers\ClienteController::class);
Route::resource('incidencia', App\Http\Controllers\IncidenciaController::class);
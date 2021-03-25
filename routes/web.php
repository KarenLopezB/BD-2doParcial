<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Datos;

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

Route::get('/','App\Http\Controllers\DatosController@index')->name('datos.index');

Route::get('agregar','App\Http\Controllers\DatosController@agregar' )->name('datos.agregar');

Route::post('crear', 'App\Http\Controllers\DatosController@crear')->name('datos.store');

Route::get('/{id}/editar', 'App\Http\Controllers\DatosController@editar')->name('datos.editar');

Route::put('/{datos}/editar', 'App\Http\Controllers\DatosController@update')->name('datos.update');

Route::delete('/{id}', 'App\Http\Controllers\DatosController@destroy')->name('datos.destroy');
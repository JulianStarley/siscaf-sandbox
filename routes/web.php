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

Route::get('/dashboardGerencial', function(){
    return view ('dashboardGerencial');
})->name('dashboardGerencial');

Route::get('/medicamentos', '\App\Http\Controllers\MedicamentoController@index')->name('medicamentos');
Route::get('/medicamentos/create', '\App\Http\Controllers\UnidadesController@create')->name('medicamentos.create');
Route::post('/medicamentos/store', '\App\Http\Controllers\UnidadesController@store')->name('medicamentos.store');
Route::get('/medicamentos/{id}/edit', '\App\Http\Controllers\UnidadesController@edit')->name('medicamentos.edit');
Route::put('/medicamentos/{id}/update', '\App\Http\Controllers\UnidadesController@update')->name('medicamentos.update');
Route::delete('/medicamentos/{id}/delete', '\App\Http\Controllers\UnidadesController@delete')->name('medicamentos.delete');

Route::get('/farmaceuticos', '\App\Http\Controllers\FarmaceuticoController@index')->name('farmaceuticos');

Route::get('/unidades', '\App\Http\Controllers\UnidadesController@index')->name('unidades.index');
Route::get('/unidades/create', '\App\Http\Controllers\UnidadesController@create')->name('unidades.create');
Route::post('/unidades/store', '\App\Http\Controllers\UnidadesController@store')->name('unidades.store');
Route::get('/unidades/{id}/edit', '\App\Http\Controllers\UnidadesController@edit')->name('unidades.edit');
Route::put('/unidades/{id}', '\App\Http\Controllers\UnidadesController@update')->name('unidades.update');
Route::delete('/unidades/{id}/delete', '\App\Http\Controllers\UnidadesController@delete')->name('unidades.delete');

Route::get('/testescalculos', function(){
    return view('testescalculos');
})->name('testescalculos');

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
})->name('/');

Route::get('/login', 'ConsumoItemController@login')->name('login');
Route::post('/login', 'ConsumoItemController@postLogin')->name('postLogin');
Route::get('/register', 'ConsumoItemController@register')->name('register');
Route::post('/register', 'ConsumoItemController@postRegister')->name('postRegister');

Route::get('/dashboardGerencial', function(){
    return view ('dashboardGerencial');
})->name('dashboardGerencial');

Route::group(['prefix' => 'medicamentos'], function() {
    Route::get('/', '\App\Http\Controllers\MedicamentoController@index')->name('medicamentos.index');
    Route::get('/{id}/show', '\App\Http\Controllers\MedicamentoController@show')->name('medicamentos.show');
    Route::get('/create', '\App\Http\Controllers\MedicamentoController@create')->name('medicamentos.create');
    Route::post('/store', '\App\Http\Controllers\MedicamentoController@store')->name('medicamentos.store');
    Route::get('/include', '\App\Http\Controllers\MedicamentoController@med_include')->name('medicamentos.include');
    Route::get('/{id}/edit', '\App\Http\Controllers\MedicamentoController@edit')->name('medicamentos.edit');
    Route::put('/{id}/update', '\App\Http\Controllers\MedicamentoController@update')->name('medicamentos.update');
    Route::delete('/{id}/delete', '\App\Http\Controllers\MedicamentoController@delete')->name('medicamentos.delete');
});

Route::group(['prefix' => 'farmaceuticos'], function() {
    Route::get('/', '\App\Http\Controllers\FarmaceuticoController@index')->name('farmaceuticos.index');
    Route::get('/create', '\App\Http\Controllers\FarmaceuticoController@create')->name('farmaceuticos.create');
    Route::get('/store', '\App\Http\Controllers\FarmaceuticoController@store')->name('farmaceuticos.store');
    Route::post('/{id}/edit', '\App\Http\Controllers\FarmaceuticoController@edit')->name('farmaceuticos.edit');
    Route::get('/{id}', '\App\Http\Controllers\FarmaceuticoController@update')->name('farmaceuticos.update');
    Route::put('/{id}/delete', '\App\Http\Controllers\FarmaceuticoController@delete')->name('farmaceuticos.delete');
});

Route::group(['prefix' => 'unidades'], function() {
    Route::get('/', '\App\Http\Controllers\UnidadesController@index')->name('unidades.index');
    Route::get('/create', '\App\Http\Controllers\UnidadesController@create')->name('unidades.create');
    Route::post('/store', '\App\Http\Controllers\UnidadesController@store')->name('unidades.store');
    Route::get('/{id}/edit', '\App\Http\Controllers\UnidadesController@edit')->name('unidades.edit');
    Route::put('/{id}', '\App\Http\Controllers\UnidadesController@update')->name('unidades.update');
    Route::get('/tipo_unidade', '\App\Http\Controllers\UnidadesController@tipo_unidade')->name('unidades.tipo_unidade');
    Route::delete('/{id}/delete', '\App\Http\Controllers\UnidadesController@delete')->name('unidades.delete');
});

Route::group(['prefix' => 'pessoas'], function(){
    Route::get('/', '\App\Http\Controllers\PessoaController@index')->name('pessoas.index');
    Route::get('/create', '\App\Http\Controllers\PessoaController@create')->name('pessoas.create');
    Route::post('/store', '\App\Http\Controllers\PessoaController@store')->name('pessoas.store');
    Route::get('/{id}/edit', '\App\Http\Controllers\PessoaController@edit')->name('pessoas.edit');
    Route::put('/{id}', '\App\Http\Controllers\PessoaController@update')->name('pessoas.update');
    Route::delete('/{id}/delete', '\App\Http\Controllers\PessoaController@delete')->name('pessoas.delete');
    Route::get('/search', '\App\Http\Controllers\PessoaController@search')->name('pessoas.search');
});

Route::group(['prefix' => 'solicitacoes'], function (){
    Route::get('/', '\App\Http\Controllers\SolicitacaoController@index')->name('solicitacoes.index');
    Route::get('/create', '\App\Http\Controllers\SolicitacaoController@create')->name('solicitacoes.create');
    Route::post('/store', '\App\Http\Controllers\SolicitacaoController@store')->name('solicitacoes.store');
    Route::get('/{id}', '\App\Http\Controllers\SolicitacaoController@show')->name('solicitacoes.show');
    Route::get('/{id}/edit', '\App\Http\Controllers\SolicitacaoController@edit')->name('solicitacoes.edit');
    Route::put('/{id}', '\App\Http\Controllers\SolicitacaoController@update')->name('solicitacoes.update');
    Route::delete('/{id}/delete', '\App\Http\Controllers\SolicitacaoController@delete')->name('solicitacoes.delete');
});

Route::group(['prefix' => 'solicitacao-itens'], function () {
    Route::get('/', 'App\Http\Controllers\SolicitacaoItemController@index')->name('solicitacao-itens.index');
    Route::get('/create', 'App\Http\Controllers\SolicitacaoItemController@create')->name('solicitacao-itens.create');
    Route::post('/store', 'App\Http\Controllers\SolicitacaoItemController@store')->name('solicitacao-itens.store');
    Route::get('/{id}', 'App\Http\Controllers\SolicitacaoItemController@show')->name('solicitacao-itens.show');
    Route::get('/{id}/edit', 'App\Http\Controllers\SolicitacaoItemController@edit')->name('solicitacao-itens.edit');
    Route::put('/{id}', 'App\Http\Controllers\SolicitacaoItemController@update')->name('solicitacao-itens.update');
    Route::delete('/{id}/delete', 'App\Http\Controllers\SolicitacaoItemController@delete')->name('<solicitacao-itens.delete');
});

Route::group(['prefix' => 'consumos'], function (){
    Route::get('/', '\App\Http\Controllers\ConsumoController@index')->name('consumos.index');
    Route::get('/create', '\App\Http\Controllers\ConsumoController@create')->name('consumos.create');
    Route::post('/store', '\App\Http\Controllers\ConsumoController@store')->name('consumos.store');
    Route::get('/{id}', '\App\Http\Controllers\ConsumoController@show')->name('consumos.show');
    Route::get('/{id}/edit', '\App\Http\Controllers\ConsumoController@edit')->name('consumos.edit');
    Route::put('/{id}', '\App\Http\Controllers\ConsumoController@update')->name('consumos.update');
    Route::delete('/{id}/delete', '\App\Http\Controllers\ConsumoController@delete')->name('consumos.delete');
});

Route::group(['prefix' => 'consumo-itens'], function (){
    Route::get('/', '\App\Http\Controllers\ConsumoItemController@index')->name('consumo-itens.index');
    Route::get('/create', '\App\Http\Controllers\ConsumoItemController@create')->name('consumo-itens.create');
    Route::post('/store', '\App\Http\Controllers\ConsumoItemController@store')->name('consumo-itens.store');
    Route::get('/{id}', '\App\Http\Controllers\ConsumoItemController@show')->name('consumo-itens.show');
    Route::get('/{id}/edit', '\App\Http\Controllers\ConsumoItemController@edit')->name('consumo-itens.edit');
    Route::put('/{id}', '\App\Http\Controllers\ConsumoItemController@update')->name('consumo-itens.update');
    Route::delete('/{id}/delete', '\App\Http\Controllers\ConsumoItemController@delete')->name('consumo-itens.delete');
    });

Route::get('/testescalculos', function(){
    return view('testescalculos');
})->name('testescalculos');
require __DIR__.'/auth.php';

Route::get('/transferencias', function()
{
    return view('transferencias');
})->name('transferencias');

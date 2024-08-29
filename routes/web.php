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
Route::get('/medicamentos/{id}/show', '\App\Http\Controllers\MedicamentoController@show')->name('medicamentos.show');
Route::get('/medicamentos/create', '\App\Http\Controllers\UnidadesController@create')->name('medicamentos.create');
Route::post('/medicamentos/store', '\App\Http\Controllers\UnidadesController@store')->name('medicamentos.store');
Route::get('/medicamentos/{id}/edit', '\App\Http\Controllers\UnidadesController@edit')->name('medicamentos.edit');
Route::put('/medicamentos/{id}/update', '\App\Http\Controllers\UnidadesController@update')->name('medicamentos.update');
Route::delete('/medicamentos/{id}/delete', '\App\Http\Controllers\UnidadesController@delete')->name('medicamentos.delete');

Route::get('/farmaceuticos', '\App\Http\Controllers\FarmaceuticoController@create')->name('farmaceuticos.index');
Route::get('/farmaceuticos/create', '\App\Http\Controllers\FarmaceuticoController@store')->name('farmaceuticos.create');
Route::post('/farmaceuticos/store', '\App\Http\Controllers\FarmaceuticoController@edit')->name('farmaceuticos.store');
Route::get('/farmaceuticos/{id}/edit', '\App\Http\Controllers\FarmaceuticoController@update')->name('farmaceuticos.edit');
Route::put('/farmaceuticos/{id}', '\App\Http\Controllers\FarmaceuticoController@delete')->name('farmaceuticos.update');
Route::delete('/farmaceuticos/{id}/delete', '\App\Http\Controllers\UnidadesController@delete')->name('farmaceuticos.delete');

Route::get('/unidades', '\App\Http\Controllers\UnidadesController@index')->name('unidades.index');
Route::get('/unidades/create', '\App\Http\Controllers\UnidadesController@create')->name('unidades.create');
Route::post('/unidades/store', '\App\Http\Controllers\UnidadesController@store')->name('unidades.store');
Route::get('/unidades/{id}/edit', '\App\Http\Controllers\UnidadesController@edit')->name('unidades.edit');
Route::put('/unidades/{id}', '\App\Http\Controllers\UnidadesController@update')->name('unidades.update');
Route::delete('/unidades/{id}/delete', '\App\Http\Controllers\UnidadesController@delete')->name('unidades.delete');

Route::get('/pessoas', 'app\Http\Controllers\PessoaController@index')->name('pessoas.index');
Route::get('/pessoas/create', 'app\Http\Controllers\PessoaController@create')->name('pessoas.create');
Route::post('/pessoas', 'app\Http\Controllers\PessoaController@store')->name('pessoas.store');
Route::get('/pessoas/{id}/edit', 'app\Http\Controllers\PessoaController@edit')->name('pessoas.edit');
Route::put('/pessoas/{id}', 'app\Http\Controllers\PessoaController@update')->name('pessoas.update');
Route::delete('/pessoas/{id}', 'app\Http\Controllers\PessoaController@delete')->name('pessoas.delete');

Route::get('/solicitacoes', '\App\Http\Controllers\SolicitacaoController@index')->name('solicitacoes.index');
Route::get('/solicitacoes/create', '\App\Http\Controllers\SolicitacaoController@create')->name('solicitacoes.create');
Route::post('/solicitacoes/store', '\App\Http\Controllers\SolicitacaoController@store')->name('solicitacoes.store');
Route::get('/solicitacoes/{id}', '\App\Http\Controllers\SolicitacaoController@show')->name('solicitacoes.show');
Route::get('/solicitacoes/{id}/edit', '\App\Http\Controllers\SolicitacaoController@edit')->name('solicitacoes.edit');
Route::put('/solicitacoes/{id}', '\App\Http\Controllers\SolicitacaoController@update')->name('solicitacoes.update');
Route::delete('/solicitacoes/{id}', '\App\Http\Controllers\SolicitacaoController@destroy')->name('solicitacoes.destroy');

Route::get('/solicitacao-itens', 'SolicitacaoItemController@index')->name('solicitacao-itens.index');
Route::get('/solicitacao-itens/create', 'SolicitacaoItemController@create')->name('solicitacao-itens.create');
Route::post('/solicitacao-itens', 'SolicitacaoItemController@store')->name('solicitacao-itens.store');
Route::get('/solicitacao-itens/{id}', 'SolicitacaoItemController@show')->name('solicitacao-itens.show');
Route::get('/solicitacao-itens/{id}/edit', 'SolicitacaoItemController@edit')->name('solicitacao-itens.edit');
Route::put('/solicitacao-itens/{id}', 'SolicitacaoItemController@update')->name('solicitacao-itens.update');
Route::delete('/solicitacao-itens/{id}', 'SolicitacaoItemController@destroy')->name('<solicitacao-itens.destroy');

Route::get('/testescalculos', function(){
    return view('testescalculos');
})->name('testescalculos');

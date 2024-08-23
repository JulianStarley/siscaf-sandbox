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

Route::get('/medicamentos', function(){
    return view('medicamentos');
})->name('medicamentos');

Route::get('/farmaceuticos', function(){
    return view('farmaceuticos');
})->name('farmaceuticos');

Route::get('/unidades', function(){
    return view('unidades');
})->name('unidades');

Route::get('/testescalculos', function(){
    return view('testescalculos');
})->name('testescalculos');

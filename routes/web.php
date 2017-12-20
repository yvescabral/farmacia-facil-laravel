<?php

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

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::post('/adicionar-ao-carrinho/{id}', 'HomeController@adicionarAoCarrinho')->name('adicionar-ao-carrinho');
Route::post('/remover-do-carrinho/{id}', 'HomeController@removerDoCarrinho')->name('remover-do-carrinho');
Route::get('finalizar', 'HomeController@finalizar')->name('finalizar');

Route::resource('laboratorios', 'LaboratorioController');

Route::resource('medicamentos', 'MedicamentoController');
Route::resource('vendas', 'VendaController')->only(['index']);
Route::resource('usuarios', 'UserController');

Route::get('language/{language}', 'LocaleController@change')->name('language')->where('language', '(pt\-br|en)');

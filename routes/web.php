<?php

use App\Produto;
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
Route::get('home', 'HomeController@index')->middleware('auth');

Route::get('/', "ProdutoController@lista");
Route::get('/produtos/novo', "ProdutoController@novo");
Route::get('/produtos/json', "ProdutoController@listaJson");
Route::post('/produtos/adiciona', "ProdutoController@adiciona");
Route::get('/produtos/editar/{id}', "ProdutoController@editar");
Route::post('/produtos/store/{id}', "ProdutoController@store");
Route::get('/produtos/mostra/{id}', "ProdutoController@mostra")->where('id', '[0-9]+');
Route::get('produtos/remove/{id}', 'ProdutoController@remove');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

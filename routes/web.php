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


Route::get('/', function () {
    return view('layout/principal');

});

Route::get('/integrantes', 'ProdutoController@integrantes');

Route::get('/produtos', 'ProdutoController@lista');    //return view('welcome');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::match(array('GET', 'POST'), '/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id','[0-9]+');

Route::get('/produtos/edit/{id}', 'ProdutoController@edit');

Route::match(array('GET', 'POST'),'/produtos/update/{id}', 'ProdutoController@update');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () 
{
    return '<h1>Primeira lógica com laravel</h1>';
});

Route::get('/', function () 
{
    return view('welcome');
});   

//Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos', [
	'as' => 'lista',
	'uses' => 'ProdutoController@lista' 
]);

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');

Route::get('/produtos/edita/{id}', 'ProdutoController@edita')->where('id', '[0-9]+');

Route::post('/produtos/atualiza', 'ProdutoController@atualiza');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/login', 'LoginController@login');

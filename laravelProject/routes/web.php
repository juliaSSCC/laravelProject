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

Route::view('/', '/login');
Route::view('/cadastro','/cadastro');
Route::view('/index','PagesController@index');
Route::get('cadastrar','PagesController@store');
Route::get('entrar','PagesController@entrar');
Route::get('/index','PagesController@index');
Route::get('editar/{login}','PagesController@edit');

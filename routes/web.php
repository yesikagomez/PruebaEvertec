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

Route::get('/', 'PagesController@orden')->name('orden');

Route::get('listaorden', 'PagesController@lista')->name('lista');

Route::get('resumenorden/{id}', 'PagesController@resumen')->name('resumen');

Route::get('estadoorden', 'PagesController@estado')->name('estado');

Route::post('/','PagesController@crear')->name('crear');

Route::get('editar/{id}', 'PagesController@editar')->name('editar');

Route::put('editar/{id}', 'PagesController@update')->name('update');

Route::delete('eliminar/{id}','PagesController@eliminar')->name('eliminar');

Route::get('orden/{id}','JsonController@jsonorden')->name('jsorden');

Route::get('respuesta/{id}','JsonController@respuesta')->name('respuesta');



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

Route::resource('/', 'InicioController');
Route::any('/federaciones/{id_producto?}', 'CooperativaController@federaciones');
Route::resource('/actividades', 'CooperativaController');



<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('autenticar', 'AutenticacionController@autenticar');
Route::post('registrar', 'AutenticacionController@registrar');
Route::get('listar-cooperativas-json', 'CooperativaController@getCooperativasJson');
Route::group( ['middleware' => 'jwt-auth'], function (){
    Route::resource('post', 'PostController');
    Route::post('file', 'PostController@storageFile');
    Route::post('subir-imagenes-cooperativa', 'PostController@subirImagenesCooperativa');
    Route::get('paginate-post', 'PostController@paginatePost');
    // CUSTOM POSTs
    Route::get('first-page-posts', 'PostController@firstPagePosts');
});

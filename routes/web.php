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

Route::get('/', 'UserController@index');



/*
|--------------------------------------------------------------------------
| Evaluado
|--------------------------------------------------------------------------
|
*/
Route::get ('/evaluado', 'EvaluadoController@index');
Route::get ('/test', 'EvaluadoController@historial');
Route::get ('/report', 'EvaluadoController@reporte');

/*
|--------------------------------------------------------------------------
| Super administrador
|--------------------------------------------------------------------------
|
*/
Route::get ('/super_administrador', 'Super_administrador@index');
Route::post('/super_administrador/guardar_periodo', 'Super_administrador@guardar_periodo');

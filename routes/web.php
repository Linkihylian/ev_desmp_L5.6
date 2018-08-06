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
| Super administrador
|--------------------------------------------------------------------------
|
*/

Route::get ('/super_administrador', 'Super_administrador@index');
Route::get ('/super_administrador/configurar_evaluacion', 'Super_administrador@conf_ev');
Route::post('/super_administrador/guardar_periodo', 'Super_administrador@guardar_periodo');
Route::get('/super_administrador/configurar_excepcional', 'Super_administrador@configurar_excepcional');


/*
|--------------------------------------------------------------------------
| Devuelve el manual de las ODI
|--------------------------------------------------------------------------
*/
Route::get ('normas.pdf', function(){
  return response()->file( base_path("documentacion/NORMATIVA ODI.pdf") );
});

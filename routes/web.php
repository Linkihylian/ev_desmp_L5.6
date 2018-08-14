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

Route::get('/', 'LoginController@index');
Route::get('/inicio', 'UserController@index');

/*
|--------------------------------------------------------------------------
| Evaluador
|--------------------------------------------------------------------------
|
*/
Route::get('/evaluador', 'EvaluadorController@index');
Route::get('/evaluador/crear_odi', 'EvaluadorController@odi');

/*
|--------------------------------------------------------------------------
| Super administrador
|--------------------------------------------------------------------------
|
*/

Route::get ('/super_administrador/normas', 'Super_administrador@index');
Route::post('/super_administrador/guardar_periodo', 'Super_administrador@guardar_periodo');

Route::get  ('/super_administrador/evaluacion/configurar_rango_actuacion', 'Super_administrador@configurar_rango_actuacion');
Route::post ('/super_administrador/evaluacion/configurar_rango_actuacion/consultar_todo/{id}', 'Rango_actuacion@consultar_todo');
Route::post ('/super_administrador/evaluacion/configurar_rango_actuacion/guardar', 'Rango_actuacion@guardar');
Route::post ('/super_administrador/evaluacion/configurar_rango_actuacion/modificar', 'Rango_actuacion@modificar');

Route::get  ('/super_administrador/evaluacion/configurar_excepcional', 'Super_administrador@configurar_excepcional');
Route::post ('/super_administrador/evaluacion/configurar_excepcional/consultar', 'Excepcional@consultar_todo');
Route::post ('/super_administrador/evaluacion/configurar_excepcional/guardar', 'Excepcional@guardar');


Route::get ('/super_administrador/evaluacion/configurar_evaluacion', 'Super_administrador@conf_ev');
Route::get ('/super_administrador/evaluaciones_realizadas', 'Super_administrador@evaluaciones_realizadas');
Route::get ('/super_administrador/reportes/inicio', 'Super_administrador@reportes');
Route::get ('/super_administrador/reportes/dir_of', 'Super_administrador@reportes_dir_of');
Route::get ('/super_administrador/reportes/personal', 'Super_administrador@reportes_personal');
Route::get ('/super_administrador/auditoria/odi', 'Super_administrador@auditoria_odi');


/*
|--------------------------------------------------------------------------
| Devuelve el manual de las ODI
|--------------------------------------------------------------------------
*/
Route::get ('normas.pdf', function(){
  return response()->file( base_path("documentacion/NORMATIVA ODI.pdf") );
});

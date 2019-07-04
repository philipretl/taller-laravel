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

Route::get('/', function () { // es la que va a ver el navegador
    return view('index');
})->name('index'); //esta es la ruta dentro de nuestro proyecto un alias
  //no sirve para saber como se debe mover nuestra aplicación



Route::prefix('admin')->group(function(){

  Route::view('/crearInstitucion','crearInstitucion')->name('createInstitution');

  Route::get('/listarInstituciones','Admin\InstitucionController@index')->name('listarInstituciones');

  Route::post('/registrarInstitucion','Admin\InstitucionController@store')->name('registrarInstitucion');
  // [tipo de ruta] [nombre para el navegador] [Ruta del controlador] @ [metodo a usar] [alias para el programador]

  Route::get('/editarInstitucion/{id}','Admin\InstitucionController@edit')->name('editarInstitucion');

  Route::put('/actualizarInstitucion/','Admin\InstitucionController@update')->name('actualizarInstitucion');

  Route::delete('/eliminarInstitucion', 'Admin\InstitucionController@delete')->name('eliminarInstitucion');

  //Rutas de los docentes

  Route::get('/crearDocente','Admin\DocenteController@create')->name('crearDocente');
  Route::post('/registrarDocente','Admin\DocenteController@store')->name('registrarDocente');



});

/*Route::prefix('/admin')->group(function(){


});*/

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
})->name('/'); //esta es la ruta dentro de nuestro proyecto un alias

Route::get('/crearInstitucion', function () {
    return view('crearInstitucion');
})->name('/crearInstitucion');

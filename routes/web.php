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

Route::get('/', function () {
    return view('welcome');
});

/*
| ----------------------------------------------------------------------
|Rutas para controlador de bloques
|_______________________________________________________________________
| Aqui definimos la ruta para el controlador de la vista de los bloques
|
|
*/
Route::resource('bloques','BlockController');
Route::post('/ejecucion','BlockController@execute');
/*
| ----------------------------------------------------------------------
|Rutas para controlador de ayuda
|_______________________________________________________________________
| Aqui definimos la ruta para el controlador de la vista de ayuda
|
|
*/
Route::resource('introduccion','AyudaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('usuarios','UsuarioController'); 

Route::get('/search', 'UsuarioController@search');

Route::resource('proyectos','ProyectosController');
/*

| ----------------------------------------------------------------------
|Rutas para controlador de Roles
|_______________________________________________________________________
| Aqui definimos la ruta para el controlador de la vista de Roles
|
|
*/
Route::resource('Roles','RolesController');
Route::post('/Roles/store', 'RolesController@store');

/*Route::get('Roles',  function () {
    return "Probando";
});
*/

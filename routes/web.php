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

//use Illuminate\Routing\Route;
//use Illuminate\Support\Facades\Route;

Route::get('/', 'InicioController@index');

/* CATEGORIAS */
Route::get('categorias/crear', 'CategoriasController@nuevo')->name('nueva_categoria');;
Route::post('categorias', 'CategoriasController@grabar')->name('guardar_categoria');

Route::get('categorias', 'CategoriasController@index')->name('categorias');

Route::POST('categorias/editar','CategoriasController@modificar')->name('editar_categoria');

Route::POST('categorias/eliminar','CategoriasController@eliminar')->name('eliminar_categoria');
Route::GET('categorias/ver','CategoriasController@ver')->name('ver_categ');



//Route::get('categorias/borrar','CategoriasController@eliminar');

/* MARCAS */
Route::get('marcas/crear', 'MarcasController@nuevo')->name('nueva_marca');
Route::post('marcas', 'MarcasController@grabar')->name('guardar_marca');

Route::get('marcas', 'MarcasController@index')->name('marcas');

Route::POST('marcas/editar','MarcasController@modificar')->name('editar_marca');

Route::POST('marcas/eliminar','MarcasController@eliminar')->name('eliminar_marca');
Route::GET('marcas/ver','MarcasController@ver')->name('ver_marca');

/* PROVEEDORES */
Route::get('provee/crear', 'ProveeController@nuevo')->name('nuevo_provee');
Route::post('provee', 'ProveeController@grabar')->name('guardar_provee');

Route::get('provee', 'ProveeController@index')->name('provee');

Route::POST('provee/editar','ProveeController@modificar')->name('editar_provee');

Route::GET('provee/ver','ProveeController@ver')->name('ver_provee');
Route::POST('provee/eliminar','ProveeController@eliminar')->name('eliminar_provee');

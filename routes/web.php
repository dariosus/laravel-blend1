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

Route::get("/buscador", "PeliculasController@buscar");

Route::get("/agregarPelicula", "PeliculasController@agregar");
Route::post("/agregarPelicula", "PeliculasController@almacenar");

Route::get('/', function () {
    return view('welcome');
});

Route::get("/bienvenidos", function() {
  return "Bienvenidos a todos";
});

Route::get("/peliculas", "PeliculasController@listado");

Route::get("/peliculas/{id}", "PeliculasController@detalle");

Route::get("generos", "GenerosController@listado")->middleware("ejemplo");
Route::get("generos/{id}", "GenerosController@detalle")->middleware("ejemplo");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

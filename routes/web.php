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

Route::get("/bienvenidos", function() {
  return "Bienvenidos a todos";
});

Route::get("/peliculas", function() {
  $peliculas = [
    0 => [
      "title" => "Harry Potter",
      "rating" => 7.6
    ],
    1 => [
      "title" => "Toy Story",
      "rating" => 8.5
    ]
  ];

  $vac = compact("peliculas");
  return view("peliculas", $vac);
});

Route::get("/peliculas/{id}", function($id) {
  $vac = compact("id");
  return view("detallePelicula", $vac);
  /* return view("detallePelicula", [
      "id" => $id,
      "titulo" => 57
    ]);
  */
});

Route::get("generos", function() {
  return "Generos";
});

Route::get("/agregarPelicula", function() {
  return view("agregarPelicula");
});

Route::post("/agregarPelicula", function() {
  return "Agregar pelí por POST";
});

Route::get("/generos", function() {
  $generos = [
    0 => [
      "id" => 1,
      "name" => "Drama"
    ],
    1 => [
      "id" => 2,
      "name" => "Comedia"
    ]
  ];
  $vac = compact("generos");
  return view("listadoGeneros", $vac);
});

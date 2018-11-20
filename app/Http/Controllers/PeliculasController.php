<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;

class PeliculasController extends Controller
{
    public function listado() {
      $peliculas = Pelicula::all();

      $vac = compact("peliculas");

      return view("peliculas", $vac);
    }

    public function buscar(Request $req) {
      $buscar = $req["buscador"];

      $peliculas = Pelicula::where("title", "like", "%$buscar%")
        ->orderBy("title")
        ->get();

      $vac = compact("peliculas");

      return view("peliculas", $vac);
    }

    public function agregar() {
      $generos = Genero::all();

      return view("agregarPelicula", compact("generos"));
    }

    public function almacenar(Request $req) {
      $pelicula = new Pelicula();

      $pelicula->title = $req["title"];
      $pelicula->awards = $req["awards"];
      $pelicula->rating = $req["rating"];
      $pelicula->release_date = $req["date"];
      $pelicula->length = $req["length"];
      $pelicula->genre_id = $req["genero"];

      $pelicula->save();

      return redirect("/peliculas");
    }
}

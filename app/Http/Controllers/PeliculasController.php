<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;
use Auth;

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

      if (!Auth::check()) {
        return redirect("/register");
      }

      $generos = Genero::all();

      return view("agregarPelicula", compact("generos"));
    }

    public function almacenar(Request $req) {
      if (Auth::user() == null) {
        return redirect("/register");
      }


      $pelicula = new Pelicula();

      $this->validate($req, [
        "titulo" => "required|string|min:3|max:100|unique:movies,title",
        "awards" => "required|integer|min:0",
        "rating" => "required|numeric|min:0|max:10",
        "date" => "required|date",
        "length" => "required|numeric|min:0"
      ], [
        "required" => "El campo :attribute debe ser completado",
        "max" => "El campo :attribute tiene un máximo de :max"
      ]);

      $pelicula->title = $req["titulo"];
      $pelicula->awards = $req["awards"];
      $pelicula->rating = $req["rating"];
      $pelicula->release_date = $req["date"];
      $pelicula->length = $req["length"];
      $pelicula->genre_id = $req["genero"];

      $pelicula->save();

      return redirect("/peliculas");
    }

    public function detalle($id) {
      $pelicula = Pelicula::find($id);

      return view("detallePelicula", compact("pelicula"));
    }

    public function apiListado() {
      return Pelicula::all();
    }
}

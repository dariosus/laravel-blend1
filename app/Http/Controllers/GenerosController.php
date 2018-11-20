<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GenerosController extends Controller
{
    public function listado() {
      $generos = Genero::all();

      $vac = compact("generos");

      return view("listadoGeneros", $vac);
    }

    public function detalle($id) {
      $genero = Genero::findOrFail($id);

      $vac = compact("genero");

      return view("detalleGenero", $vac);
    }
}

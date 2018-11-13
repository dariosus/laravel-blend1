@extends("plantilla")

@section("titulo")
  Listado de generos
@endsection

@section("css")
  <link rel="stylesheet" href="/css/genero.css">
@endsection

@section("contenido")
  <h1>Mis generos</h1>
  <ul>
    @foreach ($generos as $genero)
      <li>
        {{$genero["name"]}}
      </li>
    @endforeach
  </ul>
@endsection

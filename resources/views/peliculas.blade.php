@extends("plantilla")

@section("titulo")
  Listado de películas
@endsection

@section("contenido")
  <h1>Mis Películas</h1>
  <ul>
    @foreach ($peliculas as $pelicula)
      <li>
        <a href="/peliculas/{{$pelicula->id}}">
          {{$pelicula["title"]}}
        </a>
      </li>
    @endforeach
  </ul>
@endsection

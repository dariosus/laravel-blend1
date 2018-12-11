@extends("plantilla")

@section("js")
  <script type="text/javascript" src="/js/peliculas.js">

  </script>
@endsection

@section("titulo")
  Listado de películas
@endsection

@section("contenido")
  <h1>Mis Películas</h1>
  <h2 style="background-color:green;display:none">Hay nuevas películas</h2>
  <ul class="peliculas">
    @foreach ($peliculas as $pelicula)
      <li>
        <a href="/peliculas/{{$pelicula->id}}">
          {{$pelicula["title"]}}
        </a>
      </li>
    @endforeach
  </ul>
@endsection

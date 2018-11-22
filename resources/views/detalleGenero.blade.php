@extends("plantilla")

@section("contenido")
    <h1>Me pediste el genero {{$genero->name}}</h1>

    <h2>Ranking: {{$genero->ranking}}</h2>

    <ul>
        @forelse($genero->peliculas()->orderBy("title")->get() as $pelicula)
          <li>
            <a href="/peliculas/{{$pelicula->id}}">
              {{$pelicula->title}}
            </a>
          </li>
        @empty
          <p>El género no tiene películas</p>
        @endforelse
    </ul>

@endsection

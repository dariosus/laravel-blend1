@extends("plantilla")

@section("contenido")
    <h1>Me pediste la película {{$pelicula->title}}</h1>
    <ul>
      <li>Rating: {{$pelicula->rating}}</li>
      <li>Premios: {{$pelicula->awards}}</li>
      <li>
        <a href="/generos/{{$pelicula->genre_id}}">
          Genero: {{$pelicula->genero->name}}
        </a>
      </li>
    </ul>
@endsection

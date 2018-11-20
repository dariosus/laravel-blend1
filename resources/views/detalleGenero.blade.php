@extends("plantilla")

@section("contenido")
    <h1>Me pediste el genero {{$genero->name}}</h1>

    <h2>Ranking: {{$genero->ranking}}</h2>
@endsection

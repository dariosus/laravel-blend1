@extends("plantilla")

@section("contenido")
    <h1>Agregar película</h1>
    <form class="" action="/agregarPelicula" method="post">
      {{ csrf_field() }}
      <div class="">
        <label for="">Titulo:</label>
        <input type="text" name="title" value="">
      </div>
      <div class="">
        <label for="">Rating:</label>
        <input type="text" name="rating" value="">
      </div>
      <div class="">
        <label for="">Premios:</label>
        <input type="text" name="awards" value="">
      </div>
      <div class="">
        <label for="">Fecha de estreno:</label>
        <input type="date" name="date" value="">
      </div>
      <div class="">
        <label for="">Duracion:</label>
        <input type="text" name="length" value="">
      </div>
      <div class="">
        <label for="">Género:</label>
        <select class="" name="genero">
          @foreach ($generos as $genero)
            <option value="{{$genero->id}}">
              {{$genero->name}}
            </option>
          @endforeach
        </select>
      </div>
      <div class="">
        <input type="submit" name="" value="Agregar película">
      </div>
    </form>
@endsection

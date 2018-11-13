<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Mis películas</h1>
    <ul>
      @forelse ($peliculas as $pelicula)
        <li>
          <p>{{$pelicula["title"]}}</p>
          @if ($pelicula["rating"] > 8)
            <p>Recomendada</p>
          @endif
        </li>
      @empty
        <h2>Perdón, pero no hay películas</h2>
      @endforelse
    </ul>
  </body>
</html>

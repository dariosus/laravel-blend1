<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield("titulo")
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/estilos.css">
    @yield("css")
  </head>
  <body>
    <div class="container">
      <header>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/peliculas">Películas</a></li>
          <li><a href="/generos">Generos</a></li>
          <li><a href="/actores">Actores</a></li>
        </ul>
        <form class="" action="/buscador" method="GET">
          {{ csrf_field() }}
          <input type="text" name="buscador" value="">
          <input type="submit" name="" value="Buscar">
        </form>
      </header>
      @yield("contenido")
      <footer>
        Digital House, 2018
      </footer>
    </div>
  </body>
</html>

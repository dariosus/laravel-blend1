@extends("plantilla")

@section("titulo")
  Prueba JS
@endsection

@section("contenido")
  <h1>Mis colores</h1>
  <div style="overflow:hidden">
    <div color="red" class="red boton" style="margin-right:10px;float:left;width:80px;height:80px;margin-top:20px;">

    </div>
    <div color="blue" class="blue boton" style="margin-right:10px;float:left;width:80px;height:80px;margin-top:20px;">

    </div>
    <div color="green" class="green boton" style="margin-right:10px;float:left;width:80px;height:80px;margin-top:20px;">

    </div>
    <div color="yellow" class="yellow boton" style="margin-right:10px;float:left;width:80px;height:80px;margin-top:20px;">

    </div>
    <p class="oculto">Sorpresa!</p>
  </div>
  <h3 class="oculto">Peliculas</h3>
  <ul class="peliculas">
  </ul>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
  
    <title>TOVO</title>

    <style>
      .card-title{

        font-size: 40px;
      }

      .card-text{

        font-size: 20px;
      }
    </style>

</head>


<body>
  @extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>

<div class="container">
  
  <div class="card mb-3" style="max-width: 8880px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('img/logo.png') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <br>
          <br>
          <h5 class="card-title">Sobre la aplicación</h5>
          <br>
          <p class="card-text">Esta aplicación trata de un espacio en donde los estudiantes podrán organizar una agenda con las tareas, proyectos, exposiciones y otras cosas referentes a las clases que tengan pendientes. 
          </p>
          <br>
          <p class="card-text">La aplicación es una idea innovadora que va a servir para ofrecer ayuda a los estudiantes.  
          </p>
        
        </div>
      </div>

    </div>
  </div>
</div>
<br>
<br>
<div class="container" >

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="img/mision.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Misión</h5>
        <p class="card-text">Ofrecer un servicio de calidad. Facilitar de manera real la vida de los estudiantes y aumentar su productividad y rendimiento en las clases. Crear un espacio seguro y personalizable para que cada estudiante pueda llevar un control de su vida académica.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/vision.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Visión</h5>
        <p class="card-text">Alcanzar nuestros objetivos a futuro para poder ayudar a los estudiantes en su formación. Esperando ejercer nuestras capacidades e ideas, ofreciendo un servicio de calidad y lleno de organización. </p>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/valores.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Valores</h5>
        <p class="card-text">

          
          
          Amabilidad
          <br>
          Responsabilidad
          <br>
          Respeto
          <br>
          Comodidad
          <br>
          Calidad de servicio
<br>
<br>
<br>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</body>

<br><br><br>


   
@endsection



</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('https://i.pinimg.com/564x/34/6a/1f/346a1f4363e1b59f6860fdce6abc1082.jpg') }}">
  
    <title>Biblioteca escolar</title>
    <style>

        .contenedor{
margin-top: 20px;
margin-left: 350px;


        }

        h2{

            text-align: center;
           background-color:rgb(255, 255, 255);
        }

    </style>
</head>

<body>
  @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
          
            </div>
        </div>
    </div>
    <h2>Beneficios de la lectura</h2>
    <br>
<div class="contenedor">
    <div id="carouselExampleCaptions" class="carousel slide" style="width: 1000px; height: 400px;">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://jupsin.com/wp-content/uploads/2021/04/Depositphotos_176048848_l-2015_Fotor-1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Aumenta la inteligencia</h5>
        <p>Una investigación publicada por la revista Child Development comprobó que la lectura aumenta la inteligencia.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/fotos-premium/concepto-aprendizaje-lectura-educacion-libro-abierto-o-biblia-escritorio_34048-1377.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Estimula la creatividad</h5>
        <p>Un estudio realizado por la Universidad de Toronto logró demostrar que leer estimula la creatividad de los lectores. Esto es algo que no es nuevo para quienes disfrutan del proceso de imaginar las situaciones de las que hablan los libros.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://josuebarrios.com/wp-content/uploads/2018/12/Plan-de-lectura-biblica.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> Ejercita la memoria</h5>
        <p>No estimular la memoria podría llevar a las personas a sufrir enfermedades neurodegenerativas y demencia. Sin embargo, si bien leer no cura estas enfermedades, ejercitar el cerebro a través de la lectura podría retrasar su aparición.</p>
      </div>

      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
<br>
<br>

  <a href="{{ route('home') }}" class="btn btn-primary">Ir a la página principal</a>
  
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@include('layouts.footer')
@endsection


</body>

</html>
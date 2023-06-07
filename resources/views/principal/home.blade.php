<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('https://i.pinimg.com/564x/34/6a/1f/346a1f4363e1b59f6860fdce6abc1082.jpg') }}">
    <title>Biblioteca escolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<style>

.img{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 90vh; 
}


</style>

  </head>

<body>


    
      


      

  
          @if (Auth::check() && Auth::user()->admin == 1)
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
        
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
         
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page"href="{{ route('librosindex.principal') }}">Control de compras</a>
                  <a class="nav-link active" aria-current="page"href="{{ route('prestamos.index') }}">Control de usuarios</a>
                 
      
      
      <h3>administrador</h3>

      

                </div>
              </div>
            </div>
          </nav>
  
      @elseif (Auth::check())

      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
     
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page"href="{{ route('solicitar') }}">Lista de tareas</a>
              <a class="nav-link active" aria-current="page"href="{{ route('solicitar') }}">Calendario</a>
              <a class="nav-link active" aria-current="page"href="{{ route('solicitar') }}">Compra</a>
  
  <h3>usuario</h3>
  
            </div>
          </div>
        </div>
      </nav>
         

      @endif


  <br>
<br>
<br>
@extends('layouts.footer')
</body>
</html>
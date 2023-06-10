<html>
  <head>
    @extends('layouts.app')

    @section('content')
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

    body{
      font-family: 'Exo', sans-serif;
      background-color: #E3F2FD;
    }
    .conte{

      padding-left: 50px;
      width: 500px;
    }
   
    .conte2{

padding-left: 110px;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>

  </head>
  <body>

 
<br>
<br>

    <div class="container">
      <br>
      <br>
      <br>
      
          <div class="card mb-3" style="max-width: 100000px;">
            <div class="row g-0">
              <div class="col-md-4">
                <br>
               <br>
              <br>
              
              <div class="conte">
               
                <img src="{{ asset('img/fondoevent.png') }}" class="img-fluid rounded-start" alt="...">          </div>
              </div>
                <br>
              <br>
          <br><br>
                <div class="col-md-8">
                <div class="card-body">
                  <div class="container">
     <br>
     <br>
     <br>         
      <div class="conte2">
      <h2>Detalles del evento</h2>
      <hr>


      <div class="col-md-6">
        <form action="{{ route('eventos.delete', ['id' => $event->id]) }}" method="post">
          @method('DELETE')
          @csrf
      
          <div class="form-group">
            <h5>Nombre del evento</h5>
            {{ $event->Nombre }}
          </div>
          <div class="form-group">
            <h5>Descripción del Evento</h5>
            {{ $event->Descripcion }}
          </div>
          <div class="form-group">
            <h5>Fecha</h5>
            {{ $event->Fecha }}
          </div>
          <br>
   
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este evento?')">Eliminar evento</button>
        </form>
        <br>
      

        <a class="btn btn-default"  href="{{ asset('/calendario') }}"> Volver atrás</a>
        <br>
        <br>
        <br>
        
      </div>
      

    </div>


    </div>

        </div>

 
@endsection
  </body>
</html>
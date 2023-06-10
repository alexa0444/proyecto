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
  
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
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
<br>
    <div class="container">
  <br>
  <br>
      <div class="card mb-3" style="max-width: 100000px;">
        <div class="row g-0">
          <div class="col-md-4">
            <br>
     
          
            <img src="{{ asset('img/fondoform.jpg') }}" class="img-fluid rounded-start" alt="...">          </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="col-md-8">
            <div class="card-body">
              <div class="container">
                <div style="height:50px"></div>
             
          
                <h2>Crea tu evento</h2>
             
                <hr>
          
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                   <button type="button" class="close" data-dismiss="alert">×</button>
                   <ul>
                    @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                    @endforeach
                   </ul>
                  </div>
                 @endif
                 @if ($message = Session::get('success'))
                 <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                 </div>
                 @endif
          
          
                <div class="col-md-6">
                  <form action="{{ asset('/calendario/create') }}" method="post">
                    @csrf
                    <div class="fomr-group">
                      <label>Nombre del evento</label>
                      <input type="text" class="form-control" name="Nombre">
                    </div>
                    <div class="fomr-group">
                      <label>Descripcion del Evento</label>
                      <input type="text" class="form-control" name="Descripcion">
                    </div>
                    <div class="fomr-group">
                      <label>Fecha</label>
                      <input type="date" class="form-control" name="Fecha">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-info" value="Guardar">
                    
                    <br>
                    <br>
                  </form>
                  <br>
                  <a class="btn btn-default"  href="{{ asset('/calendario') }}">Volver atrás</a>
                </div>
          
              </div> 
          
              </div>
            </div>
          </div>
      
            </div>
          </div>
    
        </div>
      </div>
      <br>
      <br>
    </div>
    <
    
@endsection
  </body>
</html>
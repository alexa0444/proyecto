<html>
  <head>



    <title></title>
    <meta content="">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
    <title>TOVO</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    
    .header-col{
      background: rgb(128, 201, 212) ;
      color:#ffffff;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: rgb(128, 201, 212)  ;
      color:rgb(255, 255, 255);
    }
 
    .box-day{
      border:1px solid  #E1F5FE;
      height:150px;
    }

    /* background: rgb(218, 238, 241); */
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: rgb(218, 238, 241);
    }
    </style>

  </head>
  <body>

    <div class="container">
      <div style="height:50px"></div>
   
      <p class="lead">
      <h1>Calendario de eventos</h1>
      <a style="background-color: rgb(128, 201, 212); color: white;" class="btn"  href="{{ asset('/calendario/form') }}">Crear un evento</a>


      <hr>

      <div class="row header-calendar"  >

        <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
          <a  href="{{ asset('/Evento/index/') }}/<?= $data['last']; ?>" style="margin:10px;">
            <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
          </a>
          <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
          <a  href="{{ asset('/Evento/index/') }}/<?= $data['next']; ?>" style="margin:10px;">
            <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
          </a>
        </div>

      </div>
      <div class="row">
        <div class="col header-col">Lunes</div>
        <div class="col header-col">Martes</div>
        <div class="col header-col">Miércoles</div>
        <div class="col header-col">Jueves</div>
        <div class="col header-col">Viernes</div>
        <div class="col header-col">Sábado</div>
        <div class="col header-col">Domingo</div>
      </div>
 
      @foreach ($data['calendar'] as $weekdata)
        <div class="row">
        
          @foreach  ($weekdata['datos'] as $dayweek)

          @if  ($dayweek['mes']==$mes)
            <div class="col box-day">
              {{ $dayweek['dia']  }}

              @foreach  ($dayweek['evento'] as $event) 
                  <a style="background-color: rgb(208, 234, 255); color: rgb(0, 0, 0); font-size: 13px;" class="badge badge-primary" href="{{ asset('/Evento/details/') }}/{{ $event->id }}">
                 
                    {{ $event->Nombre }}
                  </a>
              @endforeach
            </div>
          @else
          <div class="col box-dayoff">
          </div>
          @endif


          @endforeach
        </div>
      @endforeach

      <br>
      <br>
      <a class="btn btn-primary"  href="{{ asset('/home') }}">Ir a la página principal</a>
      <br>
      <br>
    </div>

    

  </body>
</html>
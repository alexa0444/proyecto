
    <!DOCTYPE html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
<link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
<html>
    <head>

        
        <title>TOVO</title>
        <style>
            .tarjeta {
                width: 40rem;
                margin-bottom: 20px;
                margin-left:6px; 

              
            }

     
        </style>
    </head>
    <body>

        
    @extends('layouts.app')
    @section('content')
        <center><h1>Vista semanal</h1></center>
        <br>
        <br>
 

        <div class="row">
            @foreach($diasSemana as $index => $dia)
                <div class="col">
                    <div class="card tarjeta">
                        <div class="card-body" style=" font-size: 16px; background: rgb(218, 238, 241)">
                            
                            <center><h2 class="card-header" style="background:  rgb(128, 201, 212); color: white;">{{ $dia }}</h2></center><br>
                            <h3>{{ $fechasSemana[$index]->toDateString() }}</h3>
    
                            <form action="{{ route('vistasemanal.agregar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="fecha" value="{{ $fechasSemana[$index]->toDateString() }}">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Añadir tarea" name="nombre" required>
                                    <label for="floatingInput">Añadir tarea</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="time" class="form-control" id="floatingStartTime" placeholder="Hora de inicio" name="hora_inicio" required>
                                    <label for="floatingStartTime">Hora de inicio</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="time" class="form-control" id="floatingEndTime" placeholder="Hora de fin" name="hora_fin" required>
                                    <label for="floatingEndTime">Hora de fin</label>
                                </div>
                                <button style="background-color: white" class="btn" type="submit">Agregar tarea</button>
                            </form>
                            
                            <ul>
                                @foreach($vistaS->getTareas($fechasSemana[$index]->toDateString()) as $tarea)
                                    <br>
                                    <li>{{ $tarea->nombre }} - {{ date('H:i', strtotime($tarea->hora_inicio)) }} hasta {{ date('H:i', strtotime($tarea->hora_fin)) }}
                                        <form action="{{ route('vistasemanal.completar', $tarea->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button style="background-color: rgb(255, 255, 255)" class="btn" type="submit"> Marcar como completada</button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
 
                        </div>
                    </div>


                </div>
            @endforeach


            
        </div>
        <br>
        <br>
        <a class="btn btn-primary"  href="{{ asset('/home') }}">Ir a la página principal</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    @endsection
    </body>
    </html>
    

    <!DOCTYPE html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
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
        <br>
    
        <div class="row">
            @foreach($diasSemana as $index => $dia)
                <div class="col">
                    <div class="card tarjeta">
                        <div class="card-body">
                            <h2 class="card-title">{{ $dia }}</h2>
                            <h3>{{ $fechasSemana[$index]->toDateString() }}</h3>
    
                            <form action="{{ route('vistasemanal.agregar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="fecha" value="{{ $fechasSemana[$index]->toDateString() }}">
                                <input type="text" name="nombre" placeholder="Añadir tarea" required>
                                <button type="submit">Agregar tarea</button>
                            </form>
    
                            <ul>
                                @foreach($vistaS->getTareas($fechasSemana[$index]->toDateString()) as $tarea)
                                    <li>{{ $tarea->nombre }} 
                                        <form action="{{ route('vistasemanal.completar', $tarea->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Marcar como completada</button>
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
    
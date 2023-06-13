<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>

    <style>
        .precio{
            color: red;
        }

        .card-title{
            text-align: center
        }
    </style>

    
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <div class="container"><h1 style="text-align: center">Nuestros Productos</h1><br><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
            
            use Illuminate\Support\Facades\DB;

             //Obtener los registros de la base de datos
            $productos = DB::table('productos')->get();

              //Generar las tarjetas de Bootstrap
            foreach ($productos as $producto) {
                $nombre = $producto->nombre;
                $imagen = $producto->imagen;
                $cantidad = $producto->cantidad;
                $precio = $producto->precio;

            //Generar el HTML de la tarjeta
            
              echo '<div class="producto' . $producto->id . '">';
              echo '<div class="col">';
              echo '<div class="card h-100">';
              echo '<img src="' . asset('storage/' . $producto->imagen) . '" class="card-img-top" height="465px" >';
              echo '<div class="card-body">';
              echo '<h4 class="card-title">' . $producto->nombre . '</h4>';
              echo '<br>';
              echo '<h5 class="cantidad">Disponibles ' . $producto->cantidad . '</h5>';
              echo '<h5 class="precio">Precio $' . $producto->precio . '</h5>';
              echo '<br>';
              echo '<center>';
                echo '<a href="'. route('compra.create') .'">';


              echo '<botton class="btn btn-success">COMPRAR</botton>';
              echo '</a>';
              echo '</center>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              
        }
        
        ?>
        
        </div>
  </div>

    @endsection
    
</body>
</html>
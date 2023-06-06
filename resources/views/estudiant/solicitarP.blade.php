<!-- resources/views/prestamo/form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Solicitud de Préstamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<style>

    h2{

        text-align: center;
        text-decoration-style: double;

     
    }

    body{
        background-color: rgba(162, 208, 221, 0.881);
    }
</style>
</head>
<body>
    <br>
    <br>
    <h2>Solicitud de Préstamo</h2>
<br>
<br>
<br>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

        
    
    
       <div class="container">
    <form method="POST" action="{{ route('guardar_prestamo') }}">
        @csrf

        <label for="ID_libro">Datos del libro</label>
        <select name="ID_libro" id="ID_libro"  class="form-control" required onchange="actualizarNombreLibro()">
            <option value="">Selecciona un libro</option>
            @foreach($librosDisponibles as $libro)
                <option value="{{ $libro->id }}">{{ $libro->id }} - {{ $libro->nombre }}  - {{ $libro->autor }}</option>
            @endforeach
        </select><br>

        <label for="Nombre_libro">Nombre del Libro:</label>
        <input type="text" name="Nombre_libro" id="Nombre_libro" class="form-control" readonly><br>

        <script>
            function actualizarNombreLibro() {
                var select = document.getElementById('ID_libro');
                var nombreLibroInput = document.getElementById('Nombre_libro');
                var selectedOption = select.options[select.selectedIndex];
                nombreLibroInput.value = selectedOption.text.split(' - ')[1];
            }
        </script>
       
        <div class="col-md-6">

          <label for="fecha_prestamo">Fecha de Préstamo:</label>
        <input type="date" name="Fecha_prestamo" id="fecha_prestamo"  class="form-control" required><br>

        </div>
        <div class="col-md-6">
            <label for="fecha_devolucion">Fecha de Devolución:</label>
            <input type="date" name="Fecha_devolucion" id="fecha_devolucion" class="form-control" required><br>
        </div>
        <div class="col-md-6">
            <label for="id_estudiante">ID del Estudiante:</label>
            <input type="text" name="ID_estudiante" id="id_estudiante" class="form-control" required value="{{ $idUsuario }}"><br>
        </div>
        
        <div class="col-md-6">
            <label for="nombre_estudiante">Nombre del Estudiante:</label>
            <input type="text" name="Nombre_estudiante" id="nombre_estudiante" class="form-control" required value="{{ $nombreUsuario }}" readonly><br>
        </div>
        
      
      
        <div class="col-12">
        
          <button type="submit" class="btn btn-primary">Solicitar Préstamo</button>
        </div>
      </form>
    </div>
</body>
</html>

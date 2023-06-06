<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('https://i.pinimg.com/564x/34/6a/1f/346a1f4363e1b59f6860fdce6abc1082.jpg') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
.contenedor{

  display: flex;
  margin-left: 350px;
  margin-top: 40px
}

.card{

  margin-right: 40px;
  
}


  
</style>

</head>
<body>


      <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('libros.index') }}">
            <img src="https://i.pinimg.com/564x/34/6a/1f/346a1f4363e1b59f6860fdce6abc1082.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Control de libros
          </a>
        </div>
      </nav>

 

<div class="contenedor">

  <div class="card" style="width: 18rem;">
    <img src="https://img.playbuzz.com/image/upload/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2.5/v1586829979/yv1dwoy8tfsxqwvn9urs.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">El principito</h5>
      <h6 class="card-title">Antoine de Saint-Exupéry</h6>
      <p class="card-text">Es una novela corta y la obra más famosa del escritor y aviador francés Antoine de Saint-Exupéry (1900-1944).

      </p>
      <a href="{{ route('prestamos.create') }}" class="btn btn-primary">Realizar préstamo</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="https://www.jorgedominguez.net/wp-content/uploads/2020/02/Enamoratel1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Enamórate de ti</h5>
      <h6 class="card-title">Walter Riso</h6>
      <p class="card-text"> Es un libro que apunta básicamente a desarrollar la capacidad de quererse a uno mismo. </p>
      <a href="{{ route('prestamos.create') }}" class="btn btn-primary">Realizar préstamo</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="https://mascultura.mx/wp-content/uploads/2022/07/Los-demonios-de-mi-cuerpo-3D.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Los demonios de mi cuerpo</h5>
      <h6 class="card-title">Sandra Frid</h6>
      <p class="card-text">Nos acerca al fuego de su figura y nos ofrece un retrato íntimo y momentos de una mujer inigualable.</p>
      <a href="{{ route('prestamos.create') }}" class="btn btn-primary">Realizar préstamo</a>
    </div>
  </div>
</div>

<div class="contenedor">

  <div class="card" style="width: 18rem;">
    <img src="https://mascultura.mx/wp-content/uploads/2023/01/El-olor-de-las-orquideas-3D.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">El olor de las orquídeas</h5>
      <h6 class="card-title">Mariana García Luna</h6>
      <p class="card-text">Son los años cincuenta, Raquel y Alejo se aman a escondidas: los prejuicios del padre de Raquel les impiden verse libremente.</p>
      <a href="{{ route('prestamos.create') }}" class="btn btn-primary">Realizar préstamo</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="https://mascultura.mx/wp-content/uploads/2023/02/La-edad-de-la-inocencia-3D.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">La edad de la inocencia (novela)</h5>
      <h6 class="card-title">Edith Wharton</h6>
      <p class="card-text">Un brillante panorama de la Nueva York de hace 45 años. La novela más solicitada en bibliotecas públicas y un best seller en librerías.</p>
      <a href="{{ route('prestamos.create') }}" class="btn btn-primary">Realizar préstamo</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="https://planetadelibrosuy5.cdnstatics.com/usuaris/libros/fotos/374/m_prensa/373135_el-viento-nos-llevara_9788408269274_3d_202303141114.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">El viento nos llevará</h5>
      <h6 class="card-title">Mónica Carrillo</h6>
      <p class="card-text">Un bello libro con una selección de trescientos microcuentos escritos por Mónica Carrillo. </p>
      <a href="{{ route('prestamos.create') }}" class="btn btn-primary">Realizar préstamo</a>
    </div>
  </div>
</div>
<br>
<br>
<a href="{{ route('home') }}" class="btn btn-primary">Volver a la página principal</a>

<br>
<br>
<br>
@extends('layouts.footer')
</body>
</html>

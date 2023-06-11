
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
    <title>TOVO</title>  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 




@if (Auth::check() && Auth::user()->admin == 1)
<header>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page"href="{{ route('prestamos.index') }}">Control de usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"href="{{ route('librosindex.principal') }}">Control de compras</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://i.pinimg.com/564x/0a/7b/12/0a7b125a3236a2e77f447c6a436dd7ee.jpg');
      height: 400px;
      margin-top: 58px;
    "
  >
    <div class="mask" style="background-color: rgba(97, 97, 97, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">TOVO</h1>
          <h4 class="mb-3">Tareas organizadas, vida ordenada</h4>


         
        </div>
      </div>
    </div>
  </div>
  <h3>este es el administrador</h3>
  <h2>poner en esta parte beneficios de organizacion</h2>

</header>

@elseif (Auth::check())
<header>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page"href="{{ route('solicitar') }}">Lista de tareas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"href="{{ route('producto') }}">Compra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"href="{{ route('calendario') }}">Calendario</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://i.pinimg.com/564x/0a/7b/12/0a7b125a3236a2e77f447c6a436dd7ee.jpg');
      height: 400px;
      margin-top: 58px;
    "
  >
    <div class="mask" style="background-color: rgba(97, 97, 97, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">TOVO</h1>
          <h4 class="mb-3">Tareas organizadas, vida ordenada</h4>


         
        </div>
      </div>
    </div>
  </div>
</header>

<body>
  <div class="container">
  <br>
  <center><h2>Beneficios de organizarse</h2></center><br>

  <h4>Conocer las prioridades</h4>

  <p>Sin duda, una de las grandes ventajas de la planificación de tareas es que nos permite saber cuáles son las prioridades y, por tanto, no concentrarnos en algo que no se necesita con urgencia. </p><br>
  
  <h4>Aumento de la productividad</h4>

  <p>Dedicándole unos minutos al principio del día u otros pocos a lo largo del día a determinar cuáles son las tareas más importantes, podrás aumentar tu productividad sin incrementar el tiempo trabajado. Y es que no perderás tiempo pensando en qué debes hacer, sino que podrás empezar a tope desde el minuto uno.</p><br>

  <h4>Más tiempo libre</h4>

  <p>Al aumentar tu productividad acabarás tus tareas antes, por lo que tendrás mucho más tiempo libre. Y eso no solo significa que podrás tomarte descansos durante tu jornada laboral, algo esencial para poder rendir al máximo todo el día.</p><br>

  <h4>Más motivación</h4>

  <p>Por otro lado, queremos comentar que las listas de tareas tienen el poder de motivarte y mantenerte en marcha. Al tachar lo que está pendiente de tu lista, experimentarás una sensación de logro que te estimulará para completar todas las tareas enumeradas. </p><br>

  <h4>Menos estrés</h4>

  <p>Por último, queremos comentar que la planificación de tareas puede reducir considerablemente el estrés. Y es que no hay que olvidar que la mayor parte del estrés diario está relacionado con la falta de tiempo. Eso sí, es importante que tengas en cuenta que sobre todo disminuirás los niveles de estrés y ansiedad si incluyes descansos y algunos ejercicios de relajación en tu lista de tareas. </p><br>

  <br>
  <br>
  <br>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="https://www.improma.com/wp-content/uploads/2016/03/organizar-horarios.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://www.cibernos.com/hubfs/photo-1512758017271-d7b84c2113f1.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://recursosparapymes.com/wp-content/uploads/2020/02/como-organizar-tareas.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    
  </div><br>

</div>
</body>

@endif
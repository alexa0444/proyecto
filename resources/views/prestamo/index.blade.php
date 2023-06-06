@extends('layouts.app')

@section('template_title')
Préstamos

@endsection

@section('content')

@push('scripts')
<script>
  function confirmPrestamo(prestamoId) {
    if (confirm("¿Estás seguro de que deseas aceptar el préstamo?")) {
        window.location.href = '/prestamos/aceptar/' + prestamoId;
    }
}

</script>
@endpush


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <form class="form my-2 my-lg-0">
                                <div class="input-group">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="q">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </div>
                            </form>
                            <span id="card_title">
                                {{ __('Solicitudes de préstamos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('prestamos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar uno nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Libro</th>
										<th>Nombre Libro</th>
										<th>Fecha Prestamo</th>
										<th>Fecha Devolucion</th>
										<th>Id Estudiante</th>
										<th>Nombre Estudiante</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prestamos as $prestamo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $prestamo->ID_libro }}</td>
											<td>{{ $prestamo->Nombre_libro }}</td>
											<td>{{ $prestamo->Fecha_prestamo }}</td>
											<td>{{ $prestamo->Fecha_devolucion }}</td>
											<td>{{ $prestamo->ID_estudiante }}</td>
											<td>{{ $prestamo->Nombre_estudiante }}</td>
                                            
                                            <td>
                                                <button class="btn btn-success btn-sm" onclick="confirmPrestamo({{ $prestamo->id }})"><i class="fa fa-fw fa-check"></i> {{ __('Aceptar préstamo') }}</button>

                                            </td>

                                            <td>

                                                <form action="{{ route('prestamos.destroy', $prestamo->id) }}" method="POST">
                                                    @csrf

                                                            {{-- //realizar aceptar prestamo --}}
                                                    {{-- hacer otra pantalla que sea (boton abajo), ver prestamos que tan ahora y poder devolverlos --}}
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Rechazar préstamo') }}</button>
                                           
                                               
                                                </form>
                                            
                                                </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="boton">
                    <a href="{{ route('prestamostotales') }}" class="btn btn-primary">Ver préstamos actuales</a>
                {!! $prestamos->links() !!}
                
                <a href="{{ route('home') }}" class="btn btn-primary">Volver a la página principal</a>

            </div>
                {!! $prestamos->links() !!}
            </div>
        </div>
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
    <br>
    <br>
    <br>
    <br>
   
    <br>

    @include('layouts.footer')
@endsection

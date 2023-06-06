@extends('layouts.app')

@section('template_title')
    {{ $prestamo->name ?? "{{ __('Show') Prestamo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Prestamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prestamos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Libro:</strong>
                            {{ $prestamo->ID_libro }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Libro:</strong>
                            {{ $prestamo->Nombre_libro }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Prestamo:</strong>
                            {{ $prestamo->Fecha_prestamo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolucion:</strong>
                            {{ $prestamo->Fecha_devolucion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estudiante:</strong>
                            {{ $prestamo->ID_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Estudiante:</strong>
                            {{ $prestamo->Nombre_estudiante }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

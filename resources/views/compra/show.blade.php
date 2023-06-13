@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? "{{ __('Show') Compra" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compra.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $compra->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $compra->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $compra->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $compra->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad P:</strong>
                            {{ $compra->cantidad_p }}
                        </div>
                        <div class="form-group">
                            <strong>Cuenta:</strong>
                            {{ $compra->cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $compra->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $compra->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $compra->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

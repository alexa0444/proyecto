@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
  
<title>TOVO</title>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <form class="form my-2 my-lg-0">
                                <div class="input-group">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="q">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </div>
                            </form>
                            <h2>Tareas</h2>
                            <div>
                                <a class="btn btn-success" href="{{ route('tareas.create') }}">Crear Tarea</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}">Todas las tareas</a>
                            <a class="btn btn-primary" href="{{ route('tareas.index', ['estado' => 'pendientes']) }}">Tareas Pendientes</a>
                            <a class="btn btn-primary" href="{{ route('tareas.index', ['estado' => 'proceso']) }}">Tareas en proceso</a>
                        </div>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Materia</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tareas as $tarea)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $tarea->nombre }}</td>
                                        <td>{{ $tarea->materia }}</td>
                                        <td>{{ $tarea->fecha }}</td>
                                        <td>{{ $tarea->estado }}</td>
                                        <td>
                                            <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('tareas.edit', $tarea->id) }}">Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Marcar tarea como completada</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $tareas->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <a class="btn btn-primary"  href="{{ asset('/home') }}">Ir a la página principal</a>
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
@endsection

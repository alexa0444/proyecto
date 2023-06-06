@extends('layouts.app')




@section('template_title')
    Libro
    
@endsection


@section('content')
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
                                {{ __('Todos los libros') }}
                            </span>
                            @if (Auth::check() && Auth::user()->admin ==1)
                             <div class="float-right">
                                <a href="{{ route('libros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar uno nuevo') }}
                                  @endif
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
                                        
										<th>Nombre</th>
										<th>Autor</th>
										<th>Editorial</th>
										<th>Fecha</th>
										<th>Genero</th>
                                        <th>Disponibilidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($librostotales as $libro)

                                   
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $libro->nombre }}</td>
											<td>{{ $libro->autor }}</td>
											<td>{{ $libro->editorial }}</td>
											<td>{{ $libro->fecha }}</td>
											<td>{{ $libro->genero }}</td>
                                            <td>{{ $libro->disponible }}</td>


                                            <td>

                                             
                                                <form action="{{ route('libros.destroy',$libro->id) }}" method="POST">

                                                    
                                                    @if (Auth::check() && Auth::user()->admin ==1)
                                                    <a class="btn btn-sm btn-success" href="{{ route('libros.edit',$libro->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>

                                                    
                                                </form>
                                                             @endif
                                                </td>
                                        </tr>
                                    @endforeach

                             
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <a href="{{ URL::previous() }}" class="btn btn-primary">Volver atrás</a>


            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    @include('layouts.footer')
@endsection

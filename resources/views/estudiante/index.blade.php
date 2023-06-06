@extends('layouts.app')


@section('template_title')
    Estudiante
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
                                {{ __('Estudiantes') }}
                            </span>
                   
                             <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar un nuevo estudiante') }}
                                  
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
										<th>Curso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estudiante->Nombre }}</td>
											<td>{{ $estudiante->Curso }}</td>

                                      
                                            <td>

                                                <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
                                                
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes.edit',$estudiante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>

                                                    @csrf
                                                   @method('DELETE')
                                                   <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                                          
                                                </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estudiantes->links() !!}
            </div>
        </div>
    </div>
    <br>
    <br>
    <a href="{{ route('home') }}" class="btn btn-primary">Volver a la página principal</a>
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



@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tarea
@endsection

@section('content')
<div class="fondo">
    <div class="container">
        <form method="POST" action="{{ route('tareas.update', $tarea->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf

            <div class="card mb-3" style="max-width: 2000px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('img/edit.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="background: #c3e6fd">
                        <br><center><h1>EDITAR TAREAS</h1><br>
                    @include('tarea.form')
                  </div>
                </div>
              </div>

        </form>
    </div>
</div>
@endsection

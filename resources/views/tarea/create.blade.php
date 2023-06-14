@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tarea
@endsection

@section('content')
<div class="fondo">
    <div class="container">
        <form method="POST" action="{{ route('tareas.store') }}"  role="form" enctype="multipart/form-data">
            @csrf

            <div class="card mb-3" style="max-width: 2000px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('img/plan.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="background: #c3e6fd">
                        <br><br><center><h1>CREAR TAREAS</h1><br>
                     @include('tarea.form')
                  </div>
                </div>
              </div>

            

        </form>
    </div>
</div>
@endsection

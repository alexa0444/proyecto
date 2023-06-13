@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Compra
@endsection

@section('content')
<div class="fondo" style="background: #E3F2FD; margin: 80px; border-radius: 6px;">
    <br><br><h1 style="text-align: center">Formulario de compra</h1><br><br>
<div class="container">
    <form method="POST" action="{{ route('compra.store') }}"  role="form" enctype="multipart/form-data">
        @csrf

        @include('compra.form')

    </form>
</div>
</div>
@endsection

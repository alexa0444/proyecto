@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{route('login')}}">
        @csrf
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
            <img src="{{ asset('img/icono2.png') }}" alt="">

    
        </a>
        <h1 class="h3 mb-3 mt-3">{{ __('Iniciar sesión') }}</h1>

        <div class="form-group">
        <label for="inputEmail" class="sr-only">{{ __('Email address') }}</label>
        <input type="email" id="inputEmail" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

        </div>

        <div class="form-group">
            <label for="inputPassword" class="sr-only">{{__('Password')}}</label>
            <input type="password" id="inputPassword" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        
        </div>

        <div class="checkbox mb-2 mt-2">
        <label>

        </div>

        <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Ingresar</button>
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('register')}}">¿No tienes una cuenta? Regístrate</a>
      

    </form>
@endsection

@section('scripts')

<script src="{{asset('assets-admin/js/jquery.min.js')}}"></script>
<script src="{{asset('assets-admin/js/popper.min.js')}}"></script>
<script src="{{asset('assets-admin/js/moment.min.js')}}"></script>
<script src="{{asset('assets-admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets-admin/js/simplebar.min.js')}}"></script>
<script src='{{asset('assets-admin/js/daterangepicker.js')}}'></script>
<script src='{{asset('assets-admin/js/jquery.stickOnScroll.js')}}'></script>
<script src="{{asset('assets-admin/js/tinycolor-min.js')}}"></script>
<script src="{{asset('assets-admin/js/config.js')}}"></script>
<script src="{{asset('assets-admin/js/apps.js')}}"></script>

@endsection
@extends('layouts.auth')

@section('title','Registro')

@section('content')


    <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{route('register')}}">
        @csrf

        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
            <img src="{{ asset('img/icono2.png') }}" alt="">

            <!--<svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
            </svg>-->
        
        </a>

        <h1 class="h3 mb-3 mt-3">{{ __('Registro') }}</h1>

        <div class="form-group">
            <label for="inputName" class="sr-only"> {{__('Name')}} </label>
            <input id="name" id="inputName" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="form-group">
        <label for="inputEmail" class="sr-only">{{__('Email Address')}}</label>
        <input type="email" id="inputEmail" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email " name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
        <label for="inputPassword" class="sr-only">{{__('Password')}}</label>
        <input type="password" id="inputPassword" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
        <label for="inputpassword-confirm" class="sr-only">{{__('Password Confirm')}}</label>
        <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder="Confirma la contraseña" name="password_confirmation" required autocomplete="new-password">
        
    
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('login')}}">¿Tienes una cuenta? Inicia sesión</a>
     
    
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
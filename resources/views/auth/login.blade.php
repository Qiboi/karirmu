@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="flex justify-center items-center h-screen">
    <div class="relative bg-white p-8 shadow-md rounded-md">
        <div class="absolute left-4 top-2">
            <a class="hover:text-blue-500" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>                  
            </a>
        </div>
        <h2 class="text-2xl text-center font-bold mb-4">Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input id="email" type="email" name="email" placeholder="Email" class=" w-64 py-2 text-base border-b-2 border-gray-400 focus:outline-none focus:border-blue-400 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-4">
                <input id="password" type="password" name="password" placeholder="Password" class=" w-64 py-2 text-base border-b-2 border-gray-400 focus:outline-none focus:border-blue-400 @error('password') is-invalid @enderror" required autocomplete="current-password"/>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-check mb-8 items-center">
                <input class="form-check-input border-gray-400" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-base font-light" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="flex justify-center mb-4">
                <button type="submit" class="bg-blue-500 text-white font-medium px-6 py-2 rounded-full">Login</button>
            </div>
            {{-- @if (Route::has('password.request'))
            <div class="flex">
                <a class="mx-auto font-thin text-sm" href="{{ route('password.request') }}">Lupa Password?</a>
            </div>
            @endif --}}
            <div class="flex">
                <a class="mx-auto font-thin text-sm hover:text-blue-500" href="{{ route('register') }}">Belum punya akun? Daftar</a>
            </div>
        </form>
    </div>
</div>

{{-- <div class="flex items-center h-screen transition-all duration-300">
    <div class="mx-auto bg-red-500 p-4">
        <p class="text-center">Login</p>
        
    </div>
</div> --}}

{{-- <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</form> --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

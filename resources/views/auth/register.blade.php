@extends('layouts.app')

@section('title', 'Daftar')

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
        <h2 class="text-2xl text-center font-bold mb-4">Daftar</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input id="name" type="text" name="name" placeholder="Nama" class=" w-64 py-2 text-base border-b-2 border-gray-400 focus:outline-none focus:border-blue-400 @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <input id="email" type="email" name="email" placeholder="Email" class=" w-64 py-2 text-base border-b-2 border-gray-400 focus:outline-none focus:border-blue-400 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>
               
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <input id="password" type="password" name="password" placeholder="Password" class=" w-64 py-2 text-base border-b-2 border-gray-400 focus:outline-none focus:border-blue-400 @error('password') is-invalid @enderror" required autocomplete="new-password"/>
               
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-8">                
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" class=" w-64 py-2 text-base border-b-2 border-gray-400 focus:outline-none focus:border-blue-400" required autocomplete="new-password"/>
            </div>
            <div class="flex justify-center mb-4">
                <button type="submit" class="bg-blue-500 text-white font-medium px-6 py-2 rounded-full">Daftar</button>
            </div>
            <div class="flex">
                <a class="mx-auto font-thin text-sm hover:text-blue-500" href="{{ route('login') }}">Sudah punya akun? Login</a>
            </div>
        </form>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

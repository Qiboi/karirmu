{{-- Content Dashboard --}}

@extends('layouts.app')

@section('title', 'Beranda - Karirmu')

@section('content')

    @include('components.navbar')

    {{-- @include('components.carousel') --}}

    
    {{-- @include('components.sidebar') --}}
    
    <div x-data>
        <div class="h-full transition-all duration-300">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 grid grid-cols-2 py-32 px-24 bg-white">
                    <div class="">
                        <div class="space-y-2">
                            <h1 class="font-bold text-3xl text-gray-900 tracking-wider">Memulai Karir Bersama</h1>
                            <h1 class="font-bold text-5xl text-gray-900 tracking-widest">KARIR<span class="text-orange-500">MU</span></h1>                        
                        </div>
                        <div class="bg-midnight text-white px-4 pt-4 pb-6 rounded-lg my-10 border-b-4 border-orange-500">
                            <p class="mb-4 font-sans text-justify">Karirmu adalah platform pencarian kerja khusus untuk siswa SMK! Kami adalah sebuah tim yang berkomitmen untuk membantu para siswa SMK mengejar impian mereka dengan menghubungkan mereka dengan peluang kerja yang sesuai dengan minat, keterampilan, dan aspirasi mereka.</p>
                            <div class="flex items-center p-2">
                                <a href="#" class="bg-orange-500 text-sm text-white font-medium rounded-full py-2 px-4">
                                    Daftar Sekarang!
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('bg.png') }}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    @include('components.footer')
    
@endsection
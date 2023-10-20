{{-- Content Lowongan --}}

@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

    @include('components.navbar')

    <div class="h-screen py-4 px-40 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4 grid grid-cols-1 gap-4">
                <div class="flex items-center p-4 rounded-md shadow-lg shadow-gray-400 bg-white space-x-4">
                    <div class="flex h-12 w-12 justify-center items-center bg-orange-500 text-white rounded-sm">
                        <i class="fa-solid fa-phone fa-lg"></i>                        
                    </div>
                    <div class="font-medium text-sm">
                        <p>No. Telp</p>
                        <p>082190182160</p>
                    </div>
                </div>
                <div class="flex items-center p-4 rounded-md shadow-lg shadow-gray-400 bg-white space-x-4">
                    <div class="flex h-12 w-12 justify-center items-center bg-orange-500 text-white rounded-sm">
                        <i class="fa-solid fa-envelope fa-lg"></i>                        
                    </div>
                    <div class="font-medium text-sm">
                        <p>Email</p>
                        <p>admin@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center p-4 rounded-md shadow-lg shadow-gray-400 bg-white space-x-4">
                    <div class="flex h-12 w-12 justify-center items-center bg-orange-500 text-white rounded-sm">
                        <i class="fa-solid fa-location-dot fa-lg"></i>                        
                    </div>
                    <div class="font-medium text-sm">
                        <p>Lokasi</p>
                        <p>Jln. Cikutra no.210</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

@endsection
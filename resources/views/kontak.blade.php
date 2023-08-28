{{-- Content Lowongan --}}

@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

    @include('components.navbar')

    <div class="h-screen py-4 px-20 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 bg-blue-500 p-4 text-center rounded-lg"> 
                <p class="text-2xl font-semibold text-white">Kontak Kami</p>
            </div>
            <div class="col-span-3 py-10 bg-white rounded-md text-center group hover:scale-110 duration-200 hover:bg-blue-500">
                <i class="fa-solid fa-envelope mx-auto fa-3x text-blue-500 group-hover:text-white"></i>
                <p class="mt-4 font-medium text-base group-hover:text-white">Email</p>
                <p class="font-medium text-base group-hover:text-white">admin@gmail.com</p>
            </div>
            <div class="col-span-3 py-10 bg-white rounded-md text-center group hover:scale-110 duration-200 hover:bg-blue-500">
                <i class="fa-brands fa-facebook mx-auto fa-3x text-blue-500 group-hover:text-white"></i>
                <p class="mt-4 font-medium text-base group-hover:text-white">Facebook</p>
                <p class="font-medium text-base group-hover:text-white">admin@gmail.com</p>
            </div>
            <div class="col-span-3 py-10 bg-white rounded-md text-center group hover:scale-110 duration-200 hover:bg-blue-500">
                <i class="fa-brands fa-instagram mx-auto fa-3x text-blue-500 group-hover:text-white"></i>
                <p class="mt-4 font-medium text-base group-hover:text-white">Instagram</p>
                <p class="font-medium text-base group-hover:text-white">admin@gmail.com</p>
            </div>
            <div class="col-span-3 py-10 bg-white rounded-md text-center group hover:scale-110 duration-200 hover:bg-blue-500">
                <i class="fa-solid fa-address-book mx-auto fa-3x text-blue-500 group-hover:text-white"></i>
                <p class="mt-4 font-medium text-base group-hover:text-white">Kontak</p>
                <p class="font-medium text-base group-hover:text-white">admin@gmail.com</p>
            </div>
            <div class="col-start-2 col-span-10 py-10 bg-white rounded-md text-center group hover:scale-110 duration-200 hover:bg-blue-500">
                <i class="fa-solid fa-house mx-auto fa-3x text-blue-500 group-hover:text-white"></i>
                <p class="mt-4 font-medium text-base group-hover:text-white">Alamat</p>
                <p class="font-medium text-base group-hover:text-white">admin@gmail.com</p> 
            </div>
        </div>
    </div>

    @include('components.footer')

@endsection
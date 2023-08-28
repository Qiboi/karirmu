@extends('layouts.app')

@section('title', 'Detail Perusahaan')

@section('content')

    @include('components.sidebar')
        
    <div x-data class="h-screen py-2 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4 rounded-lg transition-all duration-300"
        x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12 bg-white rounded-lg">
                <div class="flex p-4 space-x-6">
                    <div>
                        <img class="h-40 w-40 object-contain" src="{{ asset($company->logo) }}" alt="">
                    </div>
                    <div class="space-y-4 my-4">
                        <p class="font-medium text-xl">{{ $company->name }}</p>
                        <p class="font-medium text-lg">{{ $company->kontak }}</p>
                        <p class="font-medium text-md">{{ $company->alamat }}</p>
                    </div>
                </div>
            </div>
            <div class="col-span-7 bg-white rounded-lg">                
                <div class="text-center bg-gray-900 rounded-lg">
                    <p class="font-medium text-xl text-white p-4">Deskripsi</p>
                </div>
                <div class="mx-10 my-4 text-justify">
                    <p class="font-medium text-base indent-8">{{ $company->deskripsi }}</p>
                </div>
            </div>
            <div class="col-span-5 bg-white rounded-lg">
                <div class="text-center bg-gray-900 rounded-lg">
                    <p class="font-medium text-xl text-white p-4">Daftar Lowongan</p>
                </div>
                <div class="my-4 mx-10 space-y-4">
                    @if ($vacancies->isEmpty())
                        <div class="text-center">
                            <p class="text-base font-medium text-red-500">Belum ada lowongan</p>
                        </div>
                    @else
                    @foreach ($vacancies as $vacancy)
                    <div class="bg-blue-500 text-white grid grid-cols-5 rounded-md">
                        <div class="col-span-1 py-2 px-4 space-y-4 text-base font-medium">
                            <p>Posisi</p>
                            <p>Tutup</p>
                            <p>Kuota</p>
                        </div>
                        <div class="col-span-3 py-2 px-4 space-y-4 text-base font-medium">
                            <p>: {{ $vacancy->posisi }}</p>
                            <p>: {{ $vacancy->tutup }}</p>
                            <p>: {{ $vacancy->kuota }}</p>
                        </div>
                        <div class="col-span-1 relative">
                            <a href="#" class="absolute right-0 bottom-0 p-2 text-xs font-medium hover:text-gray-900">Lihat Detail</a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
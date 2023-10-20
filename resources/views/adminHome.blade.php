@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

    @include('components.sidebar')

    <div x-data class="h-screen py-10 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-10 rounded-lg transition-all duration-300"
        x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12">
                <p class="text-center text-2xl font-medium">Master Data</p>
                <div class="flex-grow mx-auto border-2 mt-2 border-b w-40 border-gray-900"></div>
                <div class="flex-grow mx-auto border-1.5 mt-3 border-b w-36 border-gray-900"></div>
            </div>
            <div class="col-span-4 flex items-center bg-white space-x-12 px-14 py-6 rounded-md shadow-lg shadow-gray-400 border-t-2 border-orange-500">
                <i class="fa-solid fa-user-tie fa-3x"></i>
                <div class="space-y-2">
                    <p class="text-xl font-medium">Siswa</p>
                    <p class="font-medium text-lg">{{ $profile }}</p>
                </div>
            </div>
            <div class="col-span-4 flex items-center bg-white space-x-12 px-14 py-6 rounded-md shadow-lg shadow-gray-400 border-t-2 border-orange-500">
                <i class="fa-solid fa-building fa-3x"></i>
                <div class="space-y-2">
                    <p class="text-xl font-medium">Perusahaan</p>
                    <p class="font-medium text-lg">{{ $company }}</p>
                </div>
            </div>
            <div class="col-span-4 flex items-center bg-white space-x-8 px-14 py-6 rounded-md shadow-lg shadow-gray-400 border-t-2 border-orange-500">
                <i class="fa-solid fa-newspaper fa-3x"></i>
                <div class="space-y-2">
                    <p class="text-xl font-medium">Lowongan</p>
                    <p class="font-medium text-lg">{{ $vacancy }}</p>
                </div>
            </div>
            <div class="col-span-12">
                <p class="text-center text-2xl font-medium">Dataset</p>
                <div class="flex-grow mx-auto border-2 mt-2 border-b w-40 border-gray-900"></div>
                <div class="flex-grow mx-auto border-1.5 mt-3 border-b w-36 border-gray-900"></div>
            </div>
            <div class="col-span-4 flex items-center bg-white space-x-8 px-14 py-6 rounded-md shadow-lg shadow-gray-400 border-t-2 border-orange-500">
                <i class="fa-solid fa-graduation-cap fa-3x"></i>
                <div class="space-y-2">
                    <p class="text-xl font-medium">Jurusan</p>
                    <p class="font-medium text-lg">{{ $jurusan }}</p>
                </div>
            </div>
            <div class="col-span-4 flex items-center bg-white space-x-8 px-14 py-6 rounded-md shadow-lg shadow-gray-400 border-t-2 border-orange-500">
                <i class="fa-solid fa-bolt fa-3x"></i>
                <div class="space-y-2">
                    <p class="text-xl font-medium">Skill</p>
                    <p class="font-medium text-lg">{{ $skills }}</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        #masterdata{}
    </style>

@endsection
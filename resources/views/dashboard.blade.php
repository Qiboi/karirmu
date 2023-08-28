{{-- Content Dashboard --}}

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('components.navbar')

    @include('components.carousel')

    
    {{-- @include('components.sidebar') --}}
    
    <div x-data>
        
        <div class="h-full mb-24 py-4 px-20 transition-all duration-300">
            <div class="grid grid-cols-12 gap-4">
            
                {{-- <div class="col-span-3 h-20 bg-teal-400">
        
                </div>
                <div class="col-span-3 h-20 bg-teal-500">
        
                </div>
                <div class="col-span-3 h-20 bg-teal-600">
        
                </div>
                <div class="col-span-3 h-20 bg-teal-700">
        
                </div> --}}
            
                <div class="col-span-12 bg-white p-4 rounded-lg">
                    <p class="text-xl font-medium pl-2">Tentang Kami</p>
                    <div class="h-px w-36 bg-blue-500 mb-2"></div>
                    <p class="text-justify text-md indent-8">Selamat datang di KarirMu, tempat dimana kami berkomitmen untuk memberikan dukungan dan bimbingan kepada siswa SMK dalam mencapai tujuan karier mereka. KarirMu adalah platform inovatif yang didedikasikan untuk membantu siswa SMK dalam menjembatani kesenjangan antara pendidikan dan dunia kerja.</p>
                </div>
    
                        
                {{-- <div class="col-span-7 h-auto bg-white p-4 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-xl font-medium pl-2">Lowongan Terbaru</p>
                            <div class="h-px w-48 bg-blue-500 mb-2"></div>
                        </div>
                        <a href="#" class="text-sm text-gray-400 font-normal hover:text-blue-500 mr-4">Lihat Semua</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex bg-yellow-300 items-center p-4 space-x-4 rounded-sm">
                            <div class="w-36 h-36 bg-white">
                                <img src="" alt="">
                            </div>
                            <div class="flex w-full justify-between text-gray-600">
                                <div>
                                    <p class="text-lg font-medium">Orang Tua Group</p>
                                    <p class="text-sm font-thin">Jakarta Selatan, Indonesia</p>
                                    <p class="text-lg font-medium">Posisi :</p>
                                    <p class="text-md">Accounting Staff</p>
                                    <p class="text-lg font-medium">Kategori :</p>
                                    <p class="text-md">Full Time</p>
                                </div>
                                <div class="self-end">
                                    <a href="#" class="text-sm font-normal hover:text-blue-500">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex bg-yellow-300 items-center p-4 space-x-4 rounded-sm">
                            <div class="w-36 h-36 bg-white">
                                <img src="" alt="">
                            </div>
                            <div class="flex w-full justify-between text-gray-600">
                                <div>
                                    <p class="text-lg font-medium">PT. UTAMA ASET DIGITAL INDONESIA</p>
                                    <p class="text-sm font-thin">Jakarta Selatan, Indonesia</p>
                                    <p class="text-lg font-medium">Posisi :</p>
                                    <p class="text-md">Graphic Designer Internship</p>
                                    <p class="text-lg font-medium">Kategori :</p>
                                    <p class="text-md">Magang</p>
                                </div>
                                <div class="self-end">
                                    <a href="#" class="text-sm font-normal hover:text-blue-500">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-5 bg-white p-4 rounded-lg">
                    <p class="text-xl font-medium pl-2">Berita Terbaru</p>
                    <div class="h-px w-36 bg-blue-500 mb-2"></div>
                </div> --}}
            </div>
        </div>
        
    </div>

    @include('components.footer')
    
@endsection
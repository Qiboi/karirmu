{{-- Content Lowongan --}}

@extends('layouts.app')

@section('title', 'Detail Lowongan')

@section('content')

    @include('components.navbar')

    @php
        use Carbon\Carbon;
        
        $carbonDate = Carbon::parse($vacancy->tutup);
        $tutupDate = $carbonDate->format('d F Y');

        $number = $vacancy->gaji; // Angka yang ingin Anda format
        $formatGaji = 'Rp. ' . number_format($number, 0, ',', '.');
    @endphp

    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 flex bg-white px-28 py-20 space-x-10">
            <img src="{{ $vacancy->company->logo }}" alt="" class="w-40 h-40 rounded-full object-contain shadow-sm">            
            <div class="flex items-end">
                <div class="">
                    <p class="text-3xl font-bold">{{ $vacancy->posisi }}</p>
                    <p class="text-2xl">{{ $vacancy->company->name }}</p>
                    {{-- <p class="font-medium">Rp.{{ $vacancy->gaji }}</p> --}}
                    <div class="mt-8">
                        <a href="#" class="px-4 py-2 bg-orange-500 rounded-full text-sm text-white font-medium">Lamar Sekarang</a>
                    </div>
                </div>                
            </div>
        </div>
        <div class="col-span-12 grid grid-cols-12 gap-4 px-28 -mt-12">
            <div class="col-span-8">
                <div class="bg-white p-4 shadow-lg shadow-gray-400 rounded-md border-t-2 border-orange-500">
                    <div class="grid grid-cols-7 gap-2">
                        <div class="col-span-3">
                            <p class="font-bold mb-1 uppercase ml-2">Gaji</p>
                            <p class="text-gray-400 ml-2">{{ $formatGaji }} per bulan</p>
                        </div>
                        <div class="col-span-2">
                            <p class="font-bold mb-1 uppercase ml-2">Tutup</p>
                            <p class="text-gray-400 ml-2">{{ $tutupDate }}</p>
                        </div>
                        <div class="col-span-2">
                            <p class="font-bold mb-1 uppercase ml-2">Lokasi</p>
                            <p class="text-gray-400 ml-2">{{ $vacancy->lokasi }}</p>
                        </div>
                        
                    </div>
                    <div class="mt-4">
                        <p class="font-bold mb-2 uppercase text-center">Persyaratan</p>
                        <div class="grid grid-cols-7 gap-2">
                            <div class="col-span-4">
                                <p class="font-bold mb-2 uppercase text-sm ml-2">Skill</p>
                                <div class="flex space-x-1 text-xs p-2">
                                    @foreach ($skills as $skill)
                                    <p class="rounded-full border-2 border-orange-300 px-4 text-gray-400">{{ $skill->skill }}</p>            
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-span-3">
                                <p class="font-bold mb-2 uppercase text-sm ml-2">Jurusan</p>
                                <p class="text-xs ml-2 text-gray-400">{{ $vacancy->jurusan->nama_jurusan }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="mt-4">
                        <p class="font-bold mb-2 uppercase ml-2">Kuota</p>
                        <p class="text-gray-400 ml-2">{{ $vacancy->kuota }}</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-span-4">
                <div class="bg-white p-4 shadow-lg shadow-gray-400 rounded-md border-t-2 border-orange-500">
                    <p class="font-bold mb-2 uppercase ml-2">Kontak</p>
                    <div class="p-2 gap-y-4 flex flex-col ">
                        <div class="flex items-center space-x-4">
                            <i class="fa-solid fa-envelope fa-xl text-orange-500"></i>
                            <p class="font-medium">admin@gmail.com</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fa-solid fa-phone fa-xl text-orange-500"></i>
                            <p class="font-medium">082190182160</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    
    <footer class="mt-36">
        @include('components.footer')
    </footer>

@endsection
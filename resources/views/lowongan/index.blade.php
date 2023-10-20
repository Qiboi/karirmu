{{-- Content Lowongan --}}

@extends('layouts.app')

@section('title', 'Lowongan')

@section('content')

    @include('components.navbar')

    <div class="grid grid-cols-12 gap-4 my-4">
        <div class="col-span-12 px-44">
            <div class="flex text-gray-600 space-x-4">
                <input type="search" name="search" id="search" placeholder="Cari Lowongan" class="w-full mx-auto px-10 bg-white border border-gray-300 h-12 rounded-full text-sm focus:outline-none">                
                <button type="submit" class="flex items-center justify-center space-x-2 bg-orange-500 rounded-full px-6 text-white">
                    <span class="font-medium">Cari</span>
                    <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                </button>
            </div>
        </div>
        <div class="col-span-12 px-28">
            <p class="text-gray-500 font-medium text-sm">Rekomendasi lowongan untukmu</p>
        </div>
        <div class="col-span-12 grid grid-cols-3 gap-4 px-28">
            @foreach ($sortId as $sort)
            <div class="col-span-1 grid grid-cols-6 gap-2 bg-white p-4 rounded-md shadow-lg shadow-gray-400">
                <div class="col-span-4 gap-y-1 flex flex-col">
                    <p class="font-medium text-sm tracking-wide">{{ $sort->company->name }}</p>
                    <p class="font-semibold text-lg tracking-wide">{{ $sort->posisi }}</p>
                    <p class="font-medium text-sm mt-2">Rp.{{ $sort->gaji }}</p>
                </div>
                <div class="col-span-2 flex justify-end">
                    <img src="{{ asset($sort->company->logo) }}" alt="" class="w-14 h-14 object-contain rounded-lg">
                </div>
                <div class="col-span-6">
                    <div class="h-20 text-ellipsis overflow-hidden">
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis fugit porro corrupti a dicta? Enim debitis magni omnis, beatae aliquid velit ducimus! Natus facere dignissimos velit ea error aliquid vitae.</p>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="w-20">
                        <a href="{{ route('lowongan.show', $sort->id) }}" class="flex items-center justify-center px-4 py-2 space-x-2 bg-midnight text-white rounded-full">
                            <span class="text-xs font-medium">Detail</span>                            
                            <i class="fa-solid fa-arrow-right fa-xs"></i>
                        </a>                        
                    </div>
                </div>
                <div class="col-span-3 flex items-center justify-end">
                    <p class="text-sm font-medium">{{ $sort->lokasi }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    @include('components.footer')

@endsection

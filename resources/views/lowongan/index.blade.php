{{-- Content Lowongan --}}

@extends('layouts.app')

@section('title', 'Lowongan')

@section('content')

    @include('components.navbar')

    <div class="h-screen py-4 px-20 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <div class="mx-28 p-4 bg-white rounded-md sm:space-y-4">
                    <div class="relative text-gray-600 mx-8">
                        <input type="search" name="search" id="" placeholder="Cari Lowongan"
                            class="w-full mx-auto px-10 bg-white border border-gray-300 h-10 rounded-md text-sm focus:outline-none">
                        <button type="submit" class="absolute left-0 top-0 mt-3 ml-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>

                    <div class="grid grid-cols-2 mx-8 sm:space-x-2">
                        <select class="border-1 text-lg font-medium flex items-center p-2 px-6 bg-white rounded-full">
                            <option class="hidden px-4 py-2 text-lg text-gray-700 hover:text-white hover:bg-gray-400" selected>Filter</option>
                            <option class="block px-4 py-2 text-lg text-gray-700 hover:text-white hover:bg-gray-400">Part Time</option>
                            <option class="block px-4 py-2 text-lg text-gray-700 hover:text-white hover:bg-gray-400">Full Time</option>
                        </select>                        
                        <div class="">
                            <button class="bg-blue-500 rounded-full p-2 w-full" type="submit">
                                <span class="ml-4 text-xl font-medium text-white">Search</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 bg-white p-5 rounded-md">
                <div class="grid grid-cols-12 gap-4">
                    @foreach ($sortId as $sort)
                        {{-- @foreach ($companies as $company) --}}
                    <div class="col-span-4 grid grid-cols-10 border rounded-sm p-4">
                        <div class="col-span-10 flex justify-center">
                            <img src="{{ asset('logo/djarum.png') }}" alt="" class="object-contain w-24">
                        </div>
                        <div class="col-span-10 text-gray-900">
                            <div class="text-center font-medium mt-4">
                                <p class="text-xl my-2">{{ $sort->company->name }}</p>
                                <p class="text-lg my-2">{{ $sort->lokasi }}</p>                        
                                <div class="flex-grow mx-auto border-1 mt-3 border-b w-full border-gray-900"></div>
                                <p class="text-xl my-2">{{ $sort->posisi }}</p>
                            </div>
                            <div class="text-center my-12">
                                <a class="font-medium py-2 px-4 bg-blue-500 text-white rounded-full" href="{{ route('lowongan.show', $sort->id) }}">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                        {{-- @endforeach --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

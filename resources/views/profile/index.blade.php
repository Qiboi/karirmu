@extends('layouts.app')

@section('title', 'Profile')

@section('content')

@foreach ($profiles as $profile)
    
    @include('components.navbar')
    <div class="h-full py-4 px-20 transition-all duration-300 bg-gray-200">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <div class="flex justify-center">
                    <div class="bg-white text-center px-36 py-4 rounded-lg">
                        <div class="mx-auto">
                            <img class="object-cover h-40 w-40 rounded-full" src="{{ asset($profile->foto) }}" alt="">
                        </div>
                        <p class="text-xl font-medium">{{ $profile->nama }}</p>
                        <p class="text-lg font-medium">{{ $profile->jurusan }}</p>
                        <p class="text-lg font-medium">{{ $profile->nis }}</p>
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="bg-white rounded-md">
                    <div class="flex justify-center rounded-md bg-blue-500 p-4">
                        <p class="text-lg text-white font-medium">Data Diri</p>
                    </div>
                    <div class="flex text-md font-medium p-6 ">
                        <div class="grid grid-cols-2 w-full">
                            <ul class="space-y-1">
                                <li>Nama</li>
                                <li>TTL</li>
                                <li>Jenis Kelamin</li>
                                <li>Alamat</li>
                            </ul>
                            <ul class="space-y-1">
                               <li>: {{ $profile->nama }}</li> 
                               <li>: {{ $profile->tempat_lahir }}, {{ $profile->tanggal_lahir }}</li> 
                               <li>: {{ $profile->jenis_kelamin }}</li> 
                               <li>: {{ $profile->alamat }}</li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="bg-white rounded-md">
                    <div class="flex justify-center rounded-md bg-blue-500 p-4">
                        <p class="text-lg text-white font-medium">Kontak</p>
                    </div>
                    <div class="flex text-md font-medium p-6 ">
                        <div class="grid grid-cols-2 w-full">
                            <ul class="space-y-1">
                                <li>Email</li>
                                <li>Nomor Telepon</li>
                            </ul>
                            <ul class="space-y-1">
                               <li>: {{ $profile->email }}</li> 
                               <li>: {{ $profile->nomor_telepon }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="bg-white rounded-md">
                    <div class="flex justify-center rounded-md bg-blue-500 p-4">
                        <p class="text-lg text-white font-medium">Skill</p>
                    </div>
                    <div class="flex text-md font-medium p-6 ">
                        <div class="w-full">
                            <ul class="space-y-1 list-disc list-inside">
                                @php
                                    $skills = json_decode($profile->skill);
                                @endphp
                                @foreach ($skills as $skill)
                                    <li>{{ $skill }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12">
                <div class="flex justify-end">
                    <button class="py-2 px-4 bg-green-500 rounded-md">
                        <a href="{{ route('profile.create') }}" class="font-medium text-white">Perbarui Profile</a>
                    </button>
                </div>

            </div>
        </div>
    </div>

    @include('components.footer')

@endforeach

@endsection
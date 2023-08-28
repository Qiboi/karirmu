@extends('layouts.app')

@section('title', 'Detail Perusahaan')

@section('content')

    @include('components.sidebar')
        
    <div x-data class="h-screen py-2 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4 rounded-lg transition-all duration-300"
        x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12 bg-white rounded-lg">
                <div class="flex p-4 space-x-6">
                    @foreach ($companies as $company)                        
                    <div>
                        <img class="h-40 w-40 object-contain" src="{{ asset($company->logo) }}" alt="">
                    </div>
                    <div class="space-y-4 my-4">
                        <p class="font-medium text-xl">{{ $company->name }}</p>
                    @endforeach
                        <p class="font-medium text-lg">{{ $vacancy->posisi }}</p>
                        <p class="font-medium text-md">{{ $vacancy->lokasi }}</p>
                    </div>
                </div>
            </div>
            <div class="col-span-8 bg-white rounded-lg">
                <div class="mx-10 my-4 text-justify space-y-2">
                    <p class="text-lg font-medium">Skill yang dibutuhkan</p>
                    <ul class="ml-4 space-y-1 list-disc list-inside">
                        @foreach ($skills as $skill)
                            <li>{{ $skill->skill }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-span-4 bg-white rounded-lg">
                <div class="mx-10 my-4 space-y-2">
                    <p class="text-lg font-medium">Kuota</p>
                    <p class="ml-4">{{ $vacancy->kuota }} orang</p>
                    <p class="text-lg font-medium">Gaji</p>
                    <p class="ml-4">{{ $vacancy->gaji }}</p>
                    <p class="text-lg font-medium">Tutup</p>
                    <p class="ml-4">{{ $vacancy->tutup }}</p>
                    <p class="text-lg font-medium">Status</p>
                    @if ($vacancy->status == 1)
                    <p class="ml-4">Tersedia</p>
                    @else
                    <p class="ml-4">Kuota Habis</p>
                    @endif
                    <p class="text-lg font-medium">Kontak</p>
                    <p class="ml-4">{{ $vacancy->kontak }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
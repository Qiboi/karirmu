@extends('layouts.app')

@section('title', 'Master Perusahaan')

@section('content')

    @include('components.sidebar')

    <div x-data class="h-screen py-2 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4 bg-white rounded-lg transition-all duration-300"
        x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12 overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <div class="p-5 border-b bg-white flex justify-between">
                        <h2 class="text-lg font-semibold text-left text-gray-900">Master Data Perusahaan</h2>                        
                        <a class="px-4 py-2 bg-blue-500 rounded-md text-md font-medium text-white" href="{{ route('mastercompany.create') }}">Tambah</a>
                    </div>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Perusahaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $companies as $company )
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $company->name }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                <p class="w-96 truncate">{{ $company->alamat }}</p>                                
                            </td>
                            {{-- <td class="px-6 py-4 font-medium whitespace-nowrap">
                                <p class="w-24 truncate">{{ $datac->deskripsi }}</p>
                            </td> --}}
                            <td class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $company->kontak }}
                            </td>
                            <td class="flex px-6 py-4 space-x-2">
                                <a href="{{ route('mastercompany.edit', $company->id) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="{{ route('mastercompany.show', $company->id) }}" class="font-medium text-green-600 hover:underline">Lihat</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <section class="h-screen px-4">
        <div class="flex flex-col justify-center h-full">

            <!-- Table -->
            <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="flex justify-between px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Master Company</h2>
                    <a href="{{ route('mastercompany.create') }}">Tambah</a>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Nama Perusahaan</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Deskripsi</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Aksi</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @foreach ( $datacompany as $datac )
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">{{ $datac->name }}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $datac->deskripsi }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">
                                            {{-- <a href="{{ route('mastercompany.edit') }}">edit</a>     
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </section> --}}

@endsection
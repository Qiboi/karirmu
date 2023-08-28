@extends('layouts.app')

@section('title', 'Master Siswa')

@section('content')

    @include('components.sidebar')

    <div x-data class="h-screen py-2 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4 bg-white rounded-lg transition-all duration-300"
        x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12 overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <div class="p-5 border-b bg-white flex justify-between">
                        <h2 class="text-lg font-semibold text-left text-gray-900">Master Data Siswa</h2>                        
                        {{-- <a class="px-4 py-2 bg-blue-500 rounded-md text-md font-medium text-white" href="{{ route('mastersiswa.create') }}">Tambah</a> --}}
                    </div>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Siswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Induk Siswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jurusan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $students as $student )
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $student->nama }}
                            </td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $student->nis }}
                            </td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $student->jurusan->nama_jurusan }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('mastervacancy.edit', $student->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
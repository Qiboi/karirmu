@extends('layouts.app')

@section('title', 'Tambah Data jurusan')

@section('content')

    @include('components.sidebar')

    <div x-data class="h-screen py-2 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4 bg-white rounded-lg duration-300"
            x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12">
                <h2 class="font-medium text-xl p-4">Tambah Data Jurusan</h2>
            </div>
            <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data"
                class="col-span-12 px-4">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label for="nama_jurusan" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                        <input type="text" id="nama_jurusan" name="nama_jurusan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div>

                    </div>
                    <div class="flex justify-end col-span-1 py-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 rounded-md">
                            <span class="text-md font-medium text-white">Tambah</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection
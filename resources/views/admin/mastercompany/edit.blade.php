@extends('layouts.app')

@section('title', 'Edit Data Perusahaan')

@section('content')

    @include('components.sidebar')

@foreach ($companies as $company)
    
    <div x-data class="h-screen py-2 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4 bg-white rounded-lg duration-300"
        x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12">
                <h2 class="font-medium text-xl p-4">Edit Data Perusahaan</h2>                
            </div>
            <form action="{{ route('mastercompany.update', $company->id) }}" method="POST" class="col-span-12 px-4">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Perusahaan</label>
                        <input value="{{ $company->name }}" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-1">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                        <input value="{{ $company->alamat }}" type="text" id="alamat" name="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-2">                        
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" class="block py-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                            {{ $company->deskripsi }}
                        </textarea>
                    </div>
                    <div class="col-span-1">
                        <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input value="{{ $company->kontak }}" type="text" id="kontak" name="kontak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-1">                                        
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="logo">Upload file</label>
                        <input value="{{ $company->logo }}" id="logo" type="file" name="logo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="logo">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                    </div>
                    <div class="flex justify-end col-span-2 py-4 space-x-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 rounded-md">
                            <span class="text-md font-medium text-white">Simpan</span>
                        </button>
                        <button class="px-4 py-2 bg-red-500 rounded-md">
                            <a class="text-md font-medium text-white" href="{{ route('mastercompany.index') }}">Kembali</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach


    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        var vars = ['deskripsi'];

        for (var i = 0; i < vars.length; i++) {
            CKEDITOR.replace(vars[i]);
        }
    </script>

@endsection
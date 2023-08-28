@extends('layouts.app')

@section('title', 'Edit Data Lowongan')

@section('content')

    @include('components.sidebar')

    <div x-data class="h-screen py-2 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4 bg-white rounded-lg duration-300"
            x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12">
                <h2 class="font-medium text-xl p-4">Edit Data Lowongan</h2>
            </div>
            <form action="{{ route('mastervacancy.update', $vacancy->id) }}" method="POST" enctype="multipart/form-data"
                class="col-span-12 px-4">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label for="id_perusahaan"
                            class="block mb-2 text-sm font-medium text-gray-900">Nama Perusahaan</label>
                        <select name="id_perusahaan" id="id_perusahaan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected disabled>Pilih Perusahaan</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}"
                                    {{ $vacancy->id_perusahaan == $company->id ? 'selected' : '' }}>
                                    {{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="posisi" class="block mb-2 text-sm font-medium text-gray-900">Posisi</label>
                        <input type="text" id="posisi" name="posisi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ $vacancy->posisi }}" required>
                    </div>
                    <div class="col-span-1">
                        <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900">Lokasi</label>
                        <input value="{{ $vacancy->lokasi }}" type="text" id="lokasi" name="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-1">
                        <label for="id_jurusan"
                            class="block mb-2 text-sm font-medium text-gray-900">Jurusan yang dibutuhkan</label>
                        <select name="id_jurusan" id="id_jurusan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected disabled>{{ $vacancy->jurusan->nama_jurusan }}</option>
                            {{-- @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="id_skill"
                            class="block mb-2 text-sm font-medium text-gray-900">Keterampilan yang dibutuhkan</label>
                        <select
                            id="select-role"
                            name="id_skill[]"
                            multiple
                            placeholder="Pilih Keterampilan yang dimiliki"
                            autocomplete="off"
                            class="w-full rounded-sm cursor-pointer focus:outline-none"
                            multiple
                        >
                        {{-- @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->skill }}</option>
                        @endforeach --}}
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="gaji" class="block mb-2 text-sm font-medium text-gray-900">Gaji</label>
                        <input value="{{ $vacancy->gaji }}" type="text" id="gaji" name="gaji" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-1">
                        <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900">Kontak</label>
                        <input value="{{ $vacancy->kontak }}" type="text" id="kontak" name="kontak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-1">
                        <label for="kuota" class="block mb-2 text-sm font-medium text-gray-900">Kuota</label>
                        <input value="{{ $vacancy->kuota }}" type="text" id="kuota" name="kuota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-1">
                        <label for="tutup" class="block mb-2 text-sm font-medium text-gray-900">Tutup</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                              
                            </div>
                            <input datepicker value="{{ $vacancy->tutup }}" type="text" id="tutup" name="tutup" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">                            
                        </div>
                    </div>
                    <div class="col-span-1">
                
                    </div>
                    @if ($vacancy->status == "1" )
                    <div class="col-span-1">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input value="status" type="checkbox" name="status" id="status" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-400 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Status</span>
                        </label>
                    </div>
                    @else
                    <div class="col-span-1">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input value="status" type="checkbox" name="status" id="status" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-400 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Status</span>
                        </label>
                    </div>
                    @endif
                    <div class="flex justify-end col-span-2 py-4 space-x-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 rounded-md">
                            <span class="text-md font-medium text-white">Simpan</span>
                        </button>
                        <button class="px-4 py-2 bg-red-500 rounded-md">
                            <a class="text-md font-medium text-white" href="{{ route('mastervacancy.index') }}">Kembali</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        var vars = ['kualifikasi', 'syarat', 'tambahan'];

        for (var i = 0; i < vars.length; i++) {
            CKEDITOR.replace(vars[i]);
        }
    </script>

@endsection
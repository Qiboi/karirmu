@extends('layouts.app')

@section('title', 'Form Data Profile')

@section('content')

    @include('components.navbar')

    <div x-data class="h-full py-4 px-20 transition-all duration-300 bg-gray-200">
        <div class="grid grid-cols-12 gap-4 bg-white rounded-lg duration-300">
            <div class="col-span-12">
                <h2 class="font-medium text-xl p-4">Form Data Profile</h2>
            </div>
            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data"
                class="col-span-12 px-4">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Siswa</label>
                        <input type="text" id="nama" name="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="col-span-1">
                        <label for="nis" class="block mb-2 text-sm font-medium text-gray-900">Nomor Induk Siswa</label>
                        <input type="text" id="nis" name="nis"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="col-span-1">
                        <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="col-span-1">
                        <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input datepicker type="text" id="tanggal_lahir" name="tanggal_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                    <div class="col-span-1">
                        <label for="jenis_kelamin"
                            class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                                <option selected value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-span-1">                        
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>                        
                        <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>                        
                    </div>
                    <div class="col-span-1">
                        <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon</label>
                        <input type="text" id="nomor_telepon" name="nomor_telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-1">

                    </div>
                    <div class="col-span-1">
                        <label for="jurusan_siswa"
                            class="block mb-2 text-sm font-medium text-gray-900">Jurusan yang dibutuhkan</label>
                        <select name="jurusan_siswa" id="jurusan_siswa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected disabled>Pilih Jurusan</option>
                            @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="skill_siswa"
                            class="block mb-2 text-sm font-medium text-gray-900">Keterampilan yang dimiliki</label>
                        <select
                            id="select-role"
                            name="skill_siswa[]"
                            multiple
                            placeholder="Pilih Keterampilan yang dimiliki"
                            autocomplete="off"
                            class="w-full rounded-sm cursor-pointer focus:outline-none"
                            multiple
                        >
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->skill }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-span-1">                                        
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Upload Foto</label>
                        <input  id="foto" type="file" name="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="foto">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                    </div>
                    <div class="flex justify-end col-span-2 py-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 rounded-md">
                            <span class="text-md font-medium text-white">Tambah</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

    <script>
      new TomSelect('#select-role', {
        maxItems: 5,
      });
    </script>

    <script>
        function submitForm() {
          const skills = Array.from($refs.skills_siswa).map((el) => el.value);
          console.log(skills_siswa); // Lakukan sesuatu dengan nilai skill, seperti mengirim ke server
        }
    </script>

@endsection

    
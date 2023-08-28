@extends('layouts.app')

@section('title', 'Tambah Data Siswa')

@section('content')

    @include('components.sidebar')

    <div x-data class="h-screen py-2 px-4 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4 bg-white rounded-lg duration-300"
            x-bind:class="$store.sidebar.full ? 'sm:ml-20 md:ml-64' : 'sm:ml-20' ">
            <div class="col-span-12">
                <h2 class="font-medium text-xl p-4">Tambah Data Siswa</h2>
            </div>
            <form action="{{ route('mastersiswa.store') }}" method="POST" enctype="multipart/form-data"
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
                                <option selected>Laki-Laki</option>
                                <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-2">                        
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>                        
                        <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>                        
                    </div>
                    <div class="col-span-1">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-1">
                        <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon</label>
                        <input type="text" id="nomor_telepon" name="nomor_telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-2">                        
                        <label for="riwayat_pendidikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Pendidikan</label>
                        <textarea id="riwayat_pendidikan" name="riwayat_pendidikan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    <div x-data="{ skills: [] }" class="col-span-1 space-y-4">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Skill</label>                        
                        <template x-for="(skill, index) in skills" :key="index">
                            <input type="text" x-model="skills[index]" x-ref="skills" name="skills[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </template>
                        
                        <button @click="skills.push('')" class="bg-green-500 text-sm font-medium text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>                                                            
                        </button>
                    </div>
                    <div class="col-span-1">

                    </div>
                    <div class="col-span-2">                        
                        <label for="pengalaman_kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengalaman Kerja</label>
                        <textarea id="pengalaman_kerja" name="pengalaman_kerja" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    <div class="col-span-2">                        
                        <label for="prestasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prestasi</label>
                        <textarea id="prestasi" name="prestasi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea> {{-- "contoh Juara 1 Kimia di OSN tingkat Nasional" --}}
                    </div>
                    <div class="col-span-1">                                        
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="logo">Upload Foto</label>
                        <input  id="logo" type="file" name="logo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="logo">
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

    <script>
        var vars = ['alamat', 'riwayat_pendidikan', 'pengalaman_kerja', 'prestasi'];

        for (var i = 0; i < vars.length; i++) {
            CKEDITOR.replace(vars[i]);
        }
    </script>

    <script>
        function submitForm() {
          const skills = Array.from($refs.skills).map((el) => el.value);
          console.log(skills); // Lakukan sesuatu dengan nilai skill, seperti mengirim ke server
        }
      </script>

@endsection

    
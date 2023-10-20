@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    
    @include('components.navbar')

    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 flex bg-midnight px-28 py-20 space-x-10">
            <img src="{{ asset('bg.png') }}" alt="" class="w-40 h-40 rounded-full object-cover border-2 border-orange-500 shadow-sm">            
            <div class="flex items-end">
                <div class="text-white">
                    <p class="text-2xl font-bold">Muhammad Rifqi Azhar</p>
                    <p class="font-medium">SMKN 6 Bandung, Rekayasa Perangkat Lunak</p>
                    <p class="font-medium">NIS : 0619101058</p>
                    <div class="flex mt-4 text-sm space-x-4 tracking-wide text-gray-400">
                        <p class="">TTL : Sukabumi, 21-04-2001</p>
                        <p class="">Jenis Kelamin : Laki - laki</p>
                    </div>
                    <p class="text-sm tracking-wide text-gray-400">Alamat : Jln. Cikutra no.210</p>
                </div>                
            </div>
        </div>
        <div class="col-span-12 grid grid-cols-12 gap-4 px-28 -mt-12">
            <div class="col-span-8">
                <div class="bg-white p-4 shadow-lg shadow-gray-400 rounded-md border-t-2 border-orange-500">
                    <div>
                        <p class="font-bold mb-2 uppercase ml-2">Tentang</p>
                        <p class="p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, architecto nulla. Nostrum, accusamus distinctio sed unde, accusantium assumenda harum in sapiente illo suscipit nobis vero magnam numquam excepturi modi possimus?</p>
                    </div>
                    <div>
                        <p class="font-bold mb-2 uppercase ml-2">Skill</p>
                        <div class="flex space-x-1 text-sm p-2">
                            @foreach ($skills as $skill)
                            <p class="rounded-full border-2 border-orange-300 px-4">{{ $skill->skill }}</p>            
                            @endforeach
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="bg-white p-4 shadow-lg shadow-gray-400 rounded-md border-t-2 border-orange-500">
                    <p class="font-bold mb-2 uppercase ml-2">Kontak</p>
                    <div class="p-2 gap-y-4 flex flex-col ">
                        <div class="flex items-center space-x-4">
                            <i class="fa-solid fa-envelope fa-xl text-orange-500"></i>
                            <p class="font-medium">admin@gmail.com</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fa-solid fa-phone fa-xl text-orange-500"></i>
                            <p class="font-medium">082190182160</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-28">
        @include('components.footer')
    </footer>


@endsection
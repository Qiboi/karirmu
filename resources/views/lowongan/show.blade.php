{{-- Content Lowongan --}}

@extends('layouts.app')

@section('title', 'Detail Lowongan')

@section('content')

    @include('components.navbar')

    <div class="h-screen py-4 px-20 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 px-20 flex">
                <p class="text-lg font-bold text-white bg-blue-500 px-4 py-2 rounded-full">Detail Lowongan</p>
            </div>
            <div class="col-span-12 px-20">
                <div class="grid grid-cols-12 gap-4 bg-white rounded-md p-8">
                    <div class="col-span-4">
                        <div class="w-32 h-32 bg-white border mx-auto">

                        </div>
                        <div class="w-full h-px bg-blue-500 mt-4"></div>
                        <p class="text-base font-medium text-blue-500">Deskripsi</p>
                        <p class="text-sm text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium magni, tempora expedita nihil tempore voluptatibus quidem, dolorem praesentium distinctio vitae ratione? Quibusdam sit velit quaerat ex vitae deserunt molestiae laborum.</p>
                    </div>
                    <div class="col-span-8">
                        <p class="text-base font-medium text-blue-500">Persyaratan :</p>
                        <ul class="list-disc list-outside ml-4 text-sm">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id tempora quasi ad provident cumque nobis non! Aliquid dignissimos nostrum, suscipit nobis nemo labore, itaque architecto iste hic mollitia exercitationem ratione! </li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id tempora quasi ad provident cumque nobis non! Aliquid dignissimos nostrum, suscipit nobis nemo labore, itaque architecto iste hic mollitia exercitationem ratione! </li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id tempora quasi ad provident cumque nobis non! Aliquid dignissimos nostrum, suscipit nobis nemo labore, itaque architecto iste hic mollitia exercitationem ratione! </li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id tempora quasi ad provident cumque nobis non! Aliquid dignissimos nostrum, suscipit nobis nemo labore, itaque architecto iste hic mollitia exercitationem ratione! </li>
                        </ul>
                        <p class="text-base font-medium text-blue-500">Lokasi :</p>
                        <p class="ml-4 text-sm">Bandung</p>
                        <p class="text-base font-medium text-blue-500">Kuota :</p>
                        <p class="ml-4 text-sm">1</p>
                        <p class="text-base font-medium text-blue-500">Deadline :</p>
                        <p class="ml-4 text-sm">30 Agustus 2023</p>
                    </div>
                    <div class="col-span-12 flex justify-end">
                        <a href="#" class="py-2 px-4 bg-blue-500 text-white rounded-full text-sm font-semibold">
                            <span>Lamar Sekarang</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection
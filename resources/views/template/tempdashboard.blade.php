{{-- Content Lowongan --}}

@extends('layouts.app')

@section('title', 'Detail Lowongan')

@section('content')

    @include('components.navbar')

    @php
        use Carbon\Carbon;
        
        $carbonDate = Carbon::parse($vacancy->tutup);
        $tutupDate = $carbonDate->format('d F Y');
    @endphp

    <div class="h-screen pt-4 px-40 transition-all duration-300">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 rounded-md bg-white border-t-2 border-orange-500 shadow-lg shadow-gray-400">
                <p class="text-lg font-bold px-4 py-2 text-orange-500">Detail Lowongan</p>
                <div class="grid grid-cols-12 gap-4 px-8 pb-8">
                    <div class="col-span-12">
                    </div>
                    <div class="col-span-4">                        
                        <img src="{{ $vacancy->company->logo }}" alt="logo" class="w-32 h-32 object-contain mx-auto">
                        <div class="w-full h-px bg-orange-500 mt-4"></div>
                        <p class="text-base font-medium text-orange-500">Deskripsi</p>
                        <p class="text-sm text-justify ">{{ $vacancy->company->deskripsi }}</p>
                    </div>
                    <div class="col-span-8">
                        <p class="text-base font-medium text-orange-500">Persyaratan :</p>
                        <ul class="list-disc list-outside ml-4 text-sm">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id tempora quasi ad provident cumque nobis non! Aliquid dignissimos nostrum, suscipit nobis nemo labore, itaque architecto iste hic mollitia exercitationem ratione! </li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id tempora quasi ad provident cumque nobis non! Aliquid dignissimos nostrum, suscipit nobis nemo labore, itaque architecto iste hic mollitia exercitationem ratione! </li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id tempora quasi ad provident cumque nobis non! Aliquid dignissimos nostrum, suscipit nobis nemo labore, itaque architecto iste hic mollitia exercitationem ratione! </li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id tempora quasi ad provident cumque nobis non! Aliquid dignissimos nostrum, suscipit nobis nemo labore, itaque architecto iste hic mollitia exercitationem ratione! </li>
                        </ul>
                        <p class="text-base font-medium text-orange-500">Lokasi :</p>
                        <p class="ml-4 text-sm">{{ $vacancy->lokasi }}</p>
                        <p class="text-base font-medium text-orange-500">Kuota :</p>
                        <p class="ml-4 text-sm">{{ $vacancy->kuota }}</p>
                        <p class="text-base font-medium text-orange-500">Deadline :</p>
                        <p class="ml-4 text-sm">{{ $tutupDate }}</p>
                    </div>
                    <div class="col-span-12 flex justify-end">
                        <a href="#" class="py-2 px-4 bg-orange-500 text-white rounded-full text-sm font-semibold">
                            <span>Lamar Sekarang</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('components.footer')

@endsection
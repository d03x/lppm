@extends('layouts.main', ['title' => 'Home'])

@section('content')
    <!-- begin::hero -->
    <div class="container sm:px-24 space-y-3">
        <div class="bg-warna1 sm:rounded-lg overflow-hidden sm:mt-4 sm:flex">
            <div class="sm:max-w-xs w-full sm:bg-warna1">
                <button
                    class="hover:bg-primary sm:justify-between sm:border-none sm:w-full flex items-center border-b sm:text-[16px] text-xs p-2">
                    <span>Pusat Kajian</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="sm:rotate-[270deg]" width="16" height="16"
                        viewBox="0 0 24 24">
                        <rect width="24" height="24" fill="none" />
                        <path fill="currentColor"
                            d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569z" />
                    </svg>
                </button>
            </div>
            <div>
                <div class="h-[200px] sm:h-[300px] overflow-hidden">
                    <img src="https://lppm.upi.edu/asset/foto_berita/workshop_Penelitian_PkM_19_Maret_2024.jpg"
                        alt="">
                </div>
            </div>
        </div>
        <!-- tentang -->
       <div class="px-3 sm:px-0">
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 gap-y-6">
            @foreach (range(1,4) as $item)
            <div class="shadow bg-warna1 p-3 rounded-lg">
             <div class="bg-white text-center rounded-lg flex items-center py-1 justify-center text-black">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                     <rect width="24" height="24" fill="none" />
                     <path fill="currentColor" d="M11 9h2V7h-2m1 13c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m-1 15h2v-6h-2z" />
                 </svg> Tentang
             </div>
             <ul class="mt-3 text-sm px-4 text-secondary font-semibold space-y-3">
                 <li class="list-disc">
                    <a class="hover:text-secondary" href="">Sejarah LPPM</a>
                </li>
                 <li class="list-disc">Visi & Misi tujuan</li>
                 <li class="list-disc">Program Kerja</li>
                 <li class="list-disc">Pimpinan</li>
                 <li class="list-disc">
                    Panduan Penelitian dan PkM 2024
                 </li>
             </ul>
         </div>
            @endforeach
         </div>
       </div>
       <div class="grid grid-cols-2 gap-3 rounded-lg">
            <div class="bg-warna1">
                <div class="px-4 py-2">
                    <span>Agenda Terbaru</span>
                </div>
                <div class="p-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus perspiciatis molestias facilis sit maxime! Suscipit similique debitis voluptates expedita error nemo magni est soluta, id illo voluptatum. Rerum, minus non.
                </div>
            </div>
       </div>
    </div>
    <!-- end::hero -->
@endsection

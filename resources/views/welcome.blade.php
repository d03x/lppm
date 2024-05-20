@extends('shared.layout')

@section('content')
@include('shared.top-bar')
@include('shared.nav-bar')
<div class="main container px-24 mx-auto">

    <div class=" bg-[#246c9c] overflow-hidden rounded-lg p-0 my-4 text-white">
        <div class="flex items-start">
            <div class="max-w-[180px] w-full flex items-center justify-start">
                <button id="button_kajian" class="hover:bg-[#083a5c] gap-2 text-xs p-2 w-full justify-between flex items-center">
                    <div class="flex items-center gap-2 justify-between">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <rect width="24" height="24" fill="none" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M3 16h18v2H3zm0-5h18v2H3zm0-5h18v2H3z" />
                            </svg>
                        </div>
                        <span class="capitalize">Pusat kajian</span>
                    </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <rect width="24" height="24" fill="none" />
                                <path fill="currentColor"
                                    d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886" />
                            </svg>
                        </div>
                       
                </button>
            </div>
            <div class="max-w-full w-full relative">
                <div id="menu_kajian" class="absolute overflow-hidden h-0 left-0 py-0 bg-[#000000b2]">
                    <ul class="flex flex-col">
                        <li><a class="px-4 border-t text-xs capitalize hover:bg-black/50 py-3 block" href="">Pengembanan Ekonomi Kreatif</a></li>
                        <li><a class="px-4 border-t text-xs capitalize hover:bg-black/50 py-3 block" href="">Pengembanan Ekonomi Kreatif</a></li>
                        <li><a class="px-4 border-t text-xs capitalize hover:bg-black/50 py-3 block" href="">Pengembanan Ekonomi Kreatif</a></li>
                        <li><a class="px-4 border-t text-xs capitalize hover:bg-black/50 py-3 block" href="">Pengembanan Ekonomi Kreatif</a></li>
                    </ul>
                </div>
                <div class="bg-[#083a5c]">
                    <img src="https://stmik-mi.ac.id/assets/img/slider/1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
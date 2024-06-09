@extends('frontend.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ Vite::asset('node_modules/swiper/swiper-bundle.min.css') }}">
    <script src="{{ Vite::asset('node_modules/swiper/swiper-bundle.min.js') }}"></script>
@endsection

@section('content')
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">

        <div class="swiper-wrapper sm:max-h-[380px] sm:h-auto">

            @foreach (range(0, 10) as $item)
                <div style="background-image: url('https://stmik-mi.ac.id/assets/img/slider/1.jpg');background-repeat:no-repeat;background-size:cover;" class="relative w-full h-full max-h-full py-10 overflow-hidden swiper-slide home_slider">
                    <div class="">
                        <img class="w-full h-full" src="https://stmik-mi.ac.id/assets/img/slider/1.jpg" alt="">
                    </div>
                    <div class="container px-0 sm:px-24">

                        <div
                            class="absolute top-0 bottom-0 z-10 flex flex-col gap-2 px-3 py-12 font-bold text-white sm:px-14 sm:p-24 lef-0">
                            <div class="text-lg sm:text-5xl line-clamp-2 font-semibold bg-clip-text text-transparent bg-gradient-to-r from-[#E67E22] to-white"
                                data-swiper-parallax="-300">
                                Kami ingin mengingatkan kalian semua untuk selalu update dengan kalender akademik
                                terbaru
                            </div>
                            <div class="text-sm" data-swiper-parallax="-200">Artikel</div>
                            <div class="text sm:pr-32" data-swiper-parallax="-100">
                                <p ata-swiper-parallax="-800"
                                    class="text-sm line-clamp-2 break-before-all sm:line-clamp-none">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                    dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                                    laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                                    Integer laoreet magna nec elit suscipit, ac laoreet nibh
                                </p>
                                <a href=""
                                    class="inline-block p-2 mt-3 text-sm text-white transition-all bg-transparent border border-white rounded hover:bg-white hover:text-warna1">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-pagination"></div>
    </div>
    <main class="block mt-4 mb-6">
        <div class="container flex flex-col px-4 mx-auto mt-3 space-y-4 sm:px-24">
            <div class="flex flex-col w-full gap-4 sm:flex-row">

                <div class="w-full">
                    <div class="flex items-center w-full gap-2 px-3 py-2 font-bold text-white rounded bg-primary">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20">
                                <rect width="20" height="20" fill="none" />
                                <path fill="currentColor"
                                    d="M7 0a2 2 0 0 0-2 2h9a2 2 0 0 1 2 2v12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path fill="currentColor"
                                    d="M13 20a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2zM9 5h4v5H9zM4 5h4v1H4zm0 2h4v1H4zm0 2h4v1H4zm0 2h9v1H4zm0 2h9v1H4zm0 2h9v1H4z" />
                            </svg>
                        </span>
                        <span class="font-bold">Berita Terbaru LPPM</span>
                    </div>
                    <div class="grid grid-cols-1 gap-5 mt-4 sm:grid-cols-2">

                        <a
                            href="{{ route('berita.detail', ['month' => 18, 'year' => 2024, 'slug' => 'berita-indonesia-merdeka']) }}">
                            <div class="p-0 overflow-hidden bg-white rounded shadow-sm sm:p-2">
                                <img class="rounded-lg" src="https://stmik-mi.ac.id/assets/img/slider/1.jpg" alt="">
                                <div class="flex flex-col gap-2 mt-2">
                                    <h1 class="text-lg font-bold tracking-tight text-warna1 line-clamp-2">
                                        Segenap Civitas Academica STMIK Mardira Indonesia mengucapkan,
                                    </h1>
                                    <div>
                                        <span class="text-xs">18 Oktober 2023 18:00</span>
                                    </div>
                                    <p class="text-sm line-clamp-3">
                                        Kami ingin mengingatkan kalian semua untuk selalu update dengan kalender akademik
                                        terbaru. Jangan sampai ketinggalan tanggal-tanggal penting yang bisa mempengaruhi
                                        perjalanan akademik kamu. Mulai dari jadwal ujian, masa registrasi, hingga hari
                                        libur akademik, semuanya penting untuk kamu ketahui dan simpan baik-baik. Share dan
                                        save kalender akademik ini yaa, biar kamu selalu siap dan terencana dalam menjalani
                                        masa studi di STMIK Mardira.

                                    </p>
                                </div>
                            </div>
                        </a>


                        <a
                            href="{{ route('berita.detail', ['month' => 18, 'year' => 2024, 'slug' => 'berita-indonesia-merdeka']) }}">
                            <div class="p-0 overflow-hidden bg-white rounded shadow-sm sm:p-2">
                                <img class="rounded-lg" src="https://stmik-mi.ac.id/assets/img/slider/1.jpg" alt="">
                                <div class="flex flex-col gap-2 mt-2">
                                    <h1 class="text-lg font-bold tracking-tight text-warna1 line-clamp-2">
                                        STMIK Mardira mengucapkan Selamat memperingati Isra Mi'raj! Semoga berkah dan rahmat
                                        Allah senantiasa menyertai kita semua dalam setiap langkah kehidupan.
                                    </h1>
                                    <div>
                                        <span class="text-xs">18 Oktober 2023 18:00</span>
                                    </div>
                                    <p class="text-sm line-clamp-3">
                                        STMIK Mardira mengucapkan Selamat memperingati Isra Mi'raj! Semoga berkah dan rahmat
                                        Allah senantiasa menyertai kita semua dalam setiap langkah kehidupan. Peristiwa Isra
                                        Mi'raj adalah momen penting dalam sejarah Islam yang mengingatkan kita akan
                                        kebesaran Allah dan kebesaran Rasulullah SAW dalam menjalankan misi kenabian.

                                        Isra Mi'raj bukan hanya sebuah perjalanan fisik, tetapi juga perjalanan spiritual
                                        yang menginspirasi kita semua untuk meningkatkan ketaqwaan, keimanan, dan kebaikan
                                        dalam hidup kita. Semoga peristiwa ini menjadi momentum bagi kita untuk lebih
                                        mendekatkan diri kepada Allah SWT dan selalu mendapatkan petunjuk serta hidayah-Nya
                                        dalam setiap keputusan dan langkah yang kita ambil.

                                    </p>
                                </div>
                            </div>
                        </a>


                        <a
                            href="{{ route('berita.detail', ['month' => 18, 'year' => 2024, 'slug' => 'berita-indonesia-merdeka']) }}">
                            <div class="p-0 overflow-hidden bg-white rounded shadow-sm sm:p-2">
                                <img class="rounded-lg" src="https://stmik-mi.ac.id/assets/img/slider/1.jpg" alt="">
                                <div class="flex flex-col gap-2 mt-2">
                                    <h1 class="text-lg font-bold tracking-tight text-warna1 line-clamp-2">
                                        Selamat Hari Kartini, para perempuan Indonesia yang hebat! Mari kenang perjuangan
                                        R.A. Kartini yang telah membuka jalan bagi emansipasi perempuan di Indonesia
                                    </h1>
                                    <div>
                                        <span class="text-xs">18 Oktober 2023 18:00</span>
                                    </div>
                                    <p class="text-sm line-clamp-3">
                                        Selamat Hari Kartini, para perempuan Indonesia yang hebat! Mari kenang perjuangan
                                        R.A. Kartini yang telah membuka jalan bagi emansipasi perempuan di Indonesia. Di era
                                        modern ini, peran perempuan sangat penting dalam berbagai bidang. Jangan pernah
                                        menyerah menghadapi tantangan dan teruslah berjuang untuk kemajuan dan kemandirian.

                                        Tingkatkan kualitas diri dalam pendidikan, karier, dan kehidupan sosial. Sikap
                                        positif dan semangat juang adalah kunci untuk mencapai impian dan tujuan.

                                    </p>
                                </div>
                            </div>
                        </a>


                        <a
                            href="{{ route('berita.detail', ['month' => 18, 'year' => 2024, 'slug' => 'berita-indonesia-merdeka']) }}">
                            <div class="p-0 overflow-hidden bg-white rounded shadow-sm sm:p-2">
                                <img class="rounded-lg" src="https://stmik-mi.ac.id/assets/img/slider/1.jpg" alt="">
                                <div class="flex flex-col gap-2 mt-2">
                                    <h1 class="text-lg font-bold tracking-tight text-warna1 line-clamp-2">
                                        Selamat Hari Ramadhan! Mari sambut bulan suci dengan penuh keberkahan dan
                                        kebahagiaan.
                                    </h1>
                                    <div>
                                        <span class="text-xs">18 Oktober 2023 18:00</span>
                                    </div>
                                    <p class="text-sm line-clamp-3">
                                        Selamat Hari Ramadhan! Mari sambut bulan suci dengan penuh keberkahan dan
                                        kebahagiaan. Di bulan yang penuh berkah ini, mari tingkatkan kualitas ibadah dan
                                        amal sholeh kita. Manfaatkan waktu untuk memperbaiki diri, memperkuat hubungan
                                        dengan Allah SWT dan sesama, serta memperbanyak amal kebaikan.

                                    </p>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>

                <div class="sticky w-full sm:max-w-xs top-16">
                    @include('frontend.sections.sidebar')
                </div>

            </div>


            @include('frontend.sections.home.penelitian')

        </div>

    </main>
@endsection
@push('footer')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".slide_next",
                prevEl: ".slide_prev",
            },

        });
    </script>
@endpush

@extends('frontend.layouts.app')

@section('content')
    <!-- berita:header:start -->
    <section class="relative max-h-[25em] sm:max-h-[22em] h-full overflow-hidden">
        <div class="absolute inset-0"
            style="background: linear-gradient(270.04deg, rgba(0, 23, 28, 0.5) 0.04%, rgba(0, 11, 14, 0.788) 39.38%, rgba(0, 35, 25, 0.98) 99.96%);">
        </div>
        <img class="object-cover w-full h-auto"
            src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1716986867-9b8dec28-4bca-40f7-8bd7-0d84d89c59af.jpg"
            alt="">
        <div class="absolute top-0 bottom-0 right-0 z-10 w-full h-full py-4 sm:py-24">
            <div class="container px-4 sm:px-24">
                <div class="flex flex-col w-full max-w-full gap-3 text-white sm:max-w-4xl sm:gap-5 ">
                    <h2 class="font-serif text-lg font-semibold tracking-wide md:text-3xl">
                        Sekda Herman Suryatman Raih Gelar Doktor Ilmu Pemerintahan dari IPDN
                    </h2>
                    <ul class="flex flex-col gap-1">
                        <li class="flex items-center justify-start gap-2 font-serif text-sm">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <rect width="24" height="24" fill="none" />
                                    <path fill="currentColor"
                                        d="M6.94 2c.416 0 .753.324.753.724v1.46c.668-.012 1.417-.012 2.26-.012h4.015c.842 0 1.591 0 2.259.013v-1.46c0-.4.337-.725.753-.725s.753.324.753.724V4.25c1.445.111 2.394.384 3.09 1.055c.698.67.982 1.582 1.097 2.972L22 9H2v-.724c.116-1.39.4-2.302 1.097-2.972c.697-.67 1.645-.944 3.09-1.055V2.724c0-.4.337-.724.753-.724" />
                                    <path fill="currentColor"
                                        d="M22 14v-2c0-.839-.004-2.335-.017-3H2.01c-.013.665-.01 2.161-.01 3v2c0 3.771 0 5.657 1.172 6.828C4.343 22 6.228 22 10 22h4c3.77 0 5.656 0 6.828-1.172C22 19.658 22 17.772 22 14"
                                        opacity="0.5" />
                                    <path fill="currentColor"
                                        d="M18 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0" />
                                </svg>
                            </span>
                            <span>29 Oktober 2003 18:00 Wita</span>
                        </li>
                        <li class="flex items-center justify-start gap-2 font-serif text-sm">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none" />
                                    <g fill="currentColor">
                                        <path d="M192 96a64 64 0 1 1-64-64a64 64 0 0 1 64 64" opacity="0.2" />
                                        <path
                                            d="M230.92 212c-15.23-26.33-38.7-45.21-66.09-54.16a72 72 0 1 0-73.66 0c-27.39 8.94-50.86 27.82-66.09 54.16a8 8 0 1 0 13.85 8c18.84-32.56 52.14-52 89.07-52s70.23 19.44 89.07 52a8 8 0 1 0 13.85-8M72 96a56 56 0 1 1 56 56a56.06 56.06 0 0 1-56-56" />
                                    </g>
                                </svg>
                            </span>
                            <span>Penulis: Agus Widodo(Admin)</span>
                        </li>

                    </ul>
                    <div class="flex flex-row gap-3">
                        <div class="flex items-start justify-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <rect width="24" height="24" fill="none" />
                                <path fill="currentColor"
                                    d="M2 12c0 1.64.425 2.191 1.275 3.296C4.972 17.5 7.818 20 12 20c4.182 0 7.028-2.5 8.725-4.704C21.575 14.192 22 13.639 22 12c0-1.64-.425-2.191-1.275-3.296C19.028 6.5 16.182 4 12 4C7.818 4 4.972 6.5 3.275 8.704C2.425 9.81 2 10.361 2 12"
                                    opacity="0.5" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M8.25 12a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0m1.5 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-col">
                                <span>190 Kali</span>
                                <span class="text-xs">Berita Ini Dilihat</span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <rect width="24" height="24" fill="none" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M13.803 5.333c0-1.84 1.5-3.333 3.348-3.333A3.341 3.341 0 0 1 20.5 5.333c0 1.841-1.5 3.334-3.349 3.334a3.346 3.346 0 0 1-2.384-.994l-4.635 3.156a3.336 3.336 0 0 1-.182 1.917l5.082 3.34a3.346 3.346 0 0 1 2.12-.753a3.341 3.341 0 0 1 3.348 3.334C20.5 20.507 19 22 17.151 22a3.341 3.341 0 0 1-3.348-3.333a3.3 3.3 0 0 1 .289-1.356L9.05 14a3.346 3.346 0 0 1-2.202.821A3.34 3.34 0 0 1 3.5 11.487a3.34 3.34 0 0 1 3.348-3.333c1.064 0 2.01.493 2.623 1.261l4.493-3.059a3.317 3.317 0 0 1-.161-1.023"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-col">
                                <span>190 Kali</span>
                                <span class="text-xs">Berita Ini Dibagikan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container sm:px-24">
       
        <div class="flex flex-col pt-4 sm:flex-row">
            <article class="flex flex-col w-full max-w-full gap-3 px-4 prose lg:prose-xl">
                <img class="rounded" src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1716986867-9b8dec28-4bca-40f7-8bd7-0d84d89c59af.jpg" alt="">
               <div class="">
                <p>
                    <p>
                     <b>DKI JAKARTA</b> -- Sekda Jabar Herman Suryatman meraih gelar doktor Ilmu Pemerintahan dari Institut Pemerintahan
                     Dalam Negeri (IPDN) dengan nilai sangat memuaskan.
     
                     Herman berhasil mempertahankan disertasinya dalan ujian sidang terbuka program doktor Ilmu Pemerintahan di
                     Kampus IPDN Cilandak, Jakarta Selatan, Rabu (29/5/2024).
     
                     Disertasi Herman berjudul 'Scenario Planning Implementasi E-Government di Kabupaten Sumedang' dengan
                     pendekatan Strategi Akselerasi Sistem Pemerintahan Berbasis Elektronik menuju Pemerintahan Daerah Berkelas
                     Dunia Tahun 2030.
     
                     Dalam ujian sidang, turut hadir Penjabat Gubernur Jawa Barat Bey Machmudin dan seluruh kepala perangkat
                     daerah Pemdaprov Jabar beserta keluarga inti Herman.
                    </p>
     
                    <p>
                     Saat ditemui usai mendapatkan gelar doktor, Herman berharap disertasi yang dikerjakannya dapat
                     diimplementasikan di pemda kabupaten dan kota maupun Provinsi Jawa Barat.
     
                     "Alhamdulillah hari ini sidang terbuka dan saya dinyatakan lulus dengan predikat yang alhamdulillah
                     membahagiakan. Terima kasih jajaran Pemda Kabupaten Sumedang dan Pemdaprov Jabar," sebut Herman Suryatman.
     
                     Meskipun harus menempuh sekolah S3 dengan durasi tujuh tahun, menurut Herman, hal ini merupakan bukti
                     kesungguhan.
                    </p>
     
                    <p>
                     "Yang paling penting adalah learning journey, perjalanan belajarnya. (Gelar) Doktor hanya titipan saja,"
                     kata Herman.
     
                     Dengan disertasinya, Herman berharap bisa memberikan kebermanfaatan bagi warga secara tepat dan terukur
                     melalui pemanfaatan sistem digital.
     
                     "Yang paling penting juga adalah apa yang bisa kita berikan untuk warga masyarakat, dan insyaallah disertasi
                     ini dengan segala keterbatasan akan memberikan dampak signifikan meningkatkan kesejahteraan masyarakat
                     dengan digital sebagai tools-nya," pungkas Herman.
                    </p>
                 </p>
               </div>
            </article>
            <div class="w-full max-w-xs">
                lorem
            </div>

        </div>
       
    </div>
    <!-- berita:header:end -->
@endsection

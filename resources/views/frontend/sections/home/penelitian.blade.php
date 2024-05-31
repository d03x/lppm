<div id="penelitian">
    <div class="flex flex-col items-center justify-between sm:flex-row">
        <div class="text-2xl">Riset & Penelitian</div>
        <a href=""
            class="flex items-center justify-start gap-1 p-2 text-sm bg-white border rounded-lg select-auto hover:bg-warna1/10 border-warna1 text-warna1">
            <span class="font-semibold">Lihat Semua Penelitian</span>
            <span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    class="jds-icon__svg"
                    style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                    <path
                        d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                    </path>
                </svg>
            </span>
        </a>
    </div>
    <div>

        <div class="relative mt-4 group">
            <div class="relative w-full swiper penelitian">
                <div class="pb-9 swiper-wrapper">
                    @foreach (range(1, 10) as $item)
                        <div class="relative px-2 swiper-slide ">
                            <div class="flex flex-col gap-3 p-4 transition-all border rounded-lg shadow-md cursor-pointer hover:border-warna1 hover:text-warna1">
                                <div class="flex items-center justify-center w-full p-2 overflow-hidden border rounded">
                                    <img src="https://jabarprov.go.id/icons/document/pdf.svg" alt="">

                                </div>
                                <div>
                                    <h2 class="line-clamp-2">
                                        PENGEMBANGAN APLIKASI PERFORMANCE ASSESSMENT BERBASIS WEB PADA MODUL PRAKTIKUM
                                        ELEKTRONIK FARMASI FISIKA
                                    </h2>
                                    <div class="text-xs">
                                        <span>Ditulis Oleh Dadan Hidayat</span>
                                    </div>
                                    <div class="flex justify-start itms-center">
                                        <a href="" class="flex items-center justify-center w-full gap-2 p-1 px-3 mt-3 text-center border rounded-lg hover:bg-warna1/10 border-warna1 hover:text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                                            <span>Lihat</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
               
                <div class="swiper-pagination"></div>
            </div>
            <div class="absolute transition-all opacity-100 sm:opacity-0 group-hover:opacity-100 slide_next cursor-pointer  z-10 top-[40%] p-1 border rounded-full  bg-warna1/10 -left-2 sm:-left-4">
                <svg class="text-warna1" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 20 20">
                    <rect width="20" height="20" fill="none" />
                    <path fill="currentColor" d="m4 10l9 9l1.4-1.5L7 10l7.4-7.5L13 1z" />
                </svg>
            </div>
            <div class="absolute transition-all opacity-100 sm:opacity-0 group-hover:opacity-100 slide_prev cursor-pointer  z-10 top-[40%] p-1 border rounded-full  bg-warna1/10  -right-2 sm:-right-4">
                <svg class="text-warna1" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 20 20">
                    <rect width="20" height="20" fill="none" />
                    <path fill="currentColor" d="M7 1L5.6 2.5L13 10l-7.4 7.5L7 19l9-9z" />
                </svg>
            </div>
        </div>

    </div>
</div>
@push('footer')
    <script>
        var swiper = new Swiper(".penelitian", {
            slidesPerView: 1,
            spaceBetween: 0,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
        nextEl: ".slide_next",
        prevEl: ".slide_prev",
      },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 0
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                },
            },
        });
    </script>
@endpush

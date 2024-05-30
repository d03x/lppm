<!-- begin::header -->
<header class="sm:bg-secondary sticky top-0 bg-white text-[#48616d]">
    <!-- begin::nav -->
    <div class="container px-3 sm:px-24">
        <nav>
            <div class="flex items-end justify-between">
                <div class="flex py-3 w-full items-center justify-start sm:gap-3">
                    <a href="">
                        <img class="" src="{{ asset('image.png') }}" alt="">
                    </a>
                    <p class="text-xs sm:text-2xl max-w-sm w-full  sm:text-center leading-none">
                        Lembaga Penelitian Dan Pengabdian Kepada Masyarakat
                    </p>
                </div>
                <div class="py-2 h-full flex flex-col items-end justify-end">
                    <select class="sm:px-2 py-1 ring-primary ring-1 outline-none cursor-pointer text-sm rounded-md">
                        <option value="">ID</option>
                        <option value="">Inggris</option>
                        <option value="">Cina</option>
                    </select>
                </div>
            </div>
        </nav>
    </div>
    <!-- end::nav -->
    <nav class="bg-warna1 sm:bg-secondary sm:border-t-4 border-t-primary">
        <div class="container px-3 md:px-24">
            <div class="flex items-center  justify-between">
                <button id="open_menu_mobile" class="sm:!hidden hamburger_menu block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <rect width="24" height="24" fill="none" />
                        <g fill="white">
                            <path
                                d="M8 6.983a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2zM7 12a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1m1 3.017a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2z" />
                            <path fill-rule="evenodd"
                                d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10m-2 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0"
                                clip-rule="evenodd" />
                        </g>
                    </svg>
                </button>
                <div
                    class='fixed main_menu -left-[100%] sm:left-0 gap-y-3 h-screen sm:gap-y-0 sm:shadow-none shadow-lg sm:w-full sm:max-h-full sm:relative sm:bg-transparent sm:max-w-full  sm:h-auto  top-0 bg-white max-w-[250px] w-full px-3'>
                    <button id="close_menu_mobile"
                        class="my-1 sm:hidden right-2 text-red-500 w-8 h-8 rounded-full flex items-center justify-center absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                            <rect width="32" height="32" fill="none" />
                            <path fill="currentColor"
                                d="M16 2C8.2 2 2 8.2 2 16s6.2 14 14 14s14-6.2 14-14S23.8 2 16 2m5.4 21L16 17.6L10.6 23L9 21.4l5.4-5.4L9 10.6L10.6 9l5.4 5.4L21.4 9l1.6 1.6l-5.4 5.4l5.4 5.4z" />
                        </svg>
                    </button>
                    <ul class="items-center sm:flex-row flex-col flex justify-start py-2 gap-2">
                        <li class="sm:w-auto w-full">
                            <a class="block transition-all duration-100 sm:text-md text-sm sm:border rounded-md border-primary shrink-0 hover:bg-menuHover px-3 text-primary py-1 hover:text-white"
                                href="">Beranda</a>
                        </li>
                        <li class="sm:w-auto w-full">
                            <a class="block transition-all duration-100 sm:text-md text-sm sm:border rounded-md border-primary shrink-0 hover:bg-menuHover px-3 text-primary py-1 hover:text-white"
                                href="">KKN Tematik</a>
                        </li>
                        <li class="sm:w-auto w-full">
                            <a class="block transition-all duration-100 sm:text-md text-sm sm:border rounded-md border-primary shrink-0 hover:bg-menuHover px-3 text-primary py-1 hover:text-white"
                                href="">Galeri Kegiatan</a>
                        </li>
                        <li class="sm:w-auto w-full">
                            <a class="block transition-all duration-100 sm:text-md text-sm sm:border rounded-md border-primary shrink-0 hover:bg-menuHover px-3 text-primary py-1 hover:text-white"
                                href="">Download</a>
                        </li>
                        <li class="sm:w-auto w-full">
                            <a class="block transition-all duration-100 sm:text-md text-sm sm:border rounded-md border-primary shrink-0 hover:bg-menuHover px-3 text-primary py-1 hover:text-white"
                                href="">Berita</a>
                        </li>
                        <li class="sm:w-auto w-full">
                            <a class="block transition-all duration-100 sm:text-md text-sm sm:border rounded-md border-primary shrink-0 hover:bg-menuHover px-3 text-primary py-1 hover:text-white"
                                href="">Tentang</a>
                        </li>
                    </ul>
                </div>

                <form action="">
                    <input class="rounded-lg hover:w-full  w-[130px]  outline-none px-2  py-1 bg-blue1"
                        placeholder="Search" type="text">
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- end::header -->

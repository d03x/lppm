<div class="grid space-y-3">
    <div class="">
        <div class="flex w-full gap-1 px-3 py-2 font-bold text-white rounded bg-warna1">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 48 48">
                <rect width="48" height="48" fill="none" />
                <g fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M12 21a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm0 2v2h2v-2zm6 0a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2zm2 0h2v2h-2zm8-2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm0 2v2h2v-2zm-18 8a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2zm4 0v2h-2v-2zm6-2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm2 2h-2v2h2z"
                        clip-rule="evenodd" />
                    <path
                        d="M36 32.5a1 1 0 1 0-2 0v2.914l1.293 1.293a1 1 0 0 0 1.414-1.414L36 34.586z" />
                    <path fill-rule="evenodd"
                        d="M12 7a1 1 0 1 1 2 0v5a1 1 0 1 0 2 0V9h10V7a1 1 0 1 1 2 0v5a1 1 0 1 0 2 0V9h3a3 3 0 0 1 3 3v16.07A7.001 7.001 0 0 1 35 42a6.99 6.99 0 0 1-5.745-3H9a3 3 0 0 1-3-3V12a3 3 0 0 1 3-3h3zm16 28a7 7 0 0 1 6-6.93V18H8v18a1 1 0 0 0 1 1h19.29a7 7 0 0 1-.29-2m12 0a5 5 0 1 1-10 0a5 5 0 0 1 10 0"
                        clip-rule="evenodd" />
                </g>
            </svg>
            <span class="font-bold">Agenda</span>
        </div>
        <div class="flex flex-col grid-cols-2 gap-2 mt-3 sm:grid-cols-1">
            @foreach (range(1, 5) as $item)
                <a href="">
                    <div
                        class="flex bg-gray-200 group hover:bg-warna1/10 transition-all hover:border-t-warna1 hover:text-warna1 border-t-gray-300 border-t-[3px] text-gray-800 p-2 rounded-lg items-center gap-3 agenda-item {{ $item == 1 ? 'active' : '' }}">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 24 24">
                                <rect width="24" height="24" fill="none" />
                                <g fill="none">
                                    <path fill="currentColor" fill-opacity="0.25" fill-rule="evenodd"
                                        d="M7 4.432c0-.155 0-.233-.05-.278c-.052-.045-.128-.035-.28-.015c-1.12.143-1.902.436-2.498 1.033C3 6.343 3 8.229 3 12c0 3.771 0 5.657 1.172 6.828C5.343 20 7.229 20 11 20h2c3.771 0 5.657 0 6.828-1.172C21 17.657 21 15.771 21 12c0-3.771 0-5.657-1.172-6.828c-.596-.597-1.378-.89-2.499-1.033c-.151-.02-.227-.03-.278.015C17 4.2 17 4.277 17 4.432V6.5a1.5 1.5 0 0 1-3 0V4.3c0-.141 0-.212-.044-.255C13.912 4 13.842 4 13.701 4H10.3c-.142 0-.212 0-.256.045C10 4.088 10 4.159 10 4.3v2.2a1.5 1.5 0 1 1-3 0z"
                                        clip-rule="evenodd" />
                                    <path stroke="currentColor" stroke-linecap="round"
                                        d="M8.5 2.5v4m7-4v4" />
                                    <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
                                    <circle cx="10.5" cy="10.5" r=".5" fill="currentColor" />
                                    <circle cx="13.5" cy="10.5" r=".5" fill="currentColor" />
                                    <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
                                    <circle cx="7.5" cy="13.5" r=".5" fill="currentColor" />
                                    <circle cx="10.5" cy="13.5" r=".5" fill="currentColor" />
                                    <circle cx="13.5" cy="13.5" r=".5" fill="currentColor" />
                                    <circle cx="16.5" cy="13.5" r=".5" fill="currentColor" />
                                    <circle cx="7.5" cy="16.5" r=".5" fill="currentColor" />
                                    <circle cx="10.5" cy="16.5" r=".5" fill="currentColor" />
                                    <circle cx="13.5" cy="16.5" r=".5" fill="currentColor" />
                                    <circle cx="16.5" cy="16.5" r=".5" fill="currentColor" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex gap-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24">
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
                                <span class="text-xs">5 Februari 2023 18:00 - Indonesia</span>
                            </div>
                            <a href="">
                                <p class="text-sm line-clamp-1 sm:line-clamp-4">
                                    {{ fake()->sentence(30) }}
                                </p>
                            </a>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <a href=""
            class="block w-full p-2 mt-4 text-sm text-center text-white rounded-lg bg-gradient-to-r from-red-500 bg-warna1 hover:bg-warna1/80">Lebih
            Banyak</a>
    </div>
    <div class="">
        <div class="flex items-center w-full gap-2 px-3 py-2 font-bold text-white rounded bg-warna1">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <rect width="20" height="20" fill="none" />
                    <path fill="currentColor"
                        d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6zm8 9v5H8l-1.67-5H5v-2h8v2z" />
                </svg>
            </span>
            <span class="font-bold">Pengumuman</span>
        </div>
        <div class="grid grid-cols-1 gap-2 mt-3">
            <ul class="flex flex-col">
                @foreach (range(0, 5) as $item)
                    <li class="text-sm">
                        <a href=""
                            class="flex items-start gap-2 p-2 transition-all border border-transparent rounded-lg hover:bg-warna1/10 hover:text-warna1 hover:border-warna1 hover:border text-neutral-800 group hover:bg-secondary">
                            <span class="animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <rect width="24" height="24" fill="none" />
                                    <g fill="none" fill-rule="evenodd">
                                        <path
                                            d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                        <path fill="orange"
                                            d="M19 4.741V8a3 3 0 1 1 0 6v3c0 1.648-1.881 2.589-3.2 1.6l-2.06-1.546A8.658 8.658 0 0 0 10 15.446v2.844a2.71 2.71 0 0 1-5.316.744l-1.57-5.496a4.7 4.7 0 0 1 3.326-7.73l3.018-.168a9.344 9.344 0 0 0 4.19-1.259l2.344-1.368C17.326 2.236 19 3.197 19 4.741M5.634 15.078l.973 3.407A.71.71 0 0 0 8 18.29v-3.01l-1.56-.087a4.723 4.723 0 0 1-.806-.115M17 4.741L14.655 6.11A11.343 11.343 0 0 1 10 7.604v5.819c1.787.246 3.488.943 4.94 2.031L17 17zM8 7.724l-1.45.08a2.7 2.7 0 0 0-.17 5.377l.17.015l1.45.08zM19 10v2a1 1 0 0 0 .117-1.993z" />
                                    </g>
                                </svg>
                            </span>
                            Penerimaan Proposal Penelitian Dan PkM DRTPM Tahun Anggaran 2024
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
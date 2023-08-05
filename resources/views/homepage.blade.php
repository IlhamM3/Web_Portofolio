<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font style --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&family=Poppins:,wght@1,300&display=swap" rel="stylesheet">
    {{-- css style and js--}}

    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ asset("logo/logo IM-09.png") }}">
    <title>MyProfile</title>
</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 px-5 mx-auto">
          <div class="flex items-center">
              <img src="{{ asset('logo/logo IM-09.png') }}" class="h-8 mr-1 sm:h-10 sm:mr-3 dark: " alt="Frontam Logo" />
              <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Ilham Maulana | Frontam</span>
          </div>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 font-medium bg-gray-200 border border-gray-400 rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <button class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" type="button">
                    <li>
                        <a href="homepage">Home</a>
                    </li>
                </button>

                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" type="button">
                    <li>
                        <a href="#">Blog</a>
                    </li>
                </button>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" type="button">
                    <li>
                        <a href="#">Portofolio</a>
                    </li>
                </button>
                <button class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" type="button">
                    <li>
                        <a href="#footer">Kontak</a>
                    </li>
                </button>
            </ul>
          </div>
        </div>
    </nav>


    {{-- CONTENT MAIN --}}

    <section class="bg-gray-200 dark:bg-gray-800" id="home-page">
        <div class="w-full max-w-screen-xl p-4 mx-auto lg:py-6">
            <div class="flex mt-8 mb-8 ml-8 sm:ml-14 sm:justify-between">
                <div class="mt-16 sm:mt-28 md:mt-32">
                    <h1 class="mb-5 text-xl font-extrabold leading-none tracking-tight text-gray-900 sm:mb-9 sm:text-3xl md:text-4xl lg:text-6xl dark:text-white">Hallo,<span class="text-blue-600 dark:text-blue-500"><br>i'm Ilham Maulana </span></h1>
                    <a href="#about" id="card-hover" class="inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg shadow-lg sm:px-5 sm:py-3 sm:text-base justify-left bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80">
                        tentang saya
                        <svg class=" w-3 h-3 sm:w-3.5 sm:h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                    </a>
                </div>
                <div class="sm:-mr-12 md:-mr-10 -mr-28">
                    <img class="mx-w-c max-w-c sm:max-w-sm sm:max-h-sm md:max-w-xl md:max-h-xl" src="{{ asset('img/Profile (1).png') }}" alt="">
                </div>
            </div>

            {{-- about me --}}

            <div id="about" class="mt-0 sm:mt-20">
                {{-- tentang saya --}}
                <div class="w-full text-center">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl text- dark:text-white">Deskripsi Diri</h1>
                    <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
                    <p class="mx-2 my-10 text-sm font-thin text-center text-gray-700 sm:font-normal sm:mx-16 dark:text-white sm:text-xl">Seorang pengembang frontend pemula yang bersemangat dari Cirebon, Indonesia. Saya memiliki minat untuk mengembangkan situs web sebagai full-stack Web developer. Saya memiliki keterampilan dalam html, dan css, tetapi bersedia untuk mempelajari apa pun yang diperlukan untuk menyelesaikan masalah secara efisien. Saya juga suka melakukan evaluasi pada diri saya sendiri untuk meningkatkan keterampilan dan pengetahuan. Fokus utama saya adalah membangun keterampilan, koneksi yang baik, dan pengetahuan. Saya akan melakukan yang terbaik dalam mengerjakan tugas yang diberikan dan menghargai kesempatan untuk belajar lebih banyak tentang pengembangan web.</p>
                </div>


                {{-- pengalaman organisasi --}}
                <div class="w-full text-center">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl dark:text-white">Pengalaman Organisasi</h1>
                    <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />

                    <div class="my-10">
                        <div class="flex justify-center">
                            <div class="grid grid-cols-1">
                                <div class="max-w-xl p-5 mb-10 bg-white border border-gray-900 rounded-lg shadow-lg sm:max-w-3xl shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-white">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="{{ asset('logo/secret.png') }}" class="w-12 h-12" alt="I-secret Logo"/>
                                            <h5 class="ml-3 text-lg font-semibold text-left text-gray-900 sm:text-2xl dark:text-white">I-Secret</h5>
                                        </div>
                                        <p class="font-bold text-gray-400 sm:text-base text-s dark:text-gray-300">  -Semarang, Indonesia</p>
                                        <p class="font-bold text-black sm:text-base text-s dark:text-white">Januari 2023 - Sekarang</p>
                                    </div>
                                    <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                    <h6 class="mt-2 text-base italic font-semibold text-left text-gray-800 sm:text-lg dark:text-white">Ketua Divisi Pemrograman</h6>
                                    <p class="text-xs font-semibold text-left text-gray-400 sm:text-sm dark:text-gray-300"">Underbow di bawah naungan Hima Ilkom Universitas Negeri Semarang.</p>
                                    <ul class="mt-3 ml-2 text-xs text-left list-disc list-inside sm:mt-2 sm:text-sm dark:text-white">
                                        <li>
                                            Bertanggung jawab untuk melaksanakan Latihan Pemrograman Rutin.
                                        </li>
                                        <li >
                                            Bertanggung jawab sebagai pemimpin tim untuk mengelola tim yang terdiri dari 12 orang.
                                        </li>
                                    </ul>
                                    <div class="flex justify-end mt-0 sm:mt-2">
                                        <a id="card-hover" href="https://www.instagram.com/isecretilkom/" target="_blank" class="flex justify-end mt-4 text-gray-500 hover:text-gray-900 dark:hover:text-white" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="max-w-xl p-5 bg-white border border-gray-900 rounded-lg shadow-lg sm:max-w-3xl shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-white">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="{{ asset('logo/ss.png') }}" class="w-12 h-12" alt="ss Logo"/>
                                            <h5 class="ml-3 text-lg font-semibold text-left text-gray-900 sm:text-2xl dark:text-white">Screenshot</h5>
                                        </div>
                                        <p class="font-bold text-gray-400 sm:text-base text-s dark:text-gray-300">  -Semarang, Indonesia</p>
                                        <p class="font-bold text-black sm:text-base text-s dark:text-white">Januari 2023 - Sekarang</p>
                                    </div>
                                    <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                    <h6 class="mt-2 text-base italic font-semibold text-left text-gray-800 sm:text-lg dark:text-white">Ketua Divisi Desain dan Animasi</h6>
                                    <p class="text-xs font-semibold text-left text-gray-400 sm:text-sm dark:text-gray-300"">Underbow di bawah naungan Hima Ilkom Universitas Negeri Semarang.</p>
                                    <ul class="mt-3 ml-2 text-xs text-left list-disc list-inside sm:mt-2 sm:text-sm dark:text-white">
                                        <li>
                                            Bertanggung jawab untuk mengimplementasikan Latihan desain.
                                        </li>
                                        <li >
                                            Bertanggung jawab sebagai pemimpin tim untuk mengelola tim yang terdiri dari 9 orang.
                                        </li>
                                    </ul>
                                    <div class="flex justify-end mt-0 sm:mt-4">
                                        <a id="card-hover" href="https://www.youtube.com/@screenshotilkom3422" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                            </svg>
                                        </a>
                                        <a id="card-hover" href="https://www.instagram.com/screenshotilkom/" target="_blank" class="ml-5 text-gray-500 hover:text-gray-900 dark:hover:text-white" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- riwayat akademi --}}
                <div class="mt-10">
                    <div class="items-center w-full text-center">
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Riwayat Pendidikan</h1>
                        <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
                    </div>
                    <div class="md:flex md:justify-around ">
                        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2">
                            <div class="flex justify-center m-10">
                                <div id="card-hover" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <img class="w-full h-56 rounded-t-lg" src="{{ asset('img/unnes.jpg') }}" alt="" />
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Universitas Negeri Semarang</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Gelar Sarjana Teknik Informatika</p>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Agustus 2021 - Sekarang</p>
                                        <a target="_blank" href="https://goo.gl/maps/tZjC4Bw9TXatYhnx9" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Location
                                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center m-10">
                                <div id="card-hover" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <img class="w-full h-56 rounded-t-lg" src="{{ asset('img/sma.png') }}" alt="" />
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SMA Negeri 7 Kota Cirebon</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ilmu Pengetahuan Alam</p>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Juli 2018 - Mei 2021</p>
                                        <a target="_blank" href="https://goo.gl/maps/HHZiLqhFLjTdyQ1b9" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Location
                                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                {{-- portofolio --}}
                <div class="w-full text-center mt-14" id="portofolio">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Portofolio</h1>
                        <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
                    </div>
                    <div  id="animation-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative overflow-hidden rounded-lg h-80 sm:h-p-md md:h-p-sm h-p">
                            <!-- Item 1 -->
                            <div class="hidden ease-linear delay-200" data-carousel-item>
                                <div class="grid grid-cols-2 gap-5 m-12 md:grid-cols-3 sm:gird-cols-2 md:gap-10 sm:justify-around sm:grid md:flex">
                                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="invisible w-full max-w-xs mt-10 bg-white border border-gray-200 rounded-lg shadow-lg sm:mt-0 shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700 md:visible sm:invisible">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden ease-linear delay-200" data-carousel-item>
                                <div class="grid grid-cols-2 gap-5 m-12 md:grid-cols-3 sm:gird-cols-2 md:gap-10 sm:justify-around sm:grid md:flex">
                                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="invisible w-full max-w-xs mt-10 bg-white border border-gray-200 rounded-lg shadow-lg sm:mt-0 shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700 md:visible sm:invisible">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full shadow-lg shadow-black dark:shadow-yellow-100" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full shadow-lg shadow-black dark:shadow-yellow-100" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        </div>
                        <!-- Slider controls -->
                        <button id="card-hover" type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-0 cursor-pointer sm:px-1 md:px-4 group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-md shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button id="card-hover" type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-0 cursor-pointer sm:px-1 md:px-4 group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-md shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>





                {{-- skill --}}
                <div class="w-full text-center mt-14">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Skill</h1>
                        <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
                    </div>

                    {{-- Hard Skill --}}
                    <div class="my-10">
                        <div class="flex justify-center">
                            <div class="grid grid-cols-1">
                                <div class="max-w-xl p-5 mb-10 bg-white border border-gray-200 rounded-lg shadow-lg sm:max-w-full shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <div class="flex">
                                        <h5 class="mt-2 text-lg font-semibold text-left text-gray-900 sm:text-2xl dark:text-white">Hard Skill</h5>
                                    </div>
                                    <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                    <div class="grid justify-around grid-cols-2 gap-5 mt-5 sm:grid-cols-3 md:grid-cols-5">

                                        {{-- section html --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-w dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <svg class="w-32 h-32 p-5 mx-c" viewBox="-52.5 0 361 361" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet"><path d="M255.555 70.766l-23.241 260.36-104.47 28.962-104.182-28.922L.445 70.766h255.11z" fill="#E44D26"/><path d="M128 337.95l84.417-23.403 19.86-222.49H128V337.95z" fill="#F16529"/><path d="M82.82 155.932H128v-31.937H47.917l.764 8.568 7.85 88.01H128v-31.937H85.739l-2.919-32.704zM90.018 236.542h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58l-.14.037-35.568-9.604-2.274-25.471z" fill="#EBEBEB"/><path d="M24.18 0h16.23v16.035h14.847V0h16.231v48.558h-16.23v-16.26H40.411v16.26h-16.23V0zM92.83 16.103H78.544V0h44.814v16.103h-14.295v32.455h-16.23V16.103h-.001zM130.47 0h16.923l10.41 17.062L168.203 0h16.93v48.558h-16.164V24.49l-11.166 17.265h-.28L146.35 24.49v24.068h-15.88V0zM193.21 0h16.235v32.508h22.824v16.05h-39.06V0z"/><path d="M127.89 220.573h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576H127.89v31.937zM127.89 155.854v.078h77.143l.64-7.178 1.456-16.191.763-8.568H127.89v31.86z" fill="#FFF"/></svg>
                                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Intermediate</h5>
                                                <ul class="max-w-md mt-3 ml-3 text-sm text-left text-gray-500 list-disc list-inside dark:text-gray-400">
                                                    <h5 class="mb-2 -ml-3 font-bold">Memahami:</h5>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Struktur dasar html.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Elemen sematik.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Teks dan paragraf.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Tautan dan Achor.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Gambar dan Media.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Formulir.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Elemen interaktif.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Responsive desain.
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>

                                        {{-- section css --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-w dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <svg class="w-32 h-32 p-5 mx-c" viewBox="-52.5 0 361 361" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M127.844 360.088L23.662 331.166.445 70.766h255.11l-23.241 260.36-104.47 28.962z" fill="#264DE4"/><path d="M212.417 314.547l19.86-222.49H128V337.95l84.417-23.403z" fill="#2965F1"/><path d="M53.669 188.636l2.862 31.937H128v-31.937H53.669zM47.917 123.995l2.903 31.937H128v-31.937H47.917zM128 271.58l-.14.037-35.568-9.604-2.274-25.471h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58z" fill="#EBEBEB"/><path d="M60.484 0h38.68v16.176H76.66v16.176h22.506v16.175H60.484V0zM106.901 0h38.681v14.066h-22.505v2.813h22.505v32.352h-38.68V34.46h22.505v-2.813H106.9V0zM153.319 0H192v14.066h-22.505v2.813H192v32.352h-38.681V34.46h22.505v-2.813H153.32V0z"/><path d="M202.127 188.636l5.765-64.641H127.89v31.937h45.002l-2.906 32.704H127.89v31.937h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576z" fill="#FFF"/></svg>
                                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Intermediate</h5>
                                                <ul class="max-w-md mt-3 ml-3 text-sm text-left text-gray-500 list-disc list-inside dark:text-gray-400">
                                                    <h5 class="mb-2 -ml-5 font-bold">Memahami:</h5>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Selektor.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Elemen sematik.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Teks dan paragraf.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Box Model.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Typography.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Transisi dan Animasi.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Transformasi.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Flexbox dan Grid.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Font Kustom.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Multiple Columns.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Responsive Web.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Pseudoelemen.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            CSS Frameworks (Tailwind/flowbite).
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>

                                        {{-- section figma --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-w dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <svg class="w-32 h-32 p-5 mx-c" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <g fill="none" fill-rule="evenodd" transform="translate(4)">
                                                    <circle cx="12" cy="12" r="4" fill="#19BCFE"/>
                                                    <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                    <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/>
                                                    <path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/>
                                                    <path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/>
                                                    </g>
                                                </svg>
                                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Intermediate</h5>
                                                <ul class="max-w-md mt-3 ml-3 text-sm text-left text-gray-500 list-disc list-inside dark:text-gray-400">
                                                    <h5 class="mb-2 -ml-5 font-bold">Memahami:</h5>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Tata Letak Figma.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Organisasi Desain.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Komponen.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Komponen Interaktif.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penyusunan Tata Letak.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Prototipe Interaktif.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penggunaan Prototipe.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Kolaborasi.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Masking.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penataan layout.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Desain sistem.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Kemampuan Desain.
                                                        </div>
                                                    </div>
                                                    <div class="flex mt-3 -ml-2">
                                                        <a id="card-hover" target="_blank" href="https://www.behance.net/frontam_" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                                                                <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z"/>
                                                            </svg>
                                                            <span class="sr-only">Behance account</span>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>

                                        {{-- section tailwind --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-w dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <svg class="w-32 h-32 p-5 mx-c" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 54 33"><g clip-path="url(#prefix__clip0)"><path fill="#38bdf8" fill-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z" clip-rule="evenodd"/></g><defs><clipPath id="prefix__clip0"><path fill="#fff" d="M0 0h54v32.4H0z"/></clipPath></defs></svg>
                                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Beginner</h5>
                                                <ul class="max-w-md mt-3 ml-3 text-sm text-left text-gray-500 list-disc list-inside dark:text-gray-400">
                                                    <h5 class="mb-2 -ml-5 font-bold">Memahami:</h5>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Utility-First CSS..
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Kelas CSS Tailwind.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Kustomisasi Konfigurasi.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Responsif dan Breakpoints.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Ekstensi dan Custom Utility.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Dark Mode.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penerapan Transisi dan Animasi.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penataan Tata Letak.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penggunaan Eksternal (Laravel).
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>

                                        {{-- section laravel --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-w dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <svg class="w-32 h-32 p-5 mx-c" viewBox="0 0 50 52" xmlns="http://www.w3.org/2000/svg"><title>Logomark</title><path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z" fill="#FF2D20" fill-rule="evenodd"/></svg>
                                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Beginner</h5>
                                                <ul class="max-w-md mt-3 ml-3 text-sm text-left text-gray-500 list-disc list-inside dark:text-gray-400">
                                                    <h5 class="mb-2 -ml-5 font-bold">Memahami:</h5>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            MVC Architecture.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Routing.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Blade Templating Engine.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Artisan Command.
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>

                                        {{-- section git --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-w dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <svg class="p-5 w-36 h-36 mx-c" xmlns="http://www.w3.org/2000/svg" width="292" height="92pt" viewBox="0 0 219 92"><defs><clipPath id="a"><path d="M159 .79h25V69h-25Zm0 0"/></clipPath><clipPath id="b"><path d="M183 9h35.371v60H183Zm0 0"/></clipPath><clipPath id="c"><path d="M0 .79h92V92H0Zm0 0"/></clipPath></defs><path style="stroke:none;fill-rule:nonzero;fill:#f03c2e;fill-opacity:1" d="M130.871 31.836c-4.785 0-8.351 2.352-8.351 8.008 0 4.261 2.347 7.222 8.093 7.222 4.871 0 8.18-2.867 8.18-7.398 0-5.133-2.961-7.832-7.922-7.832Zm-9.57 39.95c-1.133 1.39-2.262 2.87-2.262 4.612 0 3.48 4.434 4.524 10.527 4.524 5.051 0 11.926-.352 11.926-5.043 0-2.793-3.308-2.965-7.488-3.227Zm25.761-39.688c1.563 2.004 3.22 4.789 3.22 8.793 0 9.656-7.571 15.316-18.536 15.316-2.789 0-5.312-.348-6.879-.785l-2.87 4.613 8.526.52c15.059.96 23.934 1.398 23.934 12.968 0 10.008-8.789 15.665-23.934 15.665-15.75 0-21.757-4.004-21.757-10.88 0-3.917 1.742-6 4.789-8.878-2.875-1.211-3.828-3.387-3.828-5.739 0-1.914.953-3.656 2.523-5.312 1.566-1.652 3.305-3.305 5.395-5.219-4.262-2.09-7.485-6.617-7.485-13.058 0-10.008 6.613-16.88 19.93-16.88 3.742 0 6.004.344 8.008.872h16.972v7.394l-8.007.61"/><g clip-path="url(#a)"><path style="stroke:none;fill-rule:nonzero;fill:#f03c2e;fill-opacity:1" d="M170.379 16.281c-4.961 0-7.832-2.87-7.832-7.836 0-4.957 2.871-7.656 7.832-7.656 5.05 0 7.922 2.7 7.922 7.656 0 4.965-2.871 7.836-7.922 7.836Zm-11.227 52.305V61.71l4.438-.606c1.219-.175 1.394-.437 1.394-1.746V33.773c0-.953-.261-1.566-1.132-1.824l-4.7-1.656.957-7.047h18.016V59.36c0 1.399.086 1.57 1.395 1.746l4.437.606v6.875h-24.805"/></g><g clip-path="url(#b)"><path style="stroke:none;fill-rule:nonzero;fill:#f03c2e;fill-opacity:1" d="M218.371 65.21c-3.742 1.825-9.223 3.481-14.187 3.481-10.356 0-14.27-4.175-14.27-14.015V31.879c0-.524 0-.871-.7-.871h-6.093v-7.746c7.664-.871 10.707-4.703 11.664-14.188h8.27v12.36c0 .609 0 .87.695.87h12.27v8.704h-12.965v20.797c0 5.136 1.218 7.136 5.918 7.136 2.437 0 4.96-.609 7.047-1.39l2.351 7.66"/></g><g clip-path="url(#c)"><path style="stroke:none;fill-rule:nonzero;fill:#f03c2e;fill-opacity:1" d="M89.422 42.371 49.629 2.582a5.868 5.868 0 0 0-8.3 0l-8.263 8.262 10.48 10.484a6.965 6.965 0 0 1 7.173 1.668 6.98 6.98 0 0 1 1.656 7.215l10.102 10.105a6.963 6.963 0 0 1 7.214 1.657 6.976 6.976 0 0 1 0 9.875 6.98 6.98 0 0 1-9.879 0 6.987 6.987 0 0 1-1.519-7.594l-9.422-9.422v24.793a6.979 6.979 0 0 1 1.848 1.32 6.988 6.988 0 0 1 0 9.88c-2.73 2.726-7.153 2.726-9.875 0a6.98 6.98 0 0 1 0-9.88 6.893 6.893 0 0 1 2.285-1.523V34.398a6.893 6.893 0 0 1-2.285-1.523 6.988 6.988 0 0 1-1.508-7.637L29.004 14.902 1.719 42.187a5.868 5.868 0 0 0 0 8.301l39.793 39.793a5.868 5.868 0 0 0 8.3 0l39.61-39.605a5.873 5.873 0 0 0 0-8.305"/></g></svg>
                                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Beginner</h5>
                                                <ul class="max-w-md mt-3 ml-3 text-sm text-left text-gray-500 list-disc list-inside dark:text-gray-400">
                                                    <h5 class="mb-2 -ml-5 font-bold">Memahami:</h5>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Instalasi dan Konfigurasi Git.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Inisialisasi Repositor.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Commit dan Versioning.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Remote Repositories.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Push dan Pull.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Branching.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Merge dan Rebase.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Pull Requests.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Kolaborasi.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Undo Changes.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Forking Repositorie.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Clone Repositorie.
                                                        </div>
                                                    </div>
                                                    <div class="flex mt-3 -ml-3">
                                                        <a id="card-hover" target="_blank" href="https://github.com/IlhamM3" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </ul>

                                            </div>
                                        </div>

                                        {{-- section canva --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-w dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <svg class="p-5 w-36 h-36 mx-c" viewBox="0 0 508 508" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><g transform="matrix(.26718 0 0 .26718 0 0)"><circle cx="950" cy="950" r="950" fill="#7d2ae7"/><circle cx="950" cy="950" r="950" fill="url(#prefix___Radial1)"/><circle cx="950" cy="950" r="950" fill="url(#prefix___Radial2)"/><circle cx="950" cy="950" r="950" fill="url(#prefix___Radial3)"/><circle cx="950" cy="950" r="950" fill="url(#prefix___Radial4)"/></g><path d="M446.744 276.845c-.665 0-1.271.43-1.584 1.33-4.011 11.446-9.43 18.254-13.891 18.254-2.563 0-3.6-2.856-3.6-7.336 0-11.21 6.71-34.982 10.095-45.82.392-1.312.646-2.485.646-3.483 0-3.15-1.722-4.696-5.987-4.696-4.598 0-9.547 1.8-14.36 10.233-1.663-7.435-6.691-10.683-13.715-10.683-8.12 0-15.965 5.224-22.421 13.696-6.456 8.471-14.048 11.25-19.76 9.88 4.108-10.057 5.634-17.57 5.634-23.145 0-8.746-4.324-14.028-11.308-14.028-10.624 0-16.747 10.134-16.747 20.797 0 8.237 3.736 16.708 11.954 20.817-6.887 15.573-16.943 29.66-20.758 29.66-4.93 0-6.379-24.123-6.105-41.38.176-9.9.998-10.408.998-13.401 0-1.722-1.115-2.896-5.595-2.896-10.448 0-13.676 8.844-14.165 18.998a50.052 50.052 0 01-1.8 11.406c-4.363 15.573-13.363 27.39-19.232 27.39-2.72 0-3.463-2.72-3.463-6.28 0-11.21 6.28-25.219 6.28-37.173 0-8.784-3.854-14.34-11.112-14.34-8.55 0-19.858 10.173-30.56 29.229 3.521-14.595 4.97-28.721-5.459-28.721a14.115 14.115 0 00-6.476 1.683 3.689 3.689 0 00-2.113 3.56c.998 15.535-12.521 55.329-25.336 55.329-2.328 0-3.463-2.524-3.463-6.593 0-11.23 6.691-34.943 10.056-45.801.43-1.409.666-2.622.666-3.678 0-2.974-1.84-4.5-6.007-4.5-4.578 0-9.547 1.741-14.34 10.174-1.683-7.435-6.711-10.683-13.735-10.683-11.523 0-24.397 12.19-30.051 28.076-7.572 21.208-22.832 41.692-43.375 41.692-18.645 0-28.486-15.515-28.486-40.03 0-35.392 25.982-64.308 45.253-64.308 9.215 0 13.617 5.869 13.617 14.869 0 10.897-6.085 15.964-6.085 20.112 0 1.272 1.057 2.524 3.15 2.524 8.374 0 18.234-9.841 18.234-23.262 0-13.422-10.897-23.243-30.168-23.243-31.851 0-63.898 32.047-63.898 73.113 0 32.673 16.121 52.374 44 52.374 19.017 0 35.628-14.79 44.588-32.047 1.018 14.302 7.513 21.776 17.413 21.776 8.804 0 15.925-5.243 21.364-14.458 2.094 9.645 7.65 14.36 14.87 14.36 8.275 0 15.201-5.243 21.794-14.986-.097 7.65 1.644 14.85 8.276 14.85 3.13 0 6.867-.725 7.533-3.464 6.984-28.877 24.24-52.453 29.523-52.453 1.565 0 1.995 1.507 1.995 3.287 0 7.846-5.537 23.928-5.537 34.2 0 11.092 4.716 18.43 14.459 18.43 10.8 0 21.775-13.227 29.092-32.556 2.29 18.058 7.24 32.633 14.987 32.633 9.508 0 26.392-20.014 36.625-41.203 4.01.509 10.036.372 15.827-3.717-2.465 6.241-3.912 13.07-3.912 19.897 0 19.663 9.39 25.18 17.47 25.18 8.785 0 15.907-5.243 21.365-14.458 1.8 8.315 6.398 14.34 14.85 14.34 13.225 0 24.71-13.519 24.71-24.612 0-2.934-1.252-4.715-2.72-4.715zm-274.51 18.547c-5.342 0-7.435-5.38-7.435-13.401 0-13.93 9.528-37.193 19.604-37.193 4.402 0 6.065 5.185 6.065 11.524 0 14.145-9.059 39.07-18.235 39.07zm182.948-41.574c-3.189-3.796-4.343-8.961-4.343-13.559 0-5.673 2.074-10.467 4.558-10.467 2.485 0 3.248 2.446 3.248 5.85 0 5.693-2.035 14.008-3.463 18.176zm41.418 41.574c-5.34 0-7.434-6.182-7.434-13.401 0-13.441 9.528-37.193 19.682-37.193 4.402 0 5.967 5.146 5.967 11.524 0 14.145-8.902 39.07-18.215 39.07z" fill="#fff" fill-rule="nonzero"/><defs><radialGradient id="prefix___Radial1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="scale(1469.491) rotate(-49.416 1.37 .302)"><stop offset="0" stop-color="#6420ff"/><stop offset="1" stop-color="#6420ff" stop-opacity="0"/></radialGradient><radialGradient id="prefix___Radial2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(54.703 42.717 594.194) scale(1657.122)"><stop offset="0" stop-color="#00c4cc"/><stop offset="1" stop-color="#00c4cc" stop-opacity="0"/></radialGradient><radialGradient id="prefix___Radial3" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1023 -1030 473.711 470.491 367 1684)"><stop offset="0" stop-color="#6420ff"/><stop offset="1" stop-color="#6420ff" stop-opacity="0"/></radialGradient><radialGradient id="prefix___Radial4" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(595.999 1372 -2298.41 998.431 777 256)"><stop offset="0" stop-color="#00c4cc" stop-opacity=".73"/><stop offset="0" stop-color="#00c4cc"/><stop offset="1" stop-color="#00c4cc" stop-opacity="0"/></radialGradient></defs></svg>
                                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Intermediate</h5>
                                                <ul class="max-w-md mt-3 ml-3 text-sm text-left text-gray-500 list-disc list-inside dark:text-gray-400">
                                                    <h5 class="mb-2 -ml-5 font-bold">Memahami:</h5>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Antarmuka Pengguna Canva.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Menggunakan Template.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Menggunakan Gambar dan Ilustrasi.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penggunaan Warna.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Aksesibilitas.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penggunaan Grid dan Ruler.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Menerbitkan di Sosial Media.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Menerapkan Prinsip Desain.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Membuat desain Banner, Iklan, Poster, instagram konten.
                                                        </div>
                                                    </div>
                                                    <div class="flex mt-3 -ml-8">
                                                        <a id="card-hover" href="https://instagram.com/dgrafisham?igshid=MzRlODBiNWFlZA==" target="_blank" class="ml-5 text-gray-500 hover:text-gray-900 dark:hover:text-white" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>


                                        {{-- section adobe ilustrator --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-w dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <svg class="p-5 w-36 h-36 mx-c" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 240 234">
                                                    <path fill="#300" d="M42.5 0h155C221 0 240 19 240 42.5v149c0 23.5-19 42.5-42.5 42.5h-155C19 234 0 215 0 191.5v-149C0 19 19 0 42.5 0z"/>
                                                    <path fill="#ff9a00" d="M116 140H78.8l-7.6 23.5c-.2.9-1 1.5-1.9 1.4H50.5c-1.1 0-1.4-.6-1.1-1.8l32.2-92.7c.3-1 .6-2.1 1-3.3.4-2.1.6-4.3.6-6.5-.1-.5.3-1 .8-1.1h25.9c.8 0 1.2.3 1.3.8l36.5 103c.3 1.1 0 1.6-1 1.6h-20.9c-.7.1-1.4-.4-1.6-1.1L116 140zm-31.4-20.3H110c-.6-2.1-1.4-4.6-2.3-7.2-.9-2.7-1.8-5.6-2.7-8.6-1-3.1-1.9-6.1-2.9-9.2s-1.9-6-2.7-8.9c-.8-2.8-1.5-5.4-2.2-7.8H97c-.9 4.3-2 8.6-3.4 12.9-1.5 4.8-3 9.8-4.6 14.8-1.4 5.1-2.9 9.8-4.4 14zM170 77c-3.3.1-6.5-1.2-8.9-3.5-2.3-2.5-3.5-5.8-3.4-9.2-.1-3.4 1.2-6.6 3.6-8.9s5.6-3.5 8.9-3.5c3.9 0 6.9 1.2 9.1 3.5 2.2 2.4 3.4 5.6 3.3 8.9.1 3.4-1.1 6.7-3.5 9.2-2.3 2.4-5.7 3.7-9.1 3.5zm-11.2 86.8v-77c0-1 .4-1.4 1.3-1.4h19.8c.9 0 1.3.5 1.3 1.4v77c0 1.1-.4 1.6-1.3 1.6h-19.6c-1 0-1.5-.6-1.5-1.6z"/>
                                                </svg>
                                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Intermediate</h5>
                                                <ul class="max-w-md mt-3 ml-3 text-sm text-left text-gray-500 list-disc list-inside dark:text-gray-400">
                                                    <h5 class="mb-2 -ml-5 font-bold">Memahami:</h5>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Antarmuka Pengguna.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Vektor.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penggunaan Alat Desain.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penataan Tata Letak (Layout).
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Warna dan Gradien.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Pathfinder.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Desain Logo.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Clipping Mask.
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-0.5">
                                                        <li></li>
                                                        <div>
                                                            Penggunaan Pen Tool.
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Soft Skill --}}
                                <div class="max-w-xl p-5 mb-10 bg-white border border-gray-200 rounded-lg shadow-lg sm:max-w-full shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <div class="flex">
                                        <h5 class="mt-2 text-lg font-semibold text-left text-gray-900 sm:text-2xl dark:text-white">Soft Skill</h5>
                                    </div>
                                    <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                    <div class="grid grid-cols-2 mt-5 text-lg text-left text-gray-500 list-disc list-inside border-gray-500 sm:grid-cols-3 gap-x-5 sm:gap-x-7 md:gap-x-10 gap-y-5 dark:text-gray-400">

                                        {{-- Kepemimpinan --}}
                                        <div  class="bg-white border border-gray-200 rounded-lg shadow mx-w-xl dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <h1 class="mt-1 mb-1 ml-3 text-xl font-semibold text-gray-900 dark:text-white">Kepemimpinan</h1>
                                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                            </div>
                                            <ul class="max-w-md ml-5 -mt-1 text-base text-gray-500 list-disc list-inside dark:text-gray-400">
                                                <h6 class="mb-2 -ml-3 font-bold">Memiliki Kemampuan:</h6>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        membuat kesepakatan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Manajemen Konflik.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Resolusi Konflik.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Memberikan masukan yang jelas.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Mengawasi.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Manajemen pertemuan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Pengambilan Keputusan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Memotivasi.
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>

                                        {{-- Komunikasi --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-xl dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <h1 class="mt-1 mb-1 ml-3 text-xl font-semibold text-gray-900 dark:text-white">Komunikasi</h1>
                                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                            </div>
                                            <ul class="max-w-md ml-5 -mt-1 text-base text-gray-500 list-disc list-inside dark:text-gray-400">
                                                <h6 class="mb-2 -ml-3 font-bold">Memiliki Kemampuan:</h6>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Pendengar yang baik.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Komunikasi nonverbal.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Membaca bahasa tubuh.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Bercerita.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Keterampilan sosial
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Persuasi.
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>

                                        {{-- Adaptasi --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-xl dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <h1 class="mt-1 mb-1 ml-3 text-xl font-semibold text-gray-900 dark:text-white">Adaptasi</h1>
                                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                            </div>
                                            <ul class="max-w-md ml-5 -mt-1 text-base text-gray-500 list-disc list-inside dark:text-gray-400">
                                                <h6 class="mb-2 -ml-3 font-bold">Memiliki Kemampuan:</h6>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Disiplin.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Fleksibilitas.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Analisis.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Ketenangan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Fokus.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Organisasi.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Pemikiran terbuka.
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>

                                        {{-- Kerja Tim --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-xl dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <h1 class="mt-1 mb-1 ml-3 text-xl font-semibold text-gray-900 dark:text-white">Kerja Tim</h1>
                                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                            </div>
                                            <ul class="max-w-md ml-5 -mt-1 text-base text-gray-500 list-disc list-inside dark:text-gray-400">
                                                <h6 class="mb-2 -ml-3 font-bold">Memiliki Kemampuan:</h6>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Menerima Masukan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kolaborasi.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kesadaran akan keanekaragaman seseorang.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Menghadapi situasi rumit
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Empati.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kesadaran diri.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kecerdasan emosional.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Membangun tim.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kemampuan sosial.
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>

                                        {{-- Etos Kerja --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-xl dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <h1 class="mt-1 mb-1 ml-3 text-xl font-semibold text-gray-900 dark:text-white">Etos Kerja</h1>
                                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                            </div>
                                            <ul class="max-w-md ml-5 -mt-1 text-base text-gray-500 list-disc list-inside dark:text-gray-400">
                                                <h6 class="mb-2 -ml-3 font-bold">Memiliki Kemampuan:</h6>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Perhatian.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Patuh tenggat.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Berorientasi pada hasil.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Mengikuti arahan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Tekun.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Gigih.
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>

                                        {{-- Berfikir Kritis --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-xl dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <h1 class="mt-1 mb-1 ml-3 text-xl font-semibold text-gray-900 dark:text-white">Berfikir Kritis</h1>
                                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                            </div>
                                            <ul class="max-w-md ml-5 -mt-1 text-base text-gray-500 list-disc list-inside dark:text-gray-400">
                                                <h6 class="mb-2 -ml-3 font-bold">Memiliki Kemampuan:</h6>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kreatif.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Keinginan untuk Belajar lebih.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Berfikir sebelum bertindak.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Toleransi terhadap perubahan dan perbedaan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Berfikir logis.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Observasi sekitar.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Mengamati untuk beradaptasi.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Penyelesaian masalah yang baik.
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>

                                        {{-- Sikap Positif --}}
                                        <div class="bg-white border border-gray-200 rounded-lg shadow mx-w-xl dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-3">
                                                <h1 class="mt-1 mb-1 ml-3 text-xl font-semibold text-gray-900 dark:text-white">Sikap Positif</h1>
                                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                            </div>
                                            <ul class="max-w-md ml-5 -mt-1 text-base text-gray-600 list-disc list-inside dark:text-gray-400">
                                                <h6 class="mb-2 -ml-3 font-bold">Memiliki Kemampuan:</h6>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        <p class="font-semibold text-black dark:text-white"> Memegang Teguh Agama.</p>
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kejujuran.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kesabaran.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Keramahan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Rasa Hormat.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kejenakaan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kesopanan.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Kerja Sama.
                                                    </div>
                                                </div>
                                                <div class="flex mb-0.5">
                                                    <li></li>
                                                    <div>
                                                        Semangat.
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- blog --}}
                <div class="w-full text-center mt-14" id="blog">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">My Blog</h1>
                        <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
                    </div>
                    <div id="animation-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative overflow-hidden rounded-lg h-80 sm:h-p-md md:h-p-sm h-b">
                            <!-- Item 1 -->
                            <div class="hidden ease-linear delay-200" data-carousel-item>
                                <div class="grid grid-cols-2 gap-5 m-12 md:grid-cols-3 sm:gird-cols-2 md:gap-10 sm:justify-around sm:grid md:flex">
                                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg sm:max-w-xss md:max-w-xs shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Blog</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Blog</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="invisible w-full max-w-xs mt-10 bg-white border border-gray-200 rounded-lg shadow-lg sm:mt-0 shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700 md:visible sm:invisible">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Blog</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden ease-linear delay-200" data-carousel-item>
                                <div class="grid grid-cols-2 gap-5 m-12 md:grid-cols-3 sm:gird-cols-2 md:gap-10 sm:justify-around sm:grid md:flex">
                                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Blog</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Blog</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="invisible w-full max-w-xs mt-10 bg-white border border-gray-200 rounded-lg shadow-lg sm:mt-0 shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700 md:visible sm:invisible">
                                        <img class="w-full rounded-t-lg" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                        <div class="px-5 pb-5">
                                            <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Blog</h5>
                                            <p class="text-sm dark:text-white">Deskripsi Singkat</p>
                                            <button id="card-hover" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80" type="button">
                                                <a class="flex">
                                                    Selengkapnya
                                                    <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full shadow-lg shadow-black dark:shadow-yellow-100" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full shadow-lg shadow-black dark:shadow-yellow-100" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        </div>
                        <!-- Slider controls -->
                        <button id="card-hover" type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-0 cursor-pointer sm:px-1 md:px-4 group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-md shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button id="card-hover" type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-0 cursor-pointer sm:px-1 md:px-4 group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-md shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- FOOTER MAIN --}}

    <footer id="footer" class="px-5 bg-white dark:bg-gray-900">
        <hr class="border-gray-300 sm:mx-auto dark:border-gray-900" />
        <div class="w-full max-w-screen-xl p-4 mx-auto lg:py-8">
            <div class="mr-10 md:flex md:justify-between">
                {{-- kiri --}}
                 <div class="mb-6 mr md:mb-0">
                    <div class="flex">
                        <img src="{{ asset('logo/logo IM-09.png') }}" class="h-8 mr-3" alt="Frontam Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ilham Maulana | Frontam</span>
                    </div>
                </div>
              {{-- kanan --}}
                <div class="grid sm:grid-cols-2">
                    <div class="mb-6">
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">kontak</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a target="_blank" href="https://wa.me/087700748860" class="hover:underline ">Whatsapp</a>
                            </li>
                            <li class="mb-4">
                                <a target="_blank" href="mailto: ilhammaulana05303005@gmail.com" class="hover:underline ">Email</a>
                            </li>
                            <li class="mb-4">
                                <a target="_blank" href="http://www.linkedin.com/in/ilham-maulana-05er4" class="hover:underline ">Linkedin</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://discord.gg/Gt6ECDtV" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Send Message</h2>
                        <form  action="https://formspree.io/f/xjvqgagp" method="POST">
                            <div class="w-64 md:grid-cols-2">
                                <label>
                                    <input type="text" name="nama" id="first_name" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                                </label>
                                <label>
                                    <textarea name="message" id="message" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" cols="10" rows="2" placeholder="Pesan..." required></textarea>
                                </label>
                                <div>
                                    <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
          </div>
            <hr class="my-6 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="m-2 sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Ilham Maulana™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-5 md:flex md:justify-between sm:justify-center sm:mt-0">

                    {{-- button darkmode --}}
                    <div>
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" class=" mt-2 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 ">admi</button>
                    </div>
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>


                    {{-- footer konten kontak --}}
                    <div class="flex mt-5 space-x-5 md:flex md:justify-between sm:justify-center sm:mt-0">
                        <div class="flex space-x-5 sm:flex sm:justify-between sm:items-center">
                            <a target="_blank" href="https://github.com/IlhamM3" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">GitHub account</span>
                            </a>
                            <a target="_blank" href="https://instagram.com/hmm_ilam?igshid=MzRlODBiNWFlZA==" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                                <span class="sr-only">Instagram account</span>
                            </a>
                            <a target="_blank" href="https://www.behance.net/frontam_" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                                    <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z"/>
                                </svg>
                                <span class="sr-only">Behance account</span>
                            </a>
                        </div>
                    </div>
              </div>
          </div>
        </div>
    </footer>
    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <img src="{{ asset('img/maintenance.png') }}" alt="maintenance" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                    <h3 class="mb-5 text-lg font-normal text-gray-500 uppercase dark:text-gray-400">Mohon Maaf Page Dalam Masa Pengembangan</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

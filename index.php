<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SKPB ITS</title>
    <link rel="icon" href="dist/img/component/Logo_SKPB-biru.png">
    <link rel="stylesheet" href="dist/output.css">
</head>


<body>

<?php    

require 'components/header.php';

?>


    <!-- Hero Section Start -->
    <section id="home" class="pt-40 pb-8 xl:pt-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-8 xl:px-6 mb-4  lg:w-1/2">
                    <h1 class="font-semibold  text-primary text-4xl xl:text-6xl">Selamat Datang</h1>
                    <h2 class="font-semibold  text-dark text-2xl lg:text-3xl">SKPB-Facility</h2>

                    <br>

                    <p class="font-medium  text-dark  leading-relaxed ">
                        Sistem pelayanan penggunaan fasilitas ITS yang dinaungi Subdirektorat Perkuliahan Bersama (SKPB) Direktorat Pendidikan ITS</p>
                    <p class="font-medium text-dark  leading-relaxed  ">Layanan Kami :
                        <li class="mx-5">
                            Peminjaman ruangan untuk kepentingan insidentil.
                        </li>
                        <li class="mx-5 pb-12">
                            Peminjaman ruangan untuk keperluan perkuliahan selama satu semester.
                        </li>
                    </p>

                    <div>
                        <a href="cekstatus.php" class=" text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg
                    hover:opacity-80 transition duration-300 ease-in-out">Cek Status Peminjaman</a>
                    </div>

                    <div class="mt-8"><a href="peminjaman.php" style="margin-top: 10px !important" class="text-base font-semibold text-primary bg-white border border-blue-900 py-3 px-8 rounded-full hover:shadow-lg
                    hover:opacity-80 transition duration-300 ease-in-out">Pinjam Ruangan Sekarang!</a></div>

                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class=" relative mt-8 right-0 lg:mt-5 lg:right-0">
                        <img src="dist/img/component/welcome.png" alt="E-Facilty ITS" class=" max-w-full mx-auto" />

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Carousel -->
    <section id="carouselberanda" class="pt-24 pb-24 bg-slate-200">
        <div class="max-w-3xl mx-auto ">

            <div id="default-carousel" class="sticky" data-carousel="static">

                <div class="overflow-hidden relative h-96 rounded-lg ">

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                        <img src="dist/img/component/tw1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="dist/img/component/tower2.jpeg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="dist/img/component/perpus.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="dist/img/component/teater.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                </div>


                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                </div>

                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Anterior</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Siguiente</span>
                    </span>
                </button>

                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Siguiente</span>
                    </span>
                </button>
            </div>


            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>

    </section>

    <!-- Carousel End -->


    <!-- Rincian Ruangan Start -->
    <section id="rincianruangan" class="pt-16 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-2xl text-primary mb-2">Rincian Ruangan</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Ruangan di SKPB ITS</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat necessitatibus possimus velit veniam.</p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4  md:w-1/2 lg:w-1/4   ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/component/tw1.jpg" alt="Tower 1" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="#" class=" text-center block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Gedung Tower 1</a> <p class=" text-base  text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, consequatur!</p>
                            <a href="cardclasstw1.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4  md:w-1/2 lg:w-1/4  "> 
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/component/tower2.jpeg" alt="Tower 2" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="#" class="text-center block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Gedung Tower 2</a></h3>
                            <p class="font-medium  text-base text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, consequatur!</p>
                            <a href="cardclasstw2.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4  md:w-1/2 lg:w-1/4   ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/component/teater.jpg" alt="Teater" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="cardclassteater.php" class="text-center block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Teater </a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, consequatur!</p>
                            <a href="cardclassteater.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4  md:w-1/2 lg:w-1/4    ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/component/perpus.jpg" alt="Perpustakaan" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="cardclassperpustakaan.php" class=" text-center block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Perpustakaan </a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, consequatur!</p>
                            <a href='cardclassperpustakaan.php' class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- Rincuan Ruangan End -->

    <!-- Rincian Ruangan Slider TW 1 -->
    <!-- <section id="rincianruangan" class="pt-10 pb-10 bg-slate-300">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-6">
                <h3 class="font-bold text-2xl text-dark mb-2">Gedung Tower 1</h3>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/12 flex items-center">
                <div class="w-full text-right">
                    <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="sliderContainer" class="w-10/12 overflow-x: auto;">
                <ul id="slider" class="flex w-full">
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-201</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-202</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-203</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_36.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-204</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 36 kursi</p>
                            <a href="cardclasstw1_36.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-205</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-206</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-301</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-302</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-303</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_36.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-304</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 36 kursi</p>
                            <a href="cardclasstw1_36.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-305</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-306</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-501</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-502</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-503</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_36.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-504</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 36 kursi</p>
                            <a href="cardclasstw1_36.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-505</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_40.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-506</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-601</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-602</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-603</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_36.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-604</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 36 kursi</p>
                            <a href="cardclasstw1_36.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-605</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_40.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-606</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw1_40.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-701</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-702</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-703</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_36.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-704</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 36 kursi</p>
                            <a href="cardclasstw1_36.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-705</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_40.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-706</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw1_40.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-801</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-802</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-803</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_36.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-804</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 36 kursi</p>
                            <a href="cardclasstw1_36.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_80.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-805</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/ruangkelas/ruangtw1.png" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw1_40.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW1-806</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw1_40.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="w-1/12 flex items-center">
                <div class="w-full">
                    <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </section> -->
    <!-- Rincuan Ruangan Slider TW 1 End -->

    <!-- Rincian Ruangan Slider TW 2 -->
    <!-- <section id="rincianruangan2" class="pt-10 pb-10 bg-slate-300 ">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-4">
                <h3 class="font-bold text-2xl text-dark mb-2">Gedung Tower 2</h3>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/12 flex items-center">
                <div class="w-full text-right">
                    <button onclick="prev2()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="sliderContainer2" class="w-10/12 overflow-x: auto;">
                <ul id="slider2" class="flex w-full">
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/tower2.jpeg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw2.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW2-401</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 20 kursi</p>
                            <a href="cardclasstw2.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/tower2.jpeg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw2.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW2-402</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw2.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/tower2.jpeg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw2.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW2-403</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw2.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/tower2.jpeg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw2.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW2-404</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw2.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/tower2.jpeg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw2.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW2-405</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw2.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/tower2.jpeg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclasstw2.php" class="block  font-bold text-xl text-dark hover:text-primary ">TW2-406</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclasstw2.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-1/12 flex items-center">
                <div class="w-full">
                    <button onclick="next2()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </section> -->
    <!-- Rincuan Ruangan Slider TW 2 End -->

    <!-- Rincian Ruangan Slider Teater -->
    <!-- <section id="rincianruangan3" class="pt-10 pb-10 bg-slate-300">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-4">
                <h3 class="font-bold text-2xl text-dark mb-2">Teater</h3>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/12 flex items-center">
                <div class="w-full text-right">
                    <button onclick="prev3()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="sliderContainer3" class="w-10/12 overflow-x: auto;">
                <ul id="slider3" class="flex w-full">
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/teater/teaterb_2.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassteatera.php" class="block  font-bold text-xl text-dark hover:text-primary ">Teater A</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 148 Kursi</p>
                            <a href="cardclassteatera.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/teater/teaterb_1.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassteaterb.php" class="block  font-bold text-xl text-dark hover:text-primary ">Teater B</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 150 kursi</p>
                            <a href="cardclassteaterb.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/teater/teaterc_1.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassteaterc.php" class="block  font-bold text-xl text-dark hover:text-primary ">Teater C</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 150 kursi</p>
                            <a href="cardclassteaterc.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="w-1/12 flex items-center">
                <div class="w-full">
                    <button onclick="next3()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </section> -->
    <!-- Rincuan Ruangan Slider Teater End -->


    <!-- Rincian Ruangan Perpustakaan-->
    <!-- <section id="rincianruangan4" class="pt-10 pb-10 bg-slate-300 ">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-4">
                <h3 class="font-bold text-2xl text-dark mb-2">Perpustakaan</h3>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/12 flex items-center">
                <div class="w-full text-right">
                    <button onclick="prev4()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="sliderContainer4" class="w-10/12 overflow-x: auto;">
                <ul id="slider4" class="flex w-full">
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white ">
                            <img src="img/perpustakaan.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassperpustakaan.php" class="block  font-bold text-xl text-dark hover:text-primary ">Library 1</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclassperpustakaan.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white">
                            <img src="img/perpustakaan.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassperpustakaan.php" class="block  font-bold text-xl text-dark hover:text-primary ">Library 2</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclassperpustakaan.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white">
                            <img src="img/perpustakaan.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassperpustakaan.php" class="block  font-bold text-xl text-dark hover:text-primary ">IT-604</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 50 kursi</p>
                            <a href="cardclassperpustakaan.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white">
                            <img src="img/perpustakaan.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassperpustakaan.php" class="block  font-bold text-xl text-dark hover:text-primary ">IT-605</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclassperpustakaan.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white">
                            <img src="img/perpustakaan.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassperpustakaan.php" class="block  font-bold text-xl text-dark hover:text-primary ">IT-606</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 35 kursi</p>
                            <a href="cardclassperpustakaan.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                    <li class="w-72 p-3">
                        <div class="border rounded-xl p-5 bg-white">
                            <img src="img/perpustakaan.jpg" alt="Tower 1" class="h-50 w-full object-cover rounded-md mb-3" />
                            <a href="cardclassperpustakaan.php" class="block  font-bold text-xl text-dark hover:text-primary ">IT-608</a>
                            <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 40 kursi</p>
                            <a href="cardclassperpustakaan.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-1/12 flex items-center">
                <div class="w-full">
                    <button onclick="next4()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </section> -->
    <!-- Rincian Ruangan Perpustakaan End -->

    <?php    

    require 'components/footer.php';
    
    ?>

        <!-- <script src="dist/js/slider.js"></script> -->
    <script src="dist/js/script.js"></script>
    <script src="dist/js/slider-index.js"></script>
    <script type="module" src="script.js"></script>
</body>

</html>

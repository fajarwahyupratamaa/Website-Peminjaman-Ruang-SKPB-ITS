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

    <!-- Carousel -->
   <section id="carouseltw1" class="pt-48 pb-16">
    <div class="max-w-3xl mx-auto ">

        <div id="default-carousel" class="sticky" data-carousel="static">
         
            <div class="overflow-hidden relative h-96 rounded-lg ">
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="dist/img/tower_1/lantai_6/606-2.webp" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="dist/img/tower_1/lantai_6/601.webp" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="dist/img/tower_1/lantai_7/704-2.webp" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
    
                
            </div>
            
            
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                
            </div>
           
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Anterior</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Siguiente</span>
                </span>
            </button>
    
            
        </div>
    
        
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

   </section>

   <!-- Carousel End -->
    
<!-- List Semua Ruangan Start -->
   
        
<section id="rincianruangantw1a" class="pt-10 pb-10 bg-slate-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h2 class="font-bold text-primary text-3xl mb-4 sm:text-4xl lg:text-5xl">Ruangan di Tower 1</h2>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full px-4  sm:w-1/2 md:w-1/3  text-center ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                    <div class="py-8 px-6">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tower 1 Lantai 2</h3>
                            <p class=" text-base text-secondary mb-6"> 
                            <ul>
                                <li >
                                    TW1-201 
                                </li>
                                <li >
                                    TW1-202
                                </li> 
                                <li >
                                    TW1-203
                                </li> 
                                <li >
                                    TW1-204
                                </li> 
                                <li>
                                    TW1-205
                                </li>
                                <li class="mx-5 ">
                                    TW1-206
                                </li> 
                            </ul>
                            </p>
                    </div>
                </div>
            </div>


            <div class="w-full px-4 sm:w-1/2  md:w-1/3 text-center  ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10  ">
                    <div class="py-8 px-6  ">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary  truncate">Tower 1 Lantai 3</h3>
                            <p class=" text-base text-secondary mb-6">
                                <ul>
                                <li class="mx-5">
                                    TW1-301 
                                </li>
                                <li class="mx-5">
                                    TW1-302
                                </li> 
                                <li class="mx-5 ">
                                    TW1-303
                                </li> 
                                <li class="mx-5 ">
                                    TW1-304
                                </li> 
                                <li class="mx-5 ">
                                    TW1-305
                                </li> 
                                <li class="mx-5 ">
                                    TW1-306
                                </li> 
                                </ul>
                            </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 sm:w-1/2  md:w-1/3 text-center  ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10  ">
                    <div class="py-8 px-6  ">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary  truncate">Tower 1 Lantai 4</h3>
                            <p class=" text-base text-secondary mb-6">
                                <ul>
                                <li class="mx-5">
                                    TW1-401 
                                </li>
                                <li class="mx-5">
                                    TW1-402
                                </li> 
                                <li class="mx-5 ">
                                    TW1-403
                                </li> 
                                <li class="mx-5 ">
                                    TW1-404
                                </li> 
                                <li class="mx-5 ">
                                    TW1-405
                                </li> 
                                <li class="mx-5 ">
                                    TW1-406
                                </li> 
                                </ul>
                            </p>
                    </div>
                </div>
            </div>


            <div class="w-full px-4 sm:w-1/2 md:w-1/3  text-center ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                    <div class="py-8 px-6">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tower 1 Lantai 5</h3>
                            <p class=" text-base text-secondary mb-6"> 
                                <ul>
                                <li class="mx-5">
                                    TW1-501 
                                </li>
                                <li class="mx-5">
                                    TW1-502
                                </li> 
                                <li class="mx-5 ">
                                    TW1-503
                                </li> 
                                <li class="mx-5 ">
                                    TW1-504
                                </li> 
                                <li class="mx-5 ">
                                    TW1-505
                                </li>
                                <li class="mx-5 ">
                                    TW1-506
                                </li>  
                                </ul>
                            </p>
                    </div>
                </div>
            </div>


            <div class="w-full px-4 sm:w-1/2 md:w-1/3  text-center ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                    <div class="py-8 px-6">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tower 1 Lantai 6</h3>
                            <p class=" text-base text-secondary mb-6"> 
                                <ul>
                                <li class="mx-5">
                                    TW1-601 
                                </li>
                                <li class="mx-5">
                                    TW1-602
                                </li> 
                                <li class="mx-5 ">
                                    TW1-603
                                </li> 
                                <li class="mx-5">
                                    TW1-604
                                </li>
                                <li class="mx-5 ">
                                    TW1-605
                                </li> 
                                <li class="mx-5 ">
                                    TW1-606
                                </li> 
                                </ul>
                            </p>
                    </div>
                </div>
            </div>


            <div class="w-full px-4 sm:w-1/2 md:w-1/3  text-center ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                    <div class="py-8 px-6">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tower 1 Lantai 7</h3>
                            <p class=" text-base text-secondary mb-6"> 
                                <ul>
                                <li class="mx-5">
                                    TW1-701 
                                </li>
                                <li class="mx-5">
                                    TW1-702
                                </li> 
                                <li class="mx-5 ">
                                    TW1-703
                                </li> 
                                <li class="mx-5">
                                    TW1-704
                                </li>
                                <li class="mx-5 ">
                                    TW1-705
                                </li> 
                                <li class="mx-5 ">
                                    TW1-706
                                </li> 
                                </ul>
                            </p>
                    </div>
                </div>
            </div>


            <div class="w-full px-4 sm:w-1/2 md:w-1/3  text-center ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                    <div class="py-8 px-6">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tower 1 Lantai 8</h3>
                            <p class=" text-base text-secondary mb-6"> 
                                <ul>
                                <li class="mx-5">
                                    TW1-801 
                                </li>
                                <li class="mx-5">
                                    TW1-802
                                </li> 
                                <li class="mx-5 ">
                                    TW1-803
                                </li> 
                                <li class="mx-5">
                                    TW1-804
                                </li>
                                <li class="mx-5 ">
                                    TW1-805
                                </li> 
                                <li class="mx-5 ">
                                    TW1-806
                                </li> 
                                </ul>
                            </p>
                    </div>
                </div>
            </div>


            <div class="w-full px-4 sm:w-1/2  md:w-1/3 text-center  ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10  ">
                    <div class="py-8 px-6  ">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary  truncate">Tower 1 Lantai 9</h3>
                            <p class=" text-base text-secondary mb-6">
                                <ul>
                                <li class="mx-5">
                                    TW1-901 
                                </li>
                                <li class="mx-5">
                                    TW1-902
                                </li> 
                                <li class="mx-5 ">
                                    TW1-903
                                </li> 
                                <li class="mx-5 ">
                                    TW1-904
                                </li> 
                                <li class="mx-5 ">
                                    TW1-905
                                </li> 
                                <li class="mx-5 ">
                                    TW1-906
                                </li> 
                                </ul>
                            </p>
                    </div>
                </div>
            </div>


            <div class="w-full px-4 sm:w-1/2  md:w-1/3 text-center  ">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10  ">
                    <div class="py-8 px-6  ">
                        <h3 class="block mb-3 font-semibold text-xl text-dark hover:text-primary  truncate">Tower 1 Lantai 10</h3>
                            <p class=" text-base text-secondary mb-6">
                                <ul>
                                <li class="mx-5">
                                    TW1-1001 
                                </li>
                                <li class="mx-5">
                                    TW1-1002
                                </li> 
                                <li class="mx-5 ">
                                    TW1-1003
                                </li> 
                                <li class="mx-5 ">
                                    TW1-1004
                                </li> 
                                <li class="mx-5 ">
                                    TW1-1005
                                </li> 
                                <li class="mx-5 ">
                                    TW1-1006
                                </li> 
                                </ul>
                            </p>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>










   <!-- Card Ruangan Start -->
        
    <section id="rincianruanganbersamatw1" class="pt-10 pb-10  bg-slate-300">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h3 class="font-semibold md:text-2xl xl:text-3xl text-dark mb-2">Rincian Ruangan Bersama di Tower 1</h3>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 sm:w-1/3 md:w-1/3   ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/tower_1/lantai_2/203-2.webp" alt="Tower 1" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary ">Ruangan Bersama Tower 1  </a> 
                                <p class=" text-base font-semibold text-secondary mb-6"> Kapasitas : 80 kursi</p>
                            <a href="cardclasstw1_80.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                

                <div class="w-full px-4 sm:w-1/3 md:w-1/3   ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/tower_1/lantai_6/606-2.webp" alt="Teater" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary "> Ruangan Bersama Tower 1 </a></h3>
                            <p class=" text-base font-semibold text-secondary mb-6">Kapasitas : 40 kursi</p>
                            <a href="cardclasstw1_40.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>


                <div class="w-full px-4 sm:w-1/3 md:w-1/3  "> 
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/tower_1/lantai_7/704-2.webp" alt="Tower 2" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary "> Ruangan Bersama Tower 1 </a></h3>
                            <p class=" text-base font-semibold text-secondary mb-6 ">Kapasitas : 36 kursi 
                                
                            </p>
                            <a href="cardclasstw1_36.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    

   <!-- Card Ruangan End -->

   <?php    

require 'components/footer.php';

?>
    <script src="dist/js/script.js"></script>
    <script type="module" src="script.js"></script>
</body>
</html>
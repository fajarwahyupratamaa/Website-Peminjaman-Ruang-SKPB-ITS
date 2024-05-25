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
   <section id="carouselteater" class="pt-48 pb-16">
    <div class="max-w-3xl mx-auto ">

        <div id="default-carousel" class="sticky" data-carousel="static">
         
            <div class="overflow-hidden relative h-96 rounded-lg ">
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="dist/img/teater/teatera-4.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="dist/img/teater/teaterb-3.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="dist/img/teater/teaterc-2.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
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
    
   <!-- Card Ruangan Start -->
        
    <section id="rincianruangantetaer" class="pt-10 pb-10 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h3 class="font-semibold text-xl text-primary mb-2">Rincian Ruangan di Teater</h3>
                    
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat necessitatibus possimus velit veniam.</p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4  md:w-1/3   ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/teater/teatera-4.jpg" alt="Tower 1" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="cardclassteatera.php" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Teater A</a> <p class=" text-base text-secondary mb-6">
                                    Kapasitas : 148 kursi</p>
                            <a href="cardclassteatera.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                

                <div class="w-full px-4  md:w-1/3   ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/teater/teaterb-3.jpg" alt="Teater" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="cardclassteaterb.php" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Teater B</a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Kapasitas : 150 kursi</p>
                            <a href="cardclassteaterb.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>


                <div class="w-full px-4  md:w-1/3  "> 
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                        <img src="dist/img/teater/teaterc-2.jpg" alt="Tower 2" class="w-96 h-36"/>

                        <div class="py-8 px-6">
                            <h3 >
                                <a href="cardclassteaterc.php" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Teater C</a></h3>
                            <p class="font-medium text-base text-secondary mb-6 ">Kapasitas : 150 kursi 
                                
                            </p>
                            <a href="cardclassteaterc.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 ">Baca Selengkapnya</a>
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
    <script src="dist/js/slider-teater.js"></script>
    <script type="module" src="script.js"></script>
</body>
</html>
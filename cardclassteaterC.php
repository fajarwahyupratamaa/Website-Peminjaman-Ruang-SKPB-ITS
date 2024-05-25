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
   <section id="carouselteaterc" class="pt-48 pb-16">
    <div class="max-w-3xl mx-auto ">

        <div id="default-carousel" class="sticky" data-carousel="static">
         
            <div class="overflow-hidden relative h-96 rounded-lg ">
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="dist/img/teater/teaterc-2.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="dist/img/teater/teaterc-3.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="dist/img/teater/teaterc-1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
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

<!-- Tentang Start -->
<section id="about" class="bg-slate-300">
    <div class="container">
    <div class="mx-auto pt-16 pb-16">
    <h2 class="font-bold mb-5 md:text-3xl lg:text-4xl ">Tentang</h2>
    <p class="mx-auto text-justify ">Untuk mendukung kegiatan seminar/konferensi, pertemuan, workshop, pelatihan dan lain-lain sejenisnya, Direktorat Sarana dan Prasarana memberikan pelayanan peminjaman Ruang/Gedung dan Area sesuai peruntukkannya dan sesuai dengan ketentuan yang berlaku. 
        Ruang/Gedung dan Area hanya dapat dipinjam oleh civitas akademika ITS atau instansi yang telah memiliki kerjasama dengan ITS.</p>
   
    </div>
    </div>
</section>

<!-- Tentang End -->


   <!-- Fasilitas Start -->
<section id="fasilitas" class=" pt-24 pb-12">
    <div class="container">
        <h2 class="font-bold mb-8 md:text-3xl lg:text-4xl ">Fasilitas</h2>
        <div class="flex flex-wrap mx-auto">


            <div class="w-full px-4 mb-12  text-dark font-medium md:w-1/3">

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/chair.svg"  alt="lcdprojector" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black  text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">150 Kursi</p>
                </div>

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/ac.svg"  alt="lcdprojector" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Air Conditioner</p>
                </div>

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/cctv.svg"  alt="cctv" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">CCTV</p>
                </div>


            </div>

            <div class="w-full px-4 mb-12  text-dark font-medium md:w-1/3">
                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/projector.svg"  alt="lcdprojector" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">LCD projector</p>
                </div>
                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/internet.svg"  alt="internet" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Internet Kecepatan Tinggi</p>
                </div>
                
            
            </div>

            <div class="w-full px-4 mb-12  text-dark font-medium md:w-1/3">
                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/speaker.svg"  alt="speaker" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black  text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Speaker</p>
                </div>

                <div class=" flex flex-wrap mb-5">
                    <img src="dist/img/fasilitas/mic.svg"  alt="lcdprojector" width="20" class="fill-current w-12 h-8 mr-9 rounded-full flex justify-center items-center
                     border-dark ring-1 ring-black text-primary hover:border-primary hover:bg-primary hover:text-white">
                    <p class=" font-bold text-dark  px-2  rounded-lg hover:bg-slate-400">Mic</p>
                </div>

               
            
            </div>



            
        </div>

        
    </div>
</section>
<!-- Fasilitas End -->


<?php    

require 'components/footer.php';

?>

    <script src="dist/js/script.js"></script>
    <script type="module" src="script.js"></script>
</body>
</html>
 <style>
     .tombol {
         margin-top: 12px !important;
     }
 </style>

 <!-- Navbar -->
 <!-- Header Start -->
 <header class="bg-white opacity-85 fixed top-0 left-0 w-full flex items-center z-10"style="height: 100px;">
     <div class="container">
         <div class="flex items-center justify-between relative ">
             <div class="px-4">
                 <a class="navbar-brand " href="index.php">
                     <img src="dist/img/component/Logo_SKPB-biru.png" alt="logoskpbbiru" width="125" class="d-inline-block">
                 </a>
             </div>
             <div class="flex items-center px-4">

                 <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden ">
                     <span class="hamburger-line transition duration-300 ease-in-out origin-top-left "></span>
                     <span class="hamburger-line transition duration-300 ease-in-out"></span>
                     <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                 </button>

                 <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                     <ul class=" lg:flex">
                         <li class="group">
                             <a href="index.php" class="hover:font-bold  hover:text-blue-900 text-2-xl text-dark py-3 mx-4 xl:mx-8 flex group-hover:text-primary ">Beranda</a>
                         </li>

                         <!-- <li class="group">
                             <a href="#rincianruangan" class="hover:font-bold  hover:text-blue-900 text-base text-dark py-2 mx-8 flex group-hover:text-primary ">Rincian Ruangan</a>
                         </li> -->
                         <div @click.away="open = false" class="relative" x-data="{ open: false }">
                             <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                             <button @click="open = !open" class="hover:font-bold  hover:text-blue-900 text-2-xl text-dark py-3 mx-4 xl:mx-8 flex group-hover:text-primary ">
                                 <span>Gedung</span>
                                 <svg style="margin-top: 4px !important;" fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                     <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                 </svg>
                             </button>
                             <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                 <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                     <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="cardclasstw1.php">Tower 1</a>
                                     <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="cardclasstw2.php">Tower 2</a>
                                     <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="cardclassperpustakaan.php">Perpustakaan</a>
                                     <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="cardclassteater.php">Teater</a>
                                    </div>
                             </div>
                         </div>

                         <li class="group">
                             <a target="_blank" href="https://drive.google.com/file/d/11_OqzUNwCv9FVzDQQhy0KkPmHDobn0sc/view?usp=drivesdk" class="hover:font-bold  hover:text-blue-900 text-base text-dark py-3 mx-4 xl:mx-8 flex group-hover:text-primary ">Panduan</a>
                         </li>
                         <li class="group">
                             <a href="utilitas.php" class="hover:font-bold  hover:text-blue-900 text-base text-dark py-3 mx-4 xl:mx-8 flex group-hover:text-primary ">Utilitas Ruang</a>
                         </li>
                         <li class="group">
                             <a href="cekstatus.php" class=" hover:font-bold  hover:text-blue-900 text-base text-dark py-3 mx-4 xl:mx-8 flex group-hover:text-primary ">Cek Status</a>
                         </li>
                         <!-- <li class="group">
                            <a href='form.html' class="text-base text-dark py-2 mx-8 flex group-hover:text-primary ">Form Peminjaman</a> 
                         </li> -->

                         <li class="group tombol">
                             <a href="peminjaman.php" class="hover:font-bold mx-4 xl:mx-8 text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg
                                hover:opacity-80 transition duration-300 ease-in-out">Form Peminjaman</a>
                         </li>

                     </ul>
                 </nav>


             </div>
         </div>
     </div>
 </header>

 <!-- Header End -->
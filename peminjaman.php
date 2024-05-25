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


<!-- Form Utama Start -->
    <section id="formutama" class="my-20 pt-32 pb-16 ">
        <div class="container">
            <div class="w-full px-4 lg:w-1/2 lg:mx-auto">
                <div class="w-full px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter">
                    <div class="max-w-xl mx-auto text-center mt-6 mb-10">
                        <h4 class="font-bold text-3xl text-dark mt-6 ">FORM PEMINJAMAN RUANG</h4>
                    </div>
                    <form>
                        <div class="w-full px-4 mb-8 ">
                        <h2 class="mb-4"><i>Silakan kunjungi halaman <a href="utilitas.php" class="text-primary">Utilitas Ruang</a></i></h2>
                            <label for="keperluan">
                            <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Keperluan Peminjaman</span>
                                <select id="keperluan" name="keperluan" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" >
                                    <option value="" disabled selected hidden>Pilih Keperluan Peminjaman</option>        
                                    <option value="form1/step1.php">Kegiatan Insidentil</option>
                                    <option value="form2/step1.php">Perkuliahan Selama Satu Semester</option>
                                    
                                </select>
                            </label> 
                        </div>
                        

                        <div class="w-full px-4 mb-6 flex justify-end">
                            <a href="#" onclick="redirectToSelected()" class=" text-base font-semibold text-white bg-primary py-3 px-6 rounded-xl hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Selanjutnya</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Form Utama End -->

  
    <?php    

require 'components/footer.php';

?>



    </div>
  </div>

</form>
<script src="dist/js/script.js"></script>
<script>
    function redirectToSelected() {
      // Mendapatkan nilai terpilih
      var selectedValue = document.getElementById("keperluan").value;

      // Menentukan URL berdasarkan nilai terpilih (dengan asumsi file dalam folder yang sama)
      var redirectURL = selectedValue;

      // Mengarahkan pengguna ke halaman yang sesuai
      if (redirectURL !== '') {
        window.location.href = redirectURL;
      }
    }
  </script>

</body>
</html>
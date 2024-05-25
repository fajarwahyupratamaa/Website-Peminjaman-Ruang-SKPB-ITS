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
    <section id="formutama" class="my-20 pt-20 pb-16">
        <div class="container">
            <div class="w-full px-4 lg:w-5/5 lg:mx-auto"> <!-- Adjusted width to 4/5 of the parent -->
                <div class="w-full px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter">
                    <div class="max-w-xl mx-auto text-center mt-6 mb-6">
                        <h4 class="font-bold text-3xl text-dark mt-6">Utilitas Ruangan SKPB</h4>
                    </div>
                    <form>
                        <div class="w-full px-4 mb-4">
                            <label for="tahun">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Tahun</span>
                                <select id="tahun" class="bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary w-full"> <!-- Added w-full class -->
                                    <!-- <option value="" disabled selected hidden>Pilih Tahun</option> -->
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </label>
                        </div>
                        <div class="w-full px-4 mb-4">
                            <label for="bulan">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Bulan</span>
                                <select id="bulan" class="bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary w-full"> <!-- Added w-full class -->
                                <!-- <option value="" disabled selected hidden>Pilih Bulan</option>     -->
                                <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                    <!-- Other options -->
                                </select>
                            </label>
                        </div>
                        <div class="w-full px-4 mb-4">
                            <label for="minggu">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Minggu Ke-</span>
                                <select id="minggu" class="bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary w-full"> <!-- Added w-full class -->
                                <!-- <option value="" disabled selected hidden>Pilih Minggu</option>    -->
                                <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <!-- Other options -->
                                </select>
                            </label>
                        </div>
                    </form>

                    

                    <div id="tabel" class="mt-4">
                        <!-- Kolom tanggal akan diisi menggunakan PHP -->
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <script src="your-script.js"></script>

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const tahunDropdown = document.getElementById("tahun");
                            const bulanDropdown = document.getElementById("bulan");
                            const mingguDropdown = document.getElementById("minggu");
                            const terapkanButton = document.getElementById("terapkan");
                            const tabelContainer = document.getElementById("tabel");

                            function updateTable() {
                                // Dapatkan nilai dari dropdown filter
                                const selectedTahun = tahunDropdown.value;
                                const selectedBulan = bulanDropdown.value;
                                const selectedMinggu = mingguDropdown.value;

                                // Kirim permintaan AJAX ke skrip PHP
                                $.ajax({
                                    url: 'utilitas-script.php',
                                    type: 'GET',
                                    data: {
                                        tahun: selectedTahun,
                                        bulan: selectedBulan,
                                        minggu: selectedMinggu
                                    },
                                    success: function(response) {
                                        tabelContainer.innerHTML = response;
                                    },
                                    error: function() {
                                        console.log('Gagal mendapatkan data dari PHP.');
                                    }
                                });
                            }

                            // Panggil updateTable saat nilai dropdown berubah atau tombol "Terapkan" ditekan
                            tahunDropdown.addEventListener("change", updateTable);
                            bulanDropdown.addEventListener("change", updateTable);
                            mingguDropdown.addEventListener("change", updateTable);

                            // Inisialisasi tabel saat halaman dimuat
                            updateTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Utama End -->

    <?php
    require 'components/footer.php';
    ?>
        <script src="dist/js/script.js"></script>

</body>

</html>
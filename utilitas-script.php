<?php
// Periksa apakah kunci sudah ada sebelum mencoba mengaksesnya
$tahun = isset($_GET['tahun']) ? $_GET['tahun'] : null;
$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : null;
$minggu = isset($_GET['minggu']) ? $_GET['minggu'] : null;


$firstDayOfMonth = date("Y-m-01", strtotime("$tahun-$bulan-01"));
$firstDayOfWeek = date('w', strtotime($firstDayOfMonth));

$firstSundayOfMonth = strtotime('first sunday of ' . $tahun . '-' . $bulan);
$firstSundayOfMonth = date('d', $firstSundayOfMonth);


if ($minggu == 1) {
    $startDay = 1;
    $endDay = $firstSundayOfMonth;
} else {
    $startDay = 2 + (7 - $firstDayOfWeek) + (($minggu - 2) * 7);

    if ($startDay > date('t', strtotime("$tahun-$bulan"))) {
        $startDay = date('t', strtotime("$tahun-$bulan"));
    }

    $endDay = $startDay + 6;

    if ($endDay > date('t', strtotime("$tahun-$bulan"))) {
        $endDay = date('t', strtotime("$tahun-$bulan"));
    }
}

$tanggalAwal = date("Y-m-d", strtotime("$tahun-$bulan-$startDay"));
$tanggalAkhir = date("Y-m-d", strtotime("$tahun-$bulan-$endDay"));




$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'booking_system';

$koneksi = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Buat HTML untuk menampilkan tabel
$html = "<div class=''>";
$html .= "<div class='bg-white overflow-hidden shadow-md rounded-lg'>";
$html .= "<div class='px-4 py-2'>";
$html .= "<h2 class='text-lg'><b>Tabel Utilitas</b> (Scroll Ke samping)</h2>";
$html .= "<h2 class='text-lg'>Keterangan:</h2>";
$html .= "<div class='grid grid-cols-2 justify-center items-center lg:flex lg:flex-wrap lg:justify-start px-4'>"; 
$html .= "<div class='px-1 py-1 m-1 text-center'> <span class='inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-base font-bold ring-1 ring-inset ring-slate-600 text-slate-600'>Mata Kuliah SKPB</span></div>";
$html .= "<div class='px-1 py-1 m-1 text-center'><span class='inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-base font-bold ring-1 ring-inset ring-yellow-400 text-yellow-400'>Peminjaman Disetujui</span></div>";
$html .= "<div class='px-1 py-1 m-1 text-center'><span class='inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-base font-bold ring-1 ring-inset ring-yellow-700 text-yellow-700'>Peminjaman Insidentil Terverifikasi</span></div>";
$html .= "<div class='px-1 py-1 m-1 text-center'> <span class='inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-base font-bold ring-1 ring-inset ring-green-600 text-green-600'>Peminjaman 1 Semester Terverifikasi</span></div>";
$html .= "</div>";
$html .= "</div>";
$html .= "<div class='overflow-x-auto'>";
$html .= "<table class='table-auto min-w-full table-bordered mt-4 text-xs'>";
$html .= "<tr>";
$html .= "<th class='border text-base border-gray-400 px-4 py-2'rowspan='2'>No</th>";
$html .= "<th class='border text-base border-gray-400 px-4 py-2'rowspan='2'>Gedung</th>";
$html .= "<th class='border text-base border-gray-400 px-4 py-2'rowspan='2'>Lantai</th>";
$html .= "<th class='border text-base border-gray-400 px-4 py-2'rowspan='2'>Kode Ruang</th>";
$html .= "<th class='border text-base border-gray-400 px-4 py-2'rowspan='2'>Kapasitas</th>";

$jumlahHariMingguIni = $endDay - $startDay + 1;

// Tampilkan th untuk setiap tanggal dalam rentang $tanggalAwal hingga $tanggalAkhir
$currentDate = $tanggalAwal;
while (strtotime($currentDate) <= strtotime($tanggalAkhir)) {
    $formattedDate = date("l, d F Y", strtotime($currentDate));
    $html .= "<th class='border text-base border-gray-400 px-4 py-2' colspan='6'>$formattedDate</th>";
    $currentDate = date("Y-m-d", strtotime("$currentDate + 1 day"));
}


$html .= "</tr>";

$html .= "<tr>";
for ($i = 0; $i < $jumlahHariMingguIni * 6; $i++) {
    $html .= "<th class='border border-gray-400 text-base px-4 py-2'style='white-space: nowrap; text-align: center;'>Sesi " . (($i % 6) + 1) . "</th>";
}
$html .= "</tr>";


// Ambil data ruangan dari database
$sqlRuangan = "SELECT * FROM ruangan";
$resultRuangan = $koneksi->query($sqlRuangan);

if ($resultRuangan->num_rows > 0) {
    $no = 1;

    while ($rowRuangan = $resultRuangan->fetch_assoc()) {
        $html .= "<tr>";
        $html .= "<td class='border text-base border-gray-400 px-4 py-2'style='white-space: nowrap; text-align: center;'>$no</td>";
        $html .= "<td class='border text-base border-gray-400 px-4 py-2'style='white-space: nowrap; text-align: center;'>{$rowRuangan['gedung']}</td>";
        $html .= "<td class='border text-base border-gray-400 px-4 py-2'style='white-space: nowrap; text-align: center;'>{$rowRuangan['lantai']}</td>";
        $html .= "<td class='border text-base border-gray-400 px-4 py-2'style='white-space: nowrap; text-align: center;'>{$rowRuangan['nama_ruangan']}</td>";
        $html .= "<td class='border text-base border-gray-400 px-4 py-2'style='white-space: nowrap; text-align: center;'>{$rowRuangan['kapasitas']}</td>";

        for ($i = 0; $i < $jumlahHariMingguIni; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                $tanggal = date("Y-m-d", strtotime("$tanggalAwal + $i days"));
                $sqlPengajuan = "SELECT * FROM pengajuan2 WHERE ruangan = '{$rowRuangan['nama_ruangan']}' AND tanggal = '$tanggal' AND sesi$j = 1 AND status != 'Ditolak' AND status != 'Menunggu Persetujuan'";
                $resultPengajuan = $koneksi->query($sqlPengajuan);

                // Periksa apakah data sesuai dengan ruangan, tanggal, dan sesi yang sedang diproses
                if ($resultPengajuan->num_rows > 0) {
                    $rowPengajuan = $resultPengajuan->fetch_assoc();
                    $status = $rowPengajuan['status'];
                    $statusColor = '';

                    // Memilih warna teks berdasarkan status
                    switch ($status) {
                        case 'Disetujui':
                            $statusColor = 'text-yellow-400';
                            $statusring = 'ring-yellow-400';
                            break;
                        case 'Terverifikasi':
                            // Memeriksa nilai kolom jenis untuk menentukan warna
                            if ($rowPengajuan['jenis'] == 'insidentil') {
                                $statusColor = 'text-yellow-700';  // Warna kuning untuk jenis insidentil
                                $statusring = 'ring-yellow-700';
                            } else {
                                $statusColor = 'text-green-600'; // Warna hijau untuk jenis semester
                                $statusring = 'ring-green-600';
                            } 
                            break;
                        case 'Kelas SKPB':
                            $statusColor = 'text-slate-600';
                            $statusring = 'ring-slate-600';
                            break;
                        default:
                            continue 2; // Skip to the next iteration of the outer loop
                    }

                    // Tampilkan nama acara sesuai dengan sesi, tanggal, dan ruangan yang benar
                    $html .= "<td class='border border-gray-400 px-4 py-2'><span class='inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-base font-bold ring-2 ring-inset $statusring $statusColor' style='text-align: center;'>{$rowPengajuan['nama_acara']}</span></td>";
                } else {
                    $html .= "<td class='border border-gray-400 text-base px-4 py-2' style='text-align: center;'> - </td>";
                }
            }
        }

        $html .= "</tr>";
        $no++;
    }
} else {
    $html .= "<tr><td class='border border-gray-400 px-4 py-2' colspan='11'>Tidak ada data ruangan.</td></tr>";
}


$html .= "</table> </div>";
$html .= "</div>";
$html .= "</div>";

// Kembalikan HTML
echo $html;

// Tutup koneksi
$koneksi->close();
?>

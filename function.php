<?php

$db = mysqli_connect("localhost", "root", "", "booking_system");

function upload_ktp()
{
    $namaFile = $_FILES['foto_ktp']['name'];
    $ukuranFile = $_FILES['foto_ktp']['size'];
    $tmpName = $_FILES['foto_ktp']['tmp_name'];

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'pdf'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('Format file KTP/KTM tidak valid!');
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if ($ukuranFile > 2000000) {
            echo "<script>
                    alert('Ukuran file lebih dari 2 MB!');
                </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'pengelola/dist/img/ktm/' . $namaFileBaru);

        return $namaFileBaru;
    
}

function upload_surat_skpb()
{
    $namaFile = $_FILES['surat_skpb']['name'];
    $ukuranFile = $_FILES['surat_skpb']['size'];
    $error = $_FILES['surat_skpb']['error'];
    $tmpName = $_FILES['surat_skpb']['tmp_name'];

    if($error===4){
        return "";
    }
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'pdf'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('Format file surat SKPB tidak valid!');
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if ($ukuranFile > 2000000) {
            echo "<script>
                    alert('Ukuran file surat SKPB lebih dari 2 MB!');
                </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'pengelola/dist/img/surat_skpb/' . $namaFileBaru);

        return $namaFileBaru;
    
}

function upload_surat_sarpras(){
    $namaFile = $_FILES['surat_sarpras']['name'];
    $ukuranFile = $_FILES['surat_sarpras']['size'];
    $error = $_FILES['surat_sarpras']['error'];
    $tmpName = $_FILES['surat_sarpras']['tmp_name'];

    if($error===4){
        return "";
    }
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'pdf'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('Format file surat sarpras tidak valid!');
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if ($ukuranFile > 2000000) {
            echo "<script>
                    alert('Ukuran file Surat Sarpras lebih dari 2 MB!');
                </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'pengelola/dist/img/surat_sarpras/' . $namaFileBaru);

        return $namaFileBaru;
    
}
function up_surat_skpb($data){
    global $db;

    $kode_peminjaman = $_GET["kode_peminjaman"];

    $surat_skpb = upload_surat_skpb();
    
    if(!$surat_skpb){
        return false;
    }

    // Ubah query untuk hanya memasukkan surat_sarpras dan surat_skpb
    $query = "UPDATE pengajuan2 SET 
                surat_skpb = '$surat_skpb'
              WHERE kode_peminjaman = '$kode_peminjaman'";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function up_surat_sarpras($data){
    global $db;

    $kode_peminjaman = $_GET["kode_peminjaman"];

    $surat_sarpras = upload_surat_sarpras();
    
    if(!$surat_sarpras){
        return false;
    }

    // Ubah query untuk hanya memasukkan surat_sarpras dan surat_sarpras
    $query = "UPDATE pengajuan2 SET 
                surat_sarpras = '$surat_sarpras'
              WHERE kode_peminjaman = '$kode_peminjaman'";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
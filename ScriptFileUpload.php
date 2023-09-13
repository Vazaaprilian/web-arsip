<?php
    include 'functions.php';

    $rak = $_POST['kode_rak'];
    $box = $_POST['kode_box'];
    $ord = $_POST['kode_ordner'];
    $arsip = $_POST['kode_arsip'];
    $akun = $_POST['no_akun'];
    $berkas = $_FILES['Berkas']['name'];
    $bidang = $_POST['bidang'];
    $sub = $_POST['sub_bidang'];
    $kegiatan = $_POST['kegiatan'];
    $tahun = $_POST['tahun'];
    $status = $_POST['status_arsip'];
    $file_tmp = $_FILES['Berkas']['tmp_name'];

    $dirUpload = 'pdf/';
    $linkberkas = $dirUpload.$berkas;

    $terupload = move_uploaded_file($file_tmp, $linkberkas);
    $dataArr = array(

        'kode_rak' => $rak,
        'kode_box' => $box,
        'kode_ordner' => $ord,
        'kode_arsip' => $arsip,
        'no_akun' => $akun,
        'bidang' => $bidang,
        'sub_bidang' => $sub,
        'kegiatan' => $kegiatan,
        'tahun' => $tahun,
        'status_arsip' => $status,
        'Berkas' => $linkberkas,

    );

    if ($terupload && (tambah($dataArr) == 1)){
        echo "Upload Berhasil";
        header("Location: index.php", true, 301);
    } else {
        echo "Upload Gagal";
        header("Location: input.php", true, 301);
    }
?>


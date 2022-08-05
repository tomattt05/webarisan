<?php
include 'koneksi.php';

$cari = mysqli_query($conn,'SELECT id_anggota FROM anggota WHERE status_menang="Belum Menang" ORDER BY RAND() LIMIT 1');
$dtt = mysqli_fetch_array($cari);

$sql = mysqli_query($conn, 'UPDATE anggota  SET status_menang = "Menang" WHERE id_anggota="'.$dtt['id_anggota'].'"');
    if($sql) {
        echo "<script>window.alert('Berhasil Mendapatkan Pemenang');window.location.href='index.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');</script>";
    }

?>
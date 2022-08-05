<?php
    include "koneksi.php";
    
    $id = $_GET['id_anggota'];
    
    $sql = mysqli_query($conn, 'UPDATE anggota  SET status_bayar = "Sudah Bayar", status_menang = "Belum Menang" WHERE id_anggota="'.$id.'"');
    if($sql) {
        echo "<script>window.alert('Berhasil bayar');window.location.href='index.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');</script>";
    }
    
?>

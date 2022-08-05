<?php
    include "koneksi.php";
    
    $sql = mysqli_query($conn, 'UPDATE anggota SET status_menang="Belum Menang" WHERE status_bayar="Sudah Bayar"');
    if($sql) {
        echo "<script>window.alert('Data berhasil refresh');window.location.href='index.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');</script>";
    }
    
?>

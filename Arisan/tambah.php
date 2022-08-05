<?php
    include "koneksi.php";

    $nama = $_POST['nama_anggota'];
    $alamat = $_POST['alamat'];
    
    $sql = mysqli_query($conn, 'INSERT INTO anggota (nama_anggota, alamat) VALUES ("'.$nama.'", "'.$alamat.'") ');
    if($sql) {
        echo "<script>window.alert('Data berhasil di tambahkan');window.location.href='index.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');</script>";
    }
    
?>

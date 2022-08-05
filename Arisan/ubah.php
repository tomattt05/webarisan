<?php
    include "koneksi.php";
    
    $id = $_GET['id_anggota'];
    $nama = $_POST['nama_anggota'];
    $alamat = $_POST['alamat'];
    
    $sql = mysqli_query($conn, 'UPDATE anggota  SET nama_anggota = "'.$nama.'", alamat = "'.$alamat.'" WHERE id_anggota="'.$id.'"');
    if($sql) {
        echo "<script>window.alert('Data berhasil di ubah');window.location.href='index.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');</script>";
    }
    
?>

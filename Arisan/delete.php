<?php
    include "koneksi.php";

    $id = $_GET['id_anggota'];

    $sql = mysqli_query($conn, 'delete from anggota where id_anggota="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='index.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');</script>";
}
?>

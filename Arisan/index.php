<html>
    <head>
        <title>arisan</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container" style="margin-top:10px;">
            <div class="row">
                <div class="col s12 center">
                <h2>ramadhani</h2>
                </div>
                <div class="col s12 center" >
                    <a href="v_tambah.php"><button class="btn waves-effect grey">Tambah</button></a>
                    <a href="kocok.php"><button class="btn waves-effect green">Pengundian</button></a>
                </div>
                <div class="col s12">
                    <div class="card-panel white-text green">
            <table border="1">
                <tr>
                    <td>No</td>
                    <td>Nama Anggota</td>
                    <td>Alamat</td>
                    <td>Status Bayar</td>
                    <td>Status Menang</td>
                    <td>action</td>
                </tr>
                <?php include "koneksi.php";
                $no = 0;
                $sql = mysqli_query($conn, 'select * from anggota ');
                while($dtt = mysqli_fetch_array($sql) ) {
                $no++;
                ?>
                <?php
                    if($dtt['status_menang']=='Belum Menang'){
                    ?>
                    <tr>
                    <?php
                    }else if($dtt['status_menang']=='Menang'){
                    ?>
                    <tr style="background:red">
                    <?php
                    }
                    ?>
                    <td><?php echo $no?></td>
                    <td><?=$dtt['nama_anggota'];?></td>
                    <td><?=$dtt['alamat'];?></td>
                    <td><?=$dtt['status_bayar'];?></td>
                    <?php
                    if($dtt['status_menang']=='Belum Menang'){
                    ?>
                    <td>Belum Menang</td>
                    <?php
                    }else if($dtt['status_menang']=='Menang'){
                    ?>
                    <td>Menang</td>
                    <?php
                    }else{
                    ?>
                        <td></td>
                    <?php
                    }
                    ?>
                    <td>
                        <a href="delete.php?id_anggota=<?=$dtt['id_anggota'];?>" onclick="return confirm('Yakin ingin menghapus?');"><button class="btn waves-effect red">Hapus</button></a>
                        <a href="v_ubah.php?id_anggota=<?=$dtt['id_anggota'];?>" ><button class="btn waves-effect orange">Ubah</button></a>
                        <a href="bayar.php?id_anggota=<?=$dtt['id_anggota'];?>" onclick="return confirm('Yakin ingin melanjutkan?');"><button class="btn waves-effect blue">Bayar</button></a>
                    </td>
                </tr>
                <?php }?>
            </table>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
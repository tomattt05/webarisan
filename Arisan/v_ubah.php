<html>
    <head>
        <title>tambah</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col s12">
                <div class="card-panel">
                    <h3> Ubah Anggota</h3>
                        <?php include 'koneksi.php';
                        $id=$_GET['id_anggota'];
                        $sql = mysqli_query($conn,'SELECT * FROM anggota WHERE id_anggota="'.$id.'"');
                        $dtt = mysqli_fetch_array($sql);
                        ?>
                        <form method="post" action="ubah.php?id_anggota=<?=$dtt['id_anggota']?>">
                        <div class="input-field">
                            <input type="text" name="nama_anggota" id="nama" value="<?=$dtt['nama_anggota'];?>" required>
                            <label for="nama">Nama</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="alamat" id="add" value="<?=$dtt['alamat'];?>" required>
                            <label for="add">Alamat</label>
                        </div>
                        <button class="btn waves-effect green">Ubah</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
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
                    <h3> Tambah Anggota</h3>
                    <form method="post" action="tambah.php">
                        <div class="input-field">
                            <input type="text" name="nama_anggota" id="nama" required>
                            <label for="nama">Nama</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="alamat" id="add" required>
                            <label for="add">Alamat</label>
                        </div>
                        <button class="btn waves-effect green">Tambah</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
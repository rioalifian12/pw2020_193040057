<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (!isset($_GET['id'])) {
    header("location: admin.php");
    exit;
}

$id = $_GET['id'];
$tubes = query("SELECT * FROM makanan WHERE id = $id");

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'admin.php';
    </script>";
    } else {
        echo "<script>
    alert('data gagal diubah');
    document.location.href = 'admin.php';
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Makan Khas | Ubah</title>
</head>

<body>
    <div style="background-color: darkorange;">
        <ul class="navbar-nav mr-auto">
            <li style="margin-top: -12px; margin-right: 50px; text-align: right;">
                <a class="nav-link text-light" href="logout.php" style="margin-left: 1000px;">Logout</a>
            </li>
        </ul>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" id="beranda" style="height: 100px;">
        <div class="container">
            <a class="navbar-brand" href="#top"><span style="background-color: orange;">Makan</span> <span style="background-color: darkorange; margin-left:-8px;">Khas</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h1>Form Tambah Data</h1>
            <input type="hidden" name="id" value="<?= $tubes['id']; ?>">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required value="<?= $tubes['nama']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="asal">Asal</label>
                    <input type="text" name="asal" class="form-control" id="asal" required value="<?= $tubes['asal']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="jenis">Jenis : <?= $tubes['jenis']; ?></label>
                    <select name="jenis" class="form-control">
                        <option>Makanan</option>
                        <option>Minuman</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" required value="<?= $tubes['harga']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <input type="hidden" name="gambar_lama" value="<?= $tubes['gambar']; ?>">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="gambar" id="gambar" onchange="previewImage()">
                    <img src="../assets/img/<?= $tubes['gambar']; ?>" width="120" style="display: block" class="img-preview">
                </div>
            </div>
            <div class="for-row">
                <div class="form-group col-md-3">
                    <button type="submit" name="ubah" class="btn text-light" style="background-color: darkorange;">Ubah</button>
                    <button type="submit" class="btn text-light" style="background-color: darkorange;">
                        <a href="admin.php" class="text-light" style="text-decoration: none;">Kembali</a>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <footer class="text-light" style="background-color: darkorange;">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>COPYRIGHT &copy 2020 Makan Khas. Bandung, Jawa Barat, Indonesia</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/script_admin.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
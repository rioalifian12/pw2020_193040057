<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
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
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand text-light" href="#"><h1>Nih Makan!</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-light" href="#">Action</a>
          <a class="dropdown-item text-light" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-light" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<h3 class="mt-4">Form Tambah Data</h3>
<form action="" method="post">
    <table border="0" cellpadding="10" cellspacing="0">
    <tr>
        <td>
            <label for="gambar">Gambar</label>
        </td>
        <td>
            <input type="text" name="gambar" id="gambar" required>
        </td>
    </tr>
    <tr>
        <td>
            <label for="nama">Nama</label>
        </td>
        <td>
            <input type="text" name="nama" id="nama" required>
        </td>
    </tr>
    <tr>
        <td>
            <label for="asal">Asal</label>
        </td>
        <td>
            <input type="text" name="asal" id="asal" required>
        </td>
    </tr>
    <tr>
        <td>
            <label for="jenis">Jenis</label>
        </td>
        <td>
            <input type="text" name="jenis" id="jenis" required>
        </td>
    </tr>
    <tr>
        <td>
            <label for="harga">Harga</label>
        </td>
        <td>
            <input type="text" name="harga" id="harga" required>
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit" name="tambah" class="btn btn-primary text-light">Tambah Data</button>
            <button type="submit" class="btn btn-primary">
                <a href="admin.php" class="text-light" style="text-decoration: none;">Kembali</a>
            </button>
        </td>
    </tr>
    </table>
</form>

</body>
</html> 
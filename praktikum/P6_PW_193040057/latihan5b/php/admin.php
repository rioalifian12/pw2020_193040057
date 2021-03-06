<?php

require 'functions.php';

$tubes_193040057 = query("SELECT * FROM makanan");

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
    <div class="container">
    <table class="table">
      <div class="add mb-3">
        <a href="tambah.php"><button type="button" class="kembali btn btn-primary text-light">Tambah Data</button></a>
      </div> 
         <tr>
            <th>NO</th>
            <th>Opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Jenis</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($tubes_193040057 as $tubes) : ?>
                <tr>
                    <td><?= $i?></td>
                    <td>
                        <a href=""><button type="button" class="kembali btn btn-primary text-light">Ubah</button></a>
                        <a href=""><button type="button" class="kembali btn btn-danger text-light">Hapus</button></a>
                    </td>
                    <td>
                      <div class="gambar">
                        <img src="../assets/img/<?= $tubes['gambar']?>" style="height: 100px; width: 100px;">
                      </div>
                    </td>
                    <td><?= $tubes['nama']?></td>
                    <td><?= $tubes['asal']?></td>
                    <td><?= $tubes['jenis']?></td>
                    <td><?= $tubes['harga']?></td>
                </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
     </table>
     </div>
</body>
</html> 
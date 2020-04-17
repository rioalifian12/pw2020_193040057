<?php
if (!isset($_GET['id'])) {
    header("location:../index.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];

$tubes_193040057 = query("SELECT * FROM makanan WHERE id = $id")[0];
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
<section id="about" class="about">
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
      <h2>Nih!!!</h2>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-5 text-center">
    <div class="gambar">
            <img src="../assets/img/<?= $tubes_193040057["gambar"]; ?>" class="img-thumbnail" alt="">
        </div>
    </div>
    <div class="col-md-5 text-center">
        <table class="table">
            <tr>
                <td><p><?= $tubes_193040057["nama"]?></p></td>
            </tr>
            <tr>
                <td><p><?= $tubes_193040057["asal"]?></p></td>
            </tr>
            <tr>
                <td><p><?= $tubes_193040057["jenis"]?></p></td>
            </tr>
            <tr>
                <td><p><?= $tubes_193040057["harga"]?></p></td>
            </tr>
            <tr>
                <td>
                    <button type="button" class="kembali btn btn-warning text-light"><a href ="../index.php" class="text-light">Kembali</a></button>
                </td>
            </tr>
        </table>
    </div>
  </div>
</div>
</section>
</body>
</html> 
<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: php/admin.php");
  exit;
}
require 'php/functions.php';

$tubes_193040057 = query("SELECT * FROM makanan");

if (isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $tubes_193040057 = query("SELECT * FROM makanan 
                    WHERE 
                    gambar LIKE '%$keyword%'
                    ");
} else {
  $tubes_193040057 = query("SELECT * FROM makanan");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand text-light" href="#">
      <h1>Nih Makan!</h1>
    </a>
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
      <form action="" method="get" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" name="keyword" autocomplete="off">
        <button class=" btn btn-outline-light my-2 my-sm-0" type="submit" name="cari">Search</button>
      </form>
    </div>
  </nav>
  <section id="about" class="about">
    <div class="container mt-2">
      <div class="add mb-3 mt-4">
        <a href="php/login.php"><button type="button" class="kembali btn btn-primary text-light">Ke Admin</button></a>
      </div>
      <?php if (empty($tubes_193040057)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php foreach ($tubes_193040057 as $tubes) : ?>
          <table class="table">
            <td>
              <a href="php/detail.php?id=<?= $tubes['id'] ?>">
                <?= $tubes["nama"] ?>
              </a>
            </td>
          </table>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </section>
</body>

</html>
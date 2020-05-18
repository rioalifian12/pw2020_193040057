<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

require 'functions.php';
$id = $_GET['id'];

$tubes_193040057 = query("SELECT * FROM makanan WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css">
  <title>Makan Khas | Detail</title>
</head>

<body>
  <div style="background-color: darkorange;">
    <ul class="navbar-nav mr-auto">
      <li style="margin-top: -12px; margin-right: 50px; text-align: right;">
        <a class="nav-link text-light" href="login.php" style="margin-left: 1000px; visibility:hidden;">Masuk</a>
      </li>
    </ul>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light" id="beranda" style="height: 100px;">
    <div class="container">
      <a class="navbar-brand" href="#top"><span style="background-color: orange;">Makan</span> <span style="background-color: darkorange; margin-left:-8px;">Khas</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-dark pl-0" href="#top">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="index.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="../#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#pencapaian">Pencapaian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="about" class="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <img src="../assets/img/<?= $tubes_193040057["gambar"]; ?>" class="img-thumbnail" alt="" style="height:260px;width:260px;">
        </div>
        <div class="col-md-5 text-center">
          <table class="table">
            <tr>
              <td>
                <p><?= $tubes_193040057["nama"] ?></p>
              </td>
            </tr>
            <tr>
              <td>
                <p><?= $tubes_193040057["asal"] ?></p>
              </td>
            </tr>
            <tr>
              <td>
                <p><?= $tubes_193040057["jenis"] ?></p>
              </td>
            </tr>
            <tr>
              <td>
                <p><?= $tubes_193040057["harga"] ?></p>
              </td>
            </tr>
            <tr>
              <td>
                <a href="index.php" class="text-light"><button type="button" class="kembali btn text-light" style="background-color: darkorange;">Kembali</button></a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
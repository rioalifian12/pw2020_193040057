<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi berhasil');
            document.location.href = 'login.php';
            </script>";
  } else {
    echo "<script>
            alert('Registrasi gagal');
            document.location.href = 'login.php';
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
  <link rel="stylesheet" href="../css/style.css" />
  <title>Makan Khas | Register</title>
</head>

<body>
  <div style="background-color: darkorange;">
    <ul class="navbar-nav mr-auto">
      <li style="margin-top: -12px; margin-right: 50px; text-align: right;">
        <a class="nav-link text-light" href="login.php" style="margin-left: 1000px; visibility:hidden;">Masuk</a>
      </li>
    </ul>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light" id="beranda">
    <div class="container">
      <a class="navbar-brand" href="#top"><span style="background-color: orange;">Makan</span> <span style="background-color: darkorange; margin-left:-8px;">Khas</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-dark pl-0" href="../#top">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="index.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="../#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="../#pencapaian">Pencapaian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="../#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="" method="post">
    <div class="container  mt-3">
      <h1>Form Registrasi</h1>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="inputEmail4" autofocus required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="inputEmail4" required>
        </div>
      </div>
      <div class="form-group">
        <div class="remember">
          <input type="checkbox" name="remember">
          <label for="remember">Remember Me</label>
        </div>
      </div>
      <button type="submit" name="register" class="btn text-light" style="background-color: darkorange;">Register</button>
    </div>
  </form>

  <footer class="text-light" style="background-color: darkorange; margin-bottom:auto;">
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
<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

require 'functions.php';

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['if'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <title>Makan Khas | Login</title>
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
            <a class="nav-link text-dark pl-0" href="../index.php">Beranda<span class="sr-only">(current)</span></a>
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
    <div class="container">
      <h1>Form Login</h1>
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;"> Username atau Password salah!</p>
      <?php endif; ?>
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
      <div class="form-group">
        <div class="registrasi">
          <p>Belum punya aku? Registrasi <a href="registrasi.php">Disini</a></p>
        </div>
      </div>
      <button type="submit" name="submit" class="btn text-light" style="background-color: darkorange;">Login</button>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
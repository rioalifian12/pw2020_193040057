<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

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
  <link rel="stylesheet" href="../css/styles.css" />
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
  <form action="" method="post">
    <table class="table mt-3">
      <tr>
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input type="text" name="username" autofocus></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td>
          <button class="btn btn-primary text-light" type="submit" name="register">Register</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: php/admin.php");
  exit;
}

?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Masak Khas | Home</title>
</head>

<body>
  <div style="background-color: darkorange;">
    <ul class="navbar-nav mr-auto">
      <li style="margin-top: -12px; margin-right: 50px; text-align: right;">
        <a class="nav-link text-light" href="php/login.php" style="margin-left: 1000px;">Masuk</a>
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
            <a class="nav-link text-dark" href="php/index.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#about">Tentang</a>
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

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 495px;">
        <img src="assets/img/b5.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Rendang</h1>
          <h5>Jagonya rendangan di Indonesia</h5>
        </div>
      </div>
      <div class="carousel-item" style="height: 495px;">
        <img src="assets/img/b6.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Kerak Telor</h1>
          <h5>Menggunakan telur terbaik</h5>
        </div>
      </div>
      <div class="carousel-item" style="height: 495px;">
        <img src="assets/img/b7.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Bika Ambon</h1>
          <h5>Rasanya dijamin gak akan ngecewain</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <section id="about" class="about">
    <div class="container">
      <div class="row mb-4">
        <div class="col pt-4 text-center">
          <h2>TENTANG KAMI</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 pt-4 text-justify">
          <img src="assets/icons/office.png" class="pl-3">
          <h5 class="pl-3">Tentang</h5>
          <p class="pt-3 pl-4 pr-4">Makan Khas adalah perusahaan yang bergerak di bidang makanan dan minuman yang diproduksi di kota Bandung dan sekitarnya.</p>
        </div>
        <div class="col-md-4 pt-4 text-justify">
          <img src="assets/icons/date.png">
          <h5>Tahun Berdiri</h5>
          <p class="pt-3 pl-4 pr-4">MakanKhas didirikan pada tahun 2019, di Bandung.</p>
        </div>
        <div class="col-md-4 pt-4 text-justify">
          <img src="assets/icons/visi.png">
          <h5>Misi</h5>
          <p class="pt-3 pl-4 pr-4">- Melestarikan makanan dan minuman tradisional.<br>
            - Menyajikan makanan dan minuman tradisional dengan metode zaman sekarang.<br>
            - Berusaha mengangkat nama makanan dan minuman tradisional ke mancanegara.</p>
        </div>
      </div>
  </section>

  <div class="pencapaian" id="pencapaian">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-12 pt-5 text-center">
          <h2>PENCAPAIAN</h2>
        </div>
      </div>
      <div class="row justify-content-left">
        <div class="col-md-4 pt-5 text-justify">
          <img src="assets/icons/check.png" style="margin-left: 150px;">
          <p>PRODUK</p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
          </div>
        </div>
        <div class="col-md-4 pt-5 text-justify">
          <img src="assets/icons/happy.png" style="margin-left: 150px;">
          <p>KEPUASAN KONSUMEN</p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
          </div>
        </div>
        <div class="col-md-4 pt-5 text-justify">
          <img src="assets/icons/trophy.png" style="margin-left: 150px;">
          <p>PENGEHARGAAN</p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="contact" class="contact mb-5">
    <div class="container">
      <div class="row pt-5 mb-4">
        <div class="col text-center">
          <h2>HUBUNGI KAMI</h2>
          <p class="pt-3">Kita semua teman, jangan ragu untuk menuliskan kritik dan saran <br>~~~</p>
          <a href="#"><img src="assets/icons/fb.png"></a>
          <a href="#"><img src="assets/icons/tw.png"></a>
          <a href="#"><img src="assets/icons/ig.png"></a>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-lg-4">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="name" placeholder="Nama">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="handphone" placeholder="No Handphone">
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <form>
            <div class="form-group">
              <textarea name="message" id="message" class="cont form-control" placeholder="Pesan*"></textarea>
            </div>
          </form>
          <div class="form-group">
            <div class="custom-control custom-checkbox mr-sm-2">
              <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
              <label class="custom-control-label" for="customControlAutosizing">Centang untuk menyetujui.</label>
            </div>
          </div>
          <div class="form-group">
            <button type="button" class="btn text-light" id="button" style="background-color: darkorange;">Kirim Pesan</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-light" style="background-color: darkorange;">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>COPYRIGHT &copy 2020 Rumah Ayam. Bandung, Jawa Barat, Indonesia</p>
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
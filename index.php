<?php
session_start();
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Karyawan - Home</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
  
  <style>
    /* Custom UI Improvements */
    .navbar-toggler {
      border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-toggler .icon-bar {
      background-color: #333;
    }

    .btn-custom {
      padding: 15px 30px;
      font-size: 18px;
      transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #f0ad4e;
      color: #fff;
    }

    .hero-banner__content {
      margin-top: 30px;
      font-size: 1.2em;
    }

    .footer-social i {
      font-size: 24px;
      margin: 0 10px;
      color: #333;
      transition: color 0.3s ease;
    }

    .footer-social i:hover {
      color: #f0ad4e;
    }
  </style>
</head>
<body>

  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================ Hero Banner start =================-->      
  <section class="hero-banner mb-30px">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="hero-banner__img">
            <img class="img-fluid" src="img/logokaryawan.png" alt="Logo Karyawan">
          </div>
        </div>
        <div class="col-lg-5 pt-5">
          <div class="hero-banner__content">
          <h1>Login Sebagai</h1>
          <div class="mt-4">
            <a href="login.php" target="_blank"><button class="btn btn-warning btn-custom">Login Admin</button></a>
            <a href="karyawan/login_karyawan.php" target="_blank"><button class="btn btn-primary btn-custom ml-3">Login Karyawan</button></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero Banner end =================-->


  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

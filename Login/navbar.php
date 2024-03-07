<?php
include "boot.php"
?>
<body  style="background-size:cover;background-image:url('sip.jpg');">
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
   <div class="text-center">
    <a class="navbar-brand" href="#"><i class="bi bi-gear-wide"></i> WELCOME TO MY SERVICE STORE</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
 
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="navbar.php" target="barang"> <i class="bi bi-house-door-fill"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tampil.php" target="barang" ><i class="bi bi-view-list"></i> Daftar Service</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-card-list"></i> More option
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="input.php" target="barang"><i class="bi bi-upload"></i> Service Masuk</a></li>
              <li><a class="dropdown-item" href="rekap.php"target="barang"><i class="bi bi-printer"></i> Rekap</a></li>
              <li><a class="dropdown-item" href="index.php"> <i class="bi bi-box-arrow-left"></i> LogOut</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="center">
<iframe src="" name="barang" frameborder="1" width="100%" height="800"> </iframe>
</div>
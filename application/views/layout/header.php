<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/') ?>img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/') ?>img/favicon.png">
  
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('assets/') ?>css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url('assets/') ?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url('assets/') ?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url('assets/') ?>css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="<?php echo base_url('assets/') ?> css/argon-dashboard.css?v=2.0.4" rel="stylesheet">
  <link href="<?php echo base_url('assets/') ?> css/nucleo-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/') ?> css/nucleo-svg.css" rel="stylesheet">

  <style>
  .img-small {
    width: 30px;
    height: 30px;
  }
</style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="<?php echo base_url('assets/') ?>img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
   

    <hr class="horizontal dark mt-0">
    <?php
    if($user['role'] == 'Admin') { ?>
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link "href="<?= site_url('Mahasiswa/')?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Prodi/')?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Prodi</span>
          </a>
          <?php } else { ?>
          <li class="nav-item">
          <a class="nav-link "href="<?= site_url('Mahasiswa/')?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Auth/logout')?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
     <?php } ?>
    
   


    
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-main px-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here...">
        </div>
      </div>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-profile rounded-circle img-small img-fluid" src="<?= base_url('assets/img/profile/') . $user['gambar'];?>">
            <span class="ml-2 d-none d-lg-inline text-white small"><?= $user['nama'];?></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- End Navbar -->
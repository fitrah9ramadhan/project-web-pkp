<!DOCTYPE html>
<html>
<head>


    <!-- Aos Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- template_style -->
    <link rel="stylesheet" type="text/css" href="template_style.css">


<title><?= $title; ?></title>

</head>
<body>

<div class="container-fluid" id="navbar">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light float-right">
    <!-- <a class="navbar-brand" href="/" style=" font-family: verdana;">
        KECAMATAN BALOCCI
    </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link  text-white" href="/">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profil Kecamatan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item text-black" href="/profil/gambaran_umum">Gambaran Umum</a>
            <a class="dropdown-item text-black" href="/profil/sejarah_kecamatan">Sejarah</a>
            <a class="dropdown-item text-black" href="/profil/peta">Peta</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/pemerintahandesa">Pemerintahan Desa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/hubungikami">Hubungi Kami</a>
        </li>
        <li>
          <i class="fas fa-users-cog ml-3 mt-3 mr-1"></i>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/adminlogin">Login</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<?php echo $this->renderSection('content'); ?>
  


<!-- Vendor Tampilan Fade -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>
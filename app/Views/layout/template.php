<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/template_style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<title><?= $title; ?></title>

</head>
<body>

<div class="container" id="navbar">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light" style="height: 100px;">

    <a class="navbar-brand" href="#">

      <div class="logo-pangkep">
        <img src="/img/logo_pangkep.png" width="70" height="70" class="d-inline-block align-top" alt="" loading="lazy">
      </div>

      <div class="nama">
        
        <div class="satu">
          <p>  KECAMATAN BALOCCI</p>
        </div>
      </div>
      
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profil Kecamatan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/profil/gambaran_umum">Gambaran Umum</a>
            <a class="dropdown-item" href="/profil/sejarah_kecamatan">Sejarah</a>
            <a class="dropdown-item" href="/profil/peta">Peta</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pemerintahandesa">Pemerintahan Desa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/hubungikami">Hubungi Kami</a>
        </li>
        <li>
          <i class="fas fa-users-cog ml-3 mt-3 mr-1"></i>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/adminlogin">Login</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<?php echo $this->renderSection('content'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2d1fd503cf.js" crossorigin="anonymous"></script>
</body>
</html>
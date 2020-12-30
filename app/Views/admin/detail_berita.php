<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<a href="/adminlogin/logout">Logout</a>
<h1><?php echo $berita['judul_berita']; ?></h1>
<br>
<img src="/img/<?php echo $berita['sampul']; ?>" width = "300">
<br>
<h4>penulis: <?php echo $berita['penulis_berita']; ?></h4>
<p>Dibuat pada: <?php echo $berita['tanggal_berita']; ?></p>
<br>	
<p><?php echo $berita['isi_berita']; ?></p>

<?php echo $this->endSection(); ?>
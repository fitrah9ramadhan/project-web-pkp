<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="carousel-container shadow-lg p-3 mb-5 bg-white rounded" id="slider">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/gambar-1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="display-4">KECAMATAN BALOCCI</h1>
			<p class="lead">Portal informasi resmi pemerintahan Kecamatan Balocci Kabupaten Pangkep seputar struktur pemerintahan daerah, gambaran umum daerah, berita terkini dan hal - hal terkait daerah Kecamatan Pangkajene.</p>
			<hr class="my-4">
			<button type="button" class="btn btn-info" href="#">Selengkapnya</button>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/gambar-2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="display-4">TAMAN PRASEJARAH SUMPANG BITA</h1>
			<p class="lead">Taman Prasejarah Sumpang Bita secara administratif berada di Kampung Sumpang Bita, Kelurahan Balocci Kecamatan Balocci Kabupaten Pangkajene Kepulauan. Taman Prasejarah ini termasuk dalam areal Taman Nasional Bantimurung- Bulusaraung (TN – BABUL).</p>
			<hr class="my-4">
			<button type="button" class="btn btn-info" href="#">Selengkapnya</button>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/gambar-3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="display-4">Taman Batu</h1>
			<p class="lead">Lanskap yang unik menjadikan taman batu ini menjadi jujukan banyak artis selfie. Perpaduan warna hitam dari batu dan hijau dari tumbuhan yang ada membuat spot ini ramah untuk jadi background berswafoto kamu.</p>
			<hr class="my-4">
			<button type="button" class="btn btn-info" href="#">Selengkapnya</button>
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
</div>

<div class="container">
	<div class="pemisah">
		<h1>Berita Terbaru</h1>
	</div>
	<div class="card-deck">
	  <?php foreach ($berita as $b): ?>
		  <div class="card">
		    <img src="/img/<?php echo $b['sampul']; ?>" class="card-img-top" alt="...">
		    <div class="card-body shadow p-3 mb-5 bg-white rounded">
		      <h5 class="card-title"><?php echo $b["judul_berita"]; ?></h5>
		      <p class="card-text">Isi Berita, nanti menggunakan JQuery</p>
		      <p class="card-text"><small class="text-muted"><?php echo $b['tanggal_berita']; ?></small></p>
		      <a href="/berita/<?php echo $b['id']; ?>" class="btn btn-primary">Selengkapnya</a>
		    </div>
		  </div>
	  <?php endforeach; ?>
  		  <div class="berita-lengkap">
		  	<a href="/berita" class="btn btn-primary" style="position: right;">Selengkapnya</a>
		  </div>

	</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>



<?php echo $this->endSection(); ?>
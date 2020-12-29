<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="carousel-container" id="slider">
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
			<hr class="my-4" style="font-weight: bold;">
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

<div class="container-fluid">
	<div class="row">
		<h1>-------Berita Terbaru------</h1>
	</div>
	<div class="row">
	<?php foreach ($berita as $b) : ?>
		<div class="col">
			<img src="/img/<?php echo $b['sampul']; ?>" height="200">
			<h4>
				<?php echo $b["judul_berita"]; ?>
			</h4>
			<p>
				<?php echo $b['isi_berita']; ?>
			</p>
		</div>
	<?php endforeach; ?>
	</div>
</div>



<?php echo $this->endSection(); ?>
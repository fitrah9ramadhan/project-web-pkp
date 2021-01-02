<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<!-- Start Carousel -->
<div class="my-carousel  shadow-lg bg-white rounded  shadow-lg bg-white rounded  shadow-lg bg-white rounded">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/gambar-2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="ml10">
		        <span class="text-wrapper">
		        	<span class="letters">PINTU MASUK BULUSSARAUNG</span>
		        </span>
	    	</h1>
	        <p>Ingin menaklukkan Bulussaraung? Desa Tompobulu Kecamatan Balocci merupakan pintu masuk jalur Bulussaraung.
	        </p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/gambar-1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1>
		        	DANAU CINTA
		   
	    	</h1>
	        <p>
	        		Tempat ini dinamakan Danau Cinta dikarenakan danau ini berbentuk hati apabila dilihat dari ketinggian.
	        </p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/gambar-3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1>PEMANDANGAN INDAH SEPANJANG JALAN
	    	</h1>
	        <p>
	        			Kamu tidak bakalan bosan di perjalanan, dikelilingi pemandangan indah!.
	        
	   		</p>
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
<!-- End Carousel -->

<!-- Start Selamat Datang -->
<div class="selamat-datang container-fluid">
	<div class="judul-selamat-datang ">
		<marquee>
			<div class="row">
				<h6>Selamat Datang di Laman Resmi Pemerintah Kecamatan Balocci</h6>
			</div>
		</marquee>
	</div>
</div>
<!-- End Selamat Datang -->
<div class="selamat-datang-dua row container-fluid">
	<div class="judul-selamat-datang-dua row container">
		<div class="row">
			<h3 class="ml16">
				<span class="text-wrapper">
					<span class="letters">Pemerintah Kecamatan Balocci</span>
				</span>
			</h3>
		</div>
		<div class="garis"></div>
		<div class="paragraf-selamat-datang-dua row">
			<p>Website Pemerintah Kecamatan Balocci ini hadir dengan harapan dapat meningkatkan ketersediaan informasi yang dibutuhkan serta memberikan kenyamanan masyarakat saat melakukan akses. Silakan jelajahi website ini dengan mengikuti petunjuk menu-menu yang tersedia. Semoga bermanfaat.</p>
		</div>
	</div>
</div>

<!-- Start konten-satu -->


<div class="konten-satu">
	<div class="container">
		<div class="judul-besar row">
			<div><h5>Informasi Teraktual</h5></div>
			<div><h2>Berita Terkini</h2></div>
			<div class="garis"></div>
		</div>
		<div class="berita row">
			<?php foreach($berita as $brt): ?>
			<div class="berita-terkini col-md-4 col-sm-12 col-xs-12">
				<div class="row">
					<div class="card" style="width: 18rem;">
					  <img src="/img/<?= $brt['sampul']; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title"><?= $brt['judul_berita']; ?></h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <hr>
					    <p><small class="text-muted"><?= $brt['tanggal_berita']; ?></small></p>
				  	  </div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="footer-berita row">
			<div class="baca-berita-lainnya">
				<div class="tombol-baca-lainnya">
					<a href="/berita" class="btn btn-danger text-center">Berita Lainnya</a>
				</div>
			</div>
		</div>
	</div>
</div>


























<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<?php echo $this->endSection(); ?>
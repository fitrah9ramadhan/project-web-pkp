<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<!-- Start Carousel -->
<div class="my-carousel">
	<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/gambar-2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="ml10">PINTU MASUK BULUSSARAUNG</h1>
	        <p>Ingin menaklukkan Bulussaraung? Desa Tompobulu Kecamatan Balocci merupakan pintu masuk jalur Bulussaraung.
	        </p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/gambar-1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block" data-aos = "fade-down">
	        <h1 class="ml10">DANAU CINTA</h1>
	        <p>
	        		Tempat ini dinamakan Danau Cinta dikarenakan danau ini berbentuk hati apabila dilihat dari ketinggian.
	        </p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/gambar-3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="ml10">
		        <span class="text-wrapper">
		        	<span class="letters">PEMANDANGAN INDAH SEPANJANG JALAN</span>
		        </span>
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
	<div class="judul-selamat-datang">
		<marquee>
			<div class="row">
				<h6>Selamat Datang di Laman Resmi Pemerintah Kecamatan Balocci</h6>
			</div>
		</marquee>
	</div>
</div>
<!-- End Selamat Datang -->
<div class="selamat-datang-dua container-fluid">
	<div class="judul-selamat-datang-dua row container">
		<div class="row"  data-aos = "fade-down">
			<h3>Pemerintah Kecamatan Balocci</h3>
		</div>
		<div class="garis" data-aos = "fade-down"></div>
		<div class="paragraf-selamat-datang-dua row" data-aos = "zoom-in">
			<p class="ml14v2">
				<span class="text-wrapper">
					<span class="letters">
						Website Pemerintah Kecamatan Balocci ini hadir dengan harapan dapat meningkatkan ketersediaan informasi yang dibutuhkan serta memberikan kenyamanan masyarakat saat melakukan akses. Silakan jelajahi website ini dengan mengikuti petunjuk menu-menu yang tersedia. Semoga bermanfaat.
					</span>
				</span>
			</p>
		</div>
	</div>
</div>

<!-- Start konten-satu -->


<div class="konten-satu">
	<div class="container">
		<div class="judul-besar row" data-aos="fade-down">
			<div><h5 class="text-muted">Informasi Teraktual</h5></div>
			<div><h2>Berita Terkini</h2></div>
			<div class="garis"></div>
		</div>
		<div class="berita row" data-aos="zoom-in">
			<?php foreach($berita as $brt): ?>
			<div class="berita-terkini col-md-4 col-sm-12 col-xs-12">
				<div class="row">
					<div class="card" style="width: 18rem;">
					  <img src="/img/<?= $brt['sampul']; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					    <a href="/berita/<?= $brt['id']; ?>"><h5 class="card-title" style="font-weight: bold;"><?= $brt['judul_berita']; ?></h5></a>
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

<div class="konten-dua">
	<div class="konten-dua-isi container-fluid" data-aos="zoom-in">
		<div class="judul-besar row" data-aos="fade-down">
			<div><h5 class="text-muted">Camat dan Sekrtaris Camat</h5></div>
			<div><h2>Visi dan Misi Kecamatan Balocci</h2></div>
			<div class="garis"></div>
		</div>
		<div class="row">
			<div class="camat col-md-3">
				<div class="gambar-camat">
					<img src="/img/camat/<?= $camat['gambar_camat'];?>" class="rounded-circle" style="width: 18rem;">
				</div>
				
			</div>
			<div class="visi-misi col-md-6">
				<div class="visi-misi-camat">
					<h3>Menjadi Kecamatan terbaik se Kabupaten Pangkep</h3>
				</div>	
			</div>
			<div class="sekcam col-md-3">
				<img src="img/sekcam/<?= $camat['gambar_sekcam']; ?>" class="rounded-circle" style="width: 18rem;">
			</div>
		</div>
	</div>
</div>




<?php echo $this->endSection(); ?>
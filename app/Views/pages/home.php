<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<!-- Start Jumbotron -->
<!-- <div class="jumbotron jumbotron-fluid shadow-lg p-3 mb-5 bg-white rounded">
	<div class="judul-besar">
	    <h1 class="display-4">Kecamatan Balocci</h1>
	    <p class="lead">Selamat Datang di website resmi Kecamatan Balocci Kabupaten Pangkep.</p>
	    <hr class="my-4">
	</div>
</div> -->
<!-- End Jumbotron -->

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
	      <img src="img/gambar-1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1>DANAU CINTA</h1>
	        <p>Tempat ini dinamakan Danau Cinta dikarenakan danau ini berbentuk hati apabila dilihat dari ketinggian.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/gambar-2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1>PINTU MASUK BULUSSARAUNG</h1>
	        <p>Ingin menaklukkan Bulussaraung? Desa Tompobulu Kecamatan Balocci merupakan pintu masuk jalur Bulussaraung.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/gambar-3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1>PEMANDANGAN INDAH SEPANJANG JALAN</h1>
	        <p>Kamu tidak bakalan bosan di perjalanan, dikelilingi pemandangan indah!.</p>
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

<!-- Start Content -->
<div class ="container-fluid mt-10 justify-center">
	<div class="konten row">
		<div class="tiga-berita col-md-6">
			<h4 class="d-flex justify-content-center">::: BERITA DAERAH :::</h4>
			<div class="berita-terkini row p-4">
				<div class="card-group shadow-lg bg-white rounded">
				<?php foreach($berita as $brt): ?>
				  	<div class="card">
				    	<img src="/img/<?= $brt['sampul'];?>" class="card-img-top mb-0 p-2" alt="...">
				    	<div class="card-body">
				      		<h5 class="card-title"><?= $brt['judul_berita']; ?></h5>
				      		<small class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</small>
				      		<p class="card-text"><small class="text-muted"><?= $brt['tanggal_berita']; ?></small></p>
				    	</div>
				  	</div>
				<?php endforeach; ?>
				</div>
			</div>
			<div class="baca-selengkapnya row d-flex justify-content-center">
				<a href="/berita" class="btn btn-info">Baca Selengkapnya</a>
			</div>
		</div>
		<div class="agenda-kecamatan col-md-2" >
			<h4 class="d-flex justify-content-center">::: AGENDA :::</h4>
			<div class="list-agenda row mt-3 p-3">
				<?php foreach($agenda as $agn): ?>
				<div class="card bg-light mb-1" style="width: 100%;">
				  <div class="card-header"><small class="text-muted"><i class="fa fa-clock"> <?= $agn['tanggal']; ?></i></small></div>
				  <div class="card-body">
				    <h5 class="card-title"><?= $agn['nama_agenda']; ?></h5>
				    <small class="text-muted"><i class="fa fa-location"><?= $agn['tempat']; ?></i></small>
				  </div>
				</div>
				<?php endforeach; ?>
			</div>		
		</div>
		<div class="side-camat col-md-4">
		<h4 class="d-flex justify-content-center">::: Pemimpin Desa Kirigakure :::</h4>
				<div class="card mb-3 mt-3 p-3  shadow-lg p-3 mb-5 bg-white rounded">
				  <div class="row no-gutters">
				    <div class="col-md-4 d-flex justify-content-center" >
				      <img src="/img/camat/<?= $camat['gambar_camat']; ?>" class="card-img">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title"><?= $camat['camat']; ?></h5>
				        <p class="card-text"><?= $camat['quotes_camat'] ?></p>
				        <p class="card-text"><small class="text-muted"><?= $camat['masa_jabatan'] ?></small></p>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="card mb-3  shadow-lg p-3 mb-5 bg-white rounded">
				  <div class="row no-gutters">
				    <div class="col-md-4 d-flex justify-content-center">
				      <img src="/img/sekcam/<?= $camat['gambar_sekcam']; ?>" class="card-img">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title"><?= $camat['sekcam']; ?></h5>
				        <p class="card-text"><?= $camat['quotes_sekcam'] ?></p>
				        <p class="card-text"><small class="text-muted"><?= $camat['masa_jabatan'] ?></small></p>
				      </div>
				    </div>
				  </div>
				</div>		
		</div>
	</div>
</div>

<!-- End Content -->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<?php echo $this->endSection(); ?>
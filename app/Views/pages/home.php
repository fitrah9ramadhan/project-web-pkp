<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<!-- Start Jumbotron -->
<div class="jumbotron jumbotron-fluid shadow p-3 mb-5 bg-white rounded">
	<div class="judul-besar">
	    <h1 class="display-4">Kecamatan Balocci</h1>
	    <p class="lead">Selamat Datang di website resmi Kecamatan Balocci Kabupaten Pangkep.</p>
	    <hr class="my-4">
	</div>
</div>
<!-- End Jumbotron -->

<!-- Start Content -->
<div class ="container mt-10 justify-center">
	<div class="konten row">
		<div class="tiga-berita col-md-6">
			<h4 class="d-flex justify-content-center">BERITA DAERAH</h4>
			<div class="berita-terkini row p-4">
				<div class="card-group">
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
		<div class="agenda-kecamatan col-md-3" >
			<h4 class="d-flex justify-content-center">AGENDA</h4>
			<div class="list agenda row mt-3 p-3">
				<?php foreach($agenda as $agn): ?>
				<div class="card bg-light mb-3" style="max-width: 18rem;">
				  <div class="card-header"><small class="text-muted"><i class="fa fa-clock"> <?= $agn['tanggal']; ?></i></small></div>
				  <div class="card-body">
				    <h5 class="card-title"><?= $agn['nama_agenda']; ?></h5>
				    <small class="text-muted"><i class="fa fa-location"><?= $agn['tempat']; ?></i></small>
				  </div>
				</div>
				<?php endforeach; ?>
			</div>		
		</div>
		<div class="col-md-3 p-4" style="background-color: green;">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>

<!-- End Content -->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<?php echo $this->endSection(); ?>

<div class="container mt-3">
	<div class="row">
		<div class="col-md-6">
     		<h4 class="text-left font-weight-bold header-section">BERITA DAERAH</h4>
     		<hr>
     		<div class="row mt-3">
					<div class="card-group">
        			<?php foreach($berita as $brt): ?>
<!--         		<div class="col-md-4 col-sm-12 mb-md-0 mb-3"> -->
					  <div class="card">
					    <img src="/img/<?php echo $brt['sampul']; ?>" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title"><?php echo $brt['judul_berita']; ?></h5>
					      <small class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</small>
					      <p class="card-text"><small class="text-muted"><?php echo $brt['tanggal_berita']; ?></small></p>
					    </div>
					  </div>
					<?php endforeach; ?>
<!-- 					</div> -->
				</div>

       
				<div class="col-md-12 text-right mb-sm-3 mb-3 mb-md-0 mt-md-3">
 					<a href="/berita" class="btn btn-outline-dark">Berita Lainnya <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<h4 class="text-left font-weight-bold header-section">AGENDA KECAMATAN</h4>
			<hr>
			<div class="row mt-3">
				<?php foreach($agenda as $agn): ?>
   				<div class="col-12 row-pengumuman">
    				<div class="card shadow-sm p-3 mb-5 bg-white rounded">
     					<div class="card-pengumuman card-body shadow-sm p-3 mb-5 bg-white rounded">
      						<small><i class="fa fa-clock"></i> <?php echo $agn['tanggal']; ?> | <?php echo $agn['tempat']; ?></small>
      						<strong class="d-block judul-pengumuman text-uppercase"><?php echo $agn['nama_agenda']; ?></strong>
      						<a href="#" class="float-right">Baca</a>
    					</div>
  					</div>
				</div>
				<?php endforeach; ?>

				<div class="col-md-12 text-right mb-sm-3 mb-3 mb-md-0 mt-md-3 mt-3" id="div_info_lain">
				 	<a href="#" class="btn btn-outline-dark">Info Lainnya <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<h4 class="text-left font-weight-bold header-section">PENGUMUMAN</h4>
			<hr>
			<style>
			   @media (max-width: 992px){
			     .last-row-pengumuman{
			      margin-bottom:3em !important;
			    }
			  }
			</style>

			<div class="row mt-3">
				<!-- taruh foreach disini -->
	   			<div class="col-12 row-pengumuman ">
	   				<div class="card">
	    				<div class="card-body card-pengumuman">
						    <small><i class="fa fa-clock"></i> 14 Desember 2020</small>
						    <strong class="d-block judul-pengumuman">Pengumuman Hasil Lomba Domino Tingkat Kecamatan</strong>
						    <a href="#" class="float-right">Baca</a>
	   					</div>
	 				</div>
				</div>
				<!-- taruh endforeach disini -->
	  			
				<div class="col-md-12 mt-3 text-right mt-md-4 position-absolute " style="bottom: 0">
	  				<a href="#">Pengumuman Lainnya <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
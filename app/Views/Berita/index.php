<?php echo $this->extend('layout/template'); ?>


<?php $this->section('content'); ?>
<div class="header-halaman" >
	<div class="header-halaman-ku">
		<h5>Berita</h5>
	</div>
	<div class="header-halaman-ku-right">
		<a href="/"><h5>Beranda</h5></a>
	</div>
</div>

<div class="berita-di-halaman container">
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
</div>
<?= $pager->links('berita', 'pagination_ku'); ?>

<?php $this->endSection(); ?>
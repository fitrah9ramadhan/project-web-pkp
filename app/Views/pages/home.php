<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container-fluid">
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Kecamatan Balocci</h1>
	    <p class="lead">Website Resmi Kecamatan Balocci Kabupaten Pangkajene dan Kepulauan</p>
	  </div>
	</div>
</div>
<div class="container-fluid">
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm">
		    <table cellpadding="10" cellspacing="0" border="0">
				<?php foreach ($berita as $b): ?>
				<tr>
					<td><img src="/img/<?php echo $b['sampul']; ?>" width="300"></img></td>
					<td><h2><a href="/berita/<?php echo $b['id'] ?>"><?php echo $b['judul_berita']; ?></a></h2></td>
				</tr>
				<?php endforeach; ?>
			</table>
	    </div>
	    <div class="col-sm">
	      One of three columns
	    </div>
</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


<?php echo $this->endSection(); ?>
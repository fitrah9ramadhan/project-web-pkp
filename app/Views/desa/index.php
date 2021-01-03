<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="header-halaman" >
	<div class="header-halaman-ku">
		<h5>Pemerintah Desa</h5>
	</div>
	<div class="header-halaman-ku-right">
		<a href="/"><h5>Beranda</h5></a>
	</div>
</div>


<div class="desa-ku container">
	<table class="table">
	<thead>
		<tr>
		<th scope="col">Nama Desa</th>
		<th scope="col">Kepala Desa</th>
		<th scope="col">Masa Kerja</th>
		<th scope="col">Luas Daerah</th>
		<th scope="col">Jumlah Penduduk</th>
		<th scope="col">Dusun/RW/RT</th>
		

		</tr>
	</thead>
	<?php foreach ($pemdes as $pds): ?>
	<tbody>
		<tr>
			<td>
				<?php echo $pds['nama_desa']; ?>
			</td>
			<td>
				<?php echo $pds['kepala_desa']; ?>
			</td>
			<td>'
				<?php echo $pds['masa_kerja']; ?>
			</td>
			<td>
				<?php echo $pds['luas_daerah']; ?>
			</td>
			<td>
				<?php echo $pds['jumlah_penduduk']; ?>
			</td>
			<td>
				<?php echo $pds['dusun_rw_rt']; ?>
			</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	</table>
</div>

<br><br><br><br><br><br><br><br><br>

<?php $this->endSection(); ?>
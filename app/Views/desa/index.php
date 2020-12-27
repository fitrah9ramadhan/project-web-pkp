<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<table cellpadding="10" cellspacing="0" border="1">
	<thead>
		<tr>
			<td>Nama Desa</td>
			<td>Kepala Desa</td>
			<td>Masa Kerja</td>
			<td>Luas Desa</td>
			<td>Jumlah Penduduk</td>
			<td>Dusun/RT/RW</td>
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



<?php $this->endSection(); ?>
<?php echo $this->extend('layout/template'); ?>


<?php $this->section('content'); ?>

<div class="container-fluid" style="margin-top: 200px;">
<a href="/adminlogin/logout">Logout</a>
<h4><a href="/admin/tambah_pemdes">Tambah Pemdes</a></h4>
<table cellpadding="10" cellspacing="0" border="1">

	<table cellpadding="10" cellspacing="0" border="1">
	<thead>
		<tr>
			<td>Aksi</td>
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
				<a href=/admin/edit_pemdes/<?php echo $pds['id']; ?>>Edit</a>

				<form action="/admin/hapus_pemdes/<?= $pds['id']; ?>" method = 'post'>
					<?= csrf_field(); ?>
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" onclick = "return confirm('Yakin ingin menghapus pemdes ini?')">Hapus</button>
				</form>
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
			</td>
			
		</tr>
	</tbody>
	<?php endforeach; ?>
</table>

</table>

</div>
<?php $this->endSection(); ?>
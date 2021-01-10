<?php echo $this->extend('layout_admin/template'); ?>

<?php echo $this->section('content'); ?>

<div class="header-halaman">
	<form action="/admin/save_pemdes" method="post">
		<label for="nama_desa">Nama Desa</label>
		<input type="text" name="nama_desa" id="nama_desa">
		<br>
		<label for="kepala_desa">Kepala Desa</label>
		<input type="text" name="kepala_desa" id="kepala_desa">
		<br>
		<label for="masa_kerja">Masa Kerja</label>
		<input type="text" name="masa_kerja" id="masa_kerja">
		<br>
		<label for="luas_daerah">Luas Daerah</label>
		<input type="text" name="luas_daerah">
		<br>
		<label for="jumlah_penduduk">Jumlah Penduduk</label>
		<input type="text" name="jumlah_penduduk" id="jumlah_penduduk">
		<br>
		<label for="dusun_rw_rt">Dusun/RW/RT</label>
		<input type="text" name="dusun_rw_rt" id="dusun_rw_rt">
		<br>
		<button type="submit" name="tambah_pemdes">Tambah!</button>
	</form>
</div>
<?php echo $this->endSection(); ?>
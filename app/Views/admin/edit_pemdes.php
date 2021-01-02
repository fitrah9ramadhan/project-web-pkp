<?php echo $this->extend('layout_dua/template'); ?>

<?php echo $this->section('content'); ?>

<form action="/admin/update_pemdes/<?php echo $pemdes['id']; ?>" method="post">
	<label for="nama_desa">Nama Desa</label>
	<input type="text" name="nama_desa" id="nama_desa" value="<?php echo $pemdes['nama_desa']; ?>">
	<br>
	<label for="kepala_desa">Kepala Desa</label>
	<input type="text" name="kepala_desa" id="kepala_desa" value="<?php echo $pemdes['kepala_desa']; ?>">
	<br>
	<label for="masa_kerja">Masa Kerja</label>
	<input type="text" name="masa_kerja" id="masa_kerja" value="<?php echo $pemdes['masa_kerja']; ?>">
	<br>
	<label for="luas_daerah">Luas Daerah</label>
	<input type="text" name="luas_daerah" value="<?php echo $pemdes['luas_daerah']; ?>">
	<br>
	<label for="jumlah_penduduk">Jumlah Penduduk</label>
	<input type="text" name="jumlah_penduduk" id="jumlah_penduduk" value="<?php echo $pemdes['jumlah_penduduk']; ?>">
	<br>
	<label for="dusun_rw_rt">Dusun/RW/RT</label>
	<input type="text" name="dusun_rw_rt" id="dusun_rw_rt" value="<?php echo $pemdes['dusun_rw_rt']; ?>">
	<br>
	<button type="submit" name="tambah_pemdes">Tambah!</button>
</form>

<?php echo $this->endSection(); ?>
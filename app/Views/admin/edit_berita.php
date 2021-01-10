<?php echo $this->extend('layout_admin/template'); ?>


<?php $this->section('content'); ?>
<div class="header-halaman"></div>
<a href="/adminlogin/logout">Logout</a>
<h4>Ubah Berita</h4>

<form action="/admin/update_berita/<?= $berita['id']; ?>" method="post">
	<?php echo csrf_field(); ?>
	<table cellspacing="10" cellpadding="0">
		<tr>
			<label for="sampul">Masukkan Sampul</label>
			<input type="text" name="sampul" id="sampul" value="<?= $berita['sampul']; ?>">
		</tr>
		<br>
		<tr>
			<label for="judul_berita">Masukkan Judul</label>
			<input type="judul_berita" name="judul_berita" id="judul_berita" value="<?= $berita['judul_berita']; ?>">
		</tr>
		<br>
		<tr>
			<label for="penulis_berita">Masukkan Penulis Berita</label>
			<input type="text" name="penulis_berita" id="penulis_berita" value="<?= $berita['penulis_berita']; ?>">
		</tr>
		<br>
		<tr>
			<label for="isi_berita">Masukkan Isi Berita</label>
			<input type="text" name="isi_berita" id="isi_berita" value="<?= $berita['isi_berita']; ?>">
		</tr>
		<br>
		<tr>
			<label for="tanggal_berita">Masukkan Tanggal</label>
			<input type="datetime-local" name="tanggal_berita" id="tanggal_berita" value="<?= $berita['tanggal_berita']; ?>">
		</tr>
		<br>
			<button type="submit" name="tambah">Ubah Berita!</button>
	</table>
</form>

<?php $this->endSection(); ?>
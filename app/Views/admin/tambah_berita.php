<?php echo $this->extend('layout_admin/template'); ?>


<?php $this->section('content'); ?>
<div class="header-halaman"></div>
	<div class="container-fluid" style="margin-top: 100px;">
		<a href="/adminlogin/logout">Logout</a>
		<h4>Tambah Berita</h4>
		<form action="/admin/save_berita" method="post" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<table cellspacing="10" cellpadding="0">
			<tr>
				<label for="judul_berita">Judul</label>
				<input type="judul_berita" name="judul_berita" id="judul_berita">
			</tr>
			<br>
			<tr>
				<label for="penulis_berita">Penulis Berita</label>
				<input type="text" name="penulis_berita" id="penulis_berita">
			</tr>
			<br>
			<tr>
				<label for="isi_berita">Isi Berita</label>
				<input type="text" name="isi_berita" id="isi_berita">
			</tr>
			<br>
			<tr>
				<label for="tanggal_berita">Tanggal</label>
				<input type="datetime-local" name="tanggal_berita" id="tanggal_berita">
			</tr>
			<br>
			<tr>
				<label for="sampul">Pilih Gambar Sampul</label>
				<input type="file" name="sampul" id="sampul">
			</tr>
			<br>
				<button type="submit" name="tambah">Tambah Berita!</button>
		</table>
	</form>
</div>

<?php $this->endSection(); ?>
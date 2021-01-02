<?php echo $this->extend('layout_dua/template'); ?>


<?php $this->section('content'); ?>
	<div class="container-fluid" style="margin-top: 100px;">
		<a href="/adminlogin/logout">Logout</a>
		<h4>Tambah Berita</h4>
		<form action="/admin/save_agenda" method="post" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<table cellspacing="10" cellpadding="0">
			<tr>
				<label for="nama_agenda">Nama Agenda</label>
				<input type="text" name="nama_agenda" id="nama_agenda">
			</tr>
			<br>
			<tr>
				<label for="tempat">Tempat</label>
				<input type="text" name="tempat" id="tempat">
			</tr>
			<br>
			<tr>
				<label for="tanggal">Tanggal</label>
				<input type="datetime-local" name="tanggal" id="tanggal">
			</tr>
			<br>
				<button type="submit" name="tambah">Tambah Agenda!</button>
		</table>
	</form>
</div>

<?php $this->endSection(); ?>
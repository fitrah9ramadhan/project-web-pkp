<?php echo $this->extend('layout_dua/template'); ?>

<?php echo $this->section('content'); ?>
<a href="/adminlogin/logout">Logout</a>

<h1>Edit Kontak</h1>

<?php foreach ($camat as $cmt): ?>
	<form action="/admin/update_camat" method="post" enctype="multipart/form-data">
		<table>	
			<tr>
				<label for="camat">Nama Camat: </label>
				<input type="text" name="camat" id="camat" value="<?= $cmt['camat']; ?>">
			</tr>
			<br>
			<tr>	
				<label for="sekcam">Nama Sekcam</label>
				<input type="text" name="sekcam" id="sekcam" value="<?= $cmt['sekcam'];?>">
			</tr>
			<br>
			<tr>
				<label for="quotes_camat">Quotes Camat</label>
				<input type="text" name="quotes_camat" id="quotes_camat" value="<?= $cmt['quotes_camat']; ?>">
			</tr>
			<br>
			<tr>
				<label for="quotes_sekcam">Quotes Sekcam</label>
				<input type="text" name="quotes_sekcam" id="quotes_sekcam" value="<?= $cmt['quotes_sekcam']; ?>">
			</tr>
			<br>
			<tr>
				<label for="masa_jabatan">Twitter</label>
				<input type="text" name="masa_jabatan" id="masa_jabatan" value="<?= $cmt['masa_jabatan']; ?>">
			</tr>
			<br>
			<tr>
				<label for="gambar_camat">Gambar Camat</label>
				<input type="file" name="gambar_camat" id="gambar_camat">
			</tr>
			<br>
			<tr>
				<label for="gambar_sekcam">Gambar Sekcam</label>
				<input type="file" name="gambar_sekcam" id="gambar_sekcam">
			</tr>
			<br>
			<tr>	
				<button type="submit" name="edit_camat">Ubah</button>
			</tr>
		</table>
		
	</form>
<?php endforeach; ?>
<?php echo $this->endSection(); ?>
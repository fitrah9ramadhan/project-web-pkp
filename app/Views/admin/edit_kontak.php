<?php echo $this->extend('layout_dua/template'); ?>

<?php echo $this->section('content'); ?>
<a href="/adminlogin/logout">Logout</a>

<h1>Edit Kontak</h1>

<?php foreach ($kontak as $k): ?>
	<form action="/admin/update_kontak" method="post">
		<table>	
			<tr>
				<label for="telefon">Telefon</label>
				<input type="text" name="telefon" id="telefon" value="<?= $k['telefon']; ?>">
			</tr>
			<br>
			<tr>	
				<label for="whatsapp">Whatsapp</label>
				<input type="text" name="whatsapp" id="whatsapp" value="<?= $k['whatsapp'];?>">
			</tr>
			<br>
			<tr>
				<label for="facebook">Facebook</label>
				<input type="text" name="facebook" id="facebook" value="<?= $k['facebook']; ?>">
			</tr>
			<br>
			<tr>
				<label for="instagram">Instagram</label>
				<input type="text" name="instagram" id="instagram" value="<?= $k['instagram']; ?>">
			</tr>
			<br>
			<tr>
				<label for="twitter">Twitter</label>
				<input type="text" name="twitter" id="twitter" value="<?= $k['twitter']; ?>">
			</tr>
			<br>
			<tr>	
				<button type="submit" name="edit_kontak">Ubah</button>
			</tr>
		</table>
		
	</form>
<?php endforeach; ?>
<?php echo $this->endSection(); ?>
<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<?php foreach ($profil as $p): ?>
<form action="/admin/update_profil" method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<label for="gambaran_umum">Gambaran Umum</label>
			<input type="text" name="gambaran_umum" id="gambaran_umum" value="<?php echo $p['gambaran_umum']; ?>">
		</tr>
		<br>
		<tr>
			<label for="sejarah_kecamatan">Sejarah Kecamatan</label>
			<input type="text" name="sejarah_kecamatan" id="sejarah_kecamatan" value="<?php echo $p['sejarah_kecamatan']; ?>">
		</tr>
		<br>
		<tr>
			<label for="peta">Peta</label>
			<input type="file" name="peta" id="peta">
		</tr>
		<br>
		<tr>
			<button type="submit" name="update">Update!</button>
		</tr>
		
	</table>
	
</form>
<?php endforeach; ?>

<?php $this->endSection(); ?>
<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<?php foreach ($profil as $p): ?>
<form action="/admin/update_profil" method="post">
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
			<label for="visi_misi">Visi dan Misi</label>
			<input type="text" name="visi_misi" id="visi_misi" value="<?php echo $p['visi_misi'];?>">
		</tr>
		<br>
		<tr>
			<button type="submit" name="update">Update!</button>
		</tr>
		
	</table>
	
</form>
<?php endforeach; ?>

<?php $this->endSection(); ?>
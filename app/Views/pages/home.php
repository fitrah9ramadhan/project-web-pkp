<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>


	<h1>Kecamatan Balocci</h1>
	<h2>Kabupaten Pangkajene dan Kepulauan</h2>

	<table cellpadding="10" cellspacing="0" border="1">
		<?php foreach ($berita as $b): ?>
		<tr>
			<td><img src="/img/<?php echo $b['sampul']; ?>"></img></td>
			<td><h2><a href="/berita/<?php echo $b['id'] ?>"><?php echo $b['judul_berita']; ?></a></h2></td>
		</tr>
		<?php endforeach; ?>
	</table>

<?php echo $this->endSection(); ?>
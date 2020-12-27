<?php echo $this->extend('layout/template'); ?>


<?php $this->section('content'); ?>

<h1>Daftar Berita</h1>


	<table cellpadding="10" cellspacing="0" border="1">
		<thead>
			<tr>
				<td>Sampul</td>
				<td>Judul</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($berita as $b): ?>
			<tr>
				<td><img src="/img/<?php echo $b['sampul']; ?>"></img></td>
				<td><a href="/berita/<?php echo $b['id'] ?>"><?php echo $b['judul_berita']; ?></a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php $this->endSection(); ?>
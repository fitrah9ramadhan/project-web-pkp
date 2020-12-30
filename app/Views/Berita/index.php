<?php echo $this->extend('layout/template'); ?>


<?php $this->section('content'); ?>

<h1>Daftar Berita</h1>

<div class="container-fluid" style="margin-top: 100px">
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
				<td><img src="/img/<?php echo $b['sampul']; ?>" width="300"></img></td>
				<td><a href="/berita/<?php echo $b['id'] ?>"><?php echo $b['judul_berita']; ?></a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?= $pager->links('berita', 'pagination_ku'); ?>

<?php $this->endSection(); ?>
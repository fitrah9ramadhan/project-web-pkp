<?php echo $this->extend('layout_admin/template'); ?>


<?php $this->section('content'); ?>
<div class="header-halaman"></div>
<div class="container-fluid">
<a href="/adminlogin/logout">Logout</a>
<h4><a href="/admin/tambah_berita">Tambah Berita</a></h4>
<table cellpadding="10" cellspacing="0">
		<thead>
			<tr>
				<td>Aksi</td>
				<td>Sampul</td>
				<td>Judul</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($berita as $b): ?>
			<tr>
				<td>
					<a href="/admin/edit_berita/<?= $b['id']; ?>">Edit</a>

					<form action="/admin/hapus_berita/<?= $b['id']; ?>" method = 'post'>
						<?= csrf_field(); ?>
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" onclick = "return confirm('Yakin Ingin Menghapus Berita ini?')">Hapus</button>
					</form>
				</td>
				
				<td><img src="/img/<?php echo $b['sampul']; ?>" width="300"></img></td>
				<td><a href="detail_berita/<?php echo $b['id'] ?>"><?php echo $b['judul_berita']; ?></a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<?php $this->endSection(); ?>
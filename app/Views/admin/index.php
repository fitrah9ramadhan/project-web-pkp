<?php echo $this->extend('layout_admin/template'); ?>


<?php $this->section('content'); ?>


<div class="container-fluid" style="margin-top: 200px;">
	<a class= "btn btn-danger" href="/adminlogin/logout">Logout</a>
	<h1>Options</h1>
	<a href="/admin/crud_berita">CRUD Berita</a>
	<a href="/admin/crud_pemdes">CRUD Pemdes</a>
	<a href="/admin/edit_kontak">Edit Kontak</a>
	<a href="/admin/edit_profil">Edit Profil</a>
	<a href="/admin/tambah_agenda">Tambah Agenda</a>
</div>
</div>
<?php $this->endSection(); ?>'




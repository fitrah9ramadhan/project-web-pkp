<?php echo $this->extend('layout/template'); ?>


<?php echo $this->section('content'); ?>

<div class="header-halaman"></div>

<div class="form-login container">
	<h1>Halaman Login Admin Kecamatan</h1>
	<form action="/adminlogin/login" method="post">
	<div class="form-group">
		<label for="exampleInputEmail1">Username</label>
		<input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		<small id="emailHelp" class="form-text text-muted">Username Bersifat Rahasia</small>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1">
	</div>
	<button type="submit" name="login" class="btn btn-primary">Login!</button>
	</form>
	
	<a href="/" class="btn btn-danger">kembali</a>
</div>




<?php echo $this->endSection(); ?>

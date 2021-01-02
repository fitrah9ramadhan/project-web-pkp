<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
	<h1>Login Admin</h1>
	<form action="/adminlogin/login" method="post">
		<ul>
			<li>
				<label for="username">Username: </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">Login!</button>
			</li>
		</ul>
	</form>
<a href="/">kembali</a>

<?php echo $this->endSection(); ?>

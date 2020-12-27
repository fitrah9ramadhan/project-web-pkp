<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
</head>
<body>



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

</body>
</html>
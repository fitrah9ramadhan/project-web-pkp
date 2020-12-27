<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>

</head>
<body>

<h5>Balocci</h5>		
<a href="/">Home</a>
<a href="/hubungikami">Hubungi Kami</a>
<a href="/berita">Berita</a>
<a href="/adminlogin">Login</a>
<a href="/profil">Profil</a>
<a href="/pemerintahandesa">Pemerintahan Desa</a>


<?php echo $this->renderSection('content'); ?>

</body>
</html>
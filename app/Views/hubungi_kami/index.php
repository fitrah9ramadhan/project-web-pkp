<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="header-halaman"></div>
<h1>Hubungi Kami</h1>
<?php foreach ($kontak as $k):?>
	<p>Telpon: <?= $k['telefon']; ?></p>
	<p>Facebook: <?= $k['facebook']; ?></p>
	<p>Instagram: <?= $k['instagram']; ?></p>
	<p>Twitter: <?= $k['twitter']; ?></p>

<?php endforeach; ?>

<?php echo $this->endSection(); ?>
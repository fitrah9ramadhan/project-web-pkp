<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<h1>Sejarah Kecamatan</h1>

<p><?php echo $profil_kecamatan['sejarah_kecamatan']; ?></p>

<?php echo $this->endSection(); ?>
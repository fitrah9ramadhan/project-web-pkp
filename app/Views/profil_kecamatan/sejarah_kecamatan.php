<?php echo $this->extend('layout_dua/template'); ?>

<?php echo $this->section('content'); ?>

<div class="header-halaman"></div>
    <h1>Sejarah Kecamatan</h1>

    <p><?php echo $profil_kecamatan['sejarah_kecamatan']; ?></p>

<?php echo $this->endSection(); ?>
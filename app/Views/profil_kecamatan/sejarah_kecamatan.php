<?php echo $this->extend('layout_dua/template'); ?>

<?php echo $this->section('content'); ?>

<div class="header-halaman"></div>
    <div class="container">
        <h1>Sejarah Kecamatan</h1>

        <p><?php echo $profil_kecamatan['sejarah_kecamatan']; ?></p>
    </div>
<?php echo $this->endSection(); ?>
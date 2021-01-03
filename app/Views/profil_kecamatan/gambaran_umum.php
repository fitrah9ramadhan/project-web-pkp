<?php echo $this->extend('layout_dua/template'); ?>

<?php echo $this->section('content'); ?>

<div class="header-halaman"></div>
    <h1>Gambaran Umum</h1>

    <p><?php echo $profil_kecamatan['gambaran_umum']; ?></p>

<?php echo  $this->endSection(); ?>
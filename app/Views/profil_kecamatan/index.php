<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<h1>Gambaran Umum Kecamatan Balocci</h1>
<p><?php echo $profil_kecamatan['gambaran_umum']; ?></p>
<br>
<h1>Sejarah Kecamatan Balocci</h1>
<p><?php echo $profil_kecamatan['sejarah_kecamatan']; ?></p>
<h1>Peta Kecamatan Balocci</h1>
<img src="/img/<?php echo $profil_kecamatan['peta']; ?>"></img>

<?php echo $this->endSection(); ?>
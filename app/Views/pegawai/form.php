<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<form action="<?= $action; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>NIP</label>
        <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?= $pegawai->nip; ?>">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $pegawai->nama; ?>">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" value="<?= $pegawai->tgl_lahir; ?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat" placeholder="Alamat"><?= $pegawai->alamat; ?></textarea>
    </div>
    <div class="form-group">
        <label></label>
        <button type="submit" class="form-control btn btn-primary">Simpan</button>
    </div>
</form>
<?= $this->endSection(); ?>
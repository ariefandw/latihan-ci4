<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<a href="<?= site_url('pegawai/create'); ?>" class="btn btn-success">Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pegawais as $pegawai) : ?>
            <tr>
                <td><?= $pegawai->nip; ?></td>
                <td><?= $pegawai->nama; ?></td>
                <td><?= $pegawai->tgl_lahir; ?></td>
                <td><?= $pegawai->alamat; ?></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="<?= site_url('pegawai/edit/' . $pegawai->nip); ?>" class="btn btn-warning">edit</a>
                        <a href="<?= site_url('pegawai/delete/' . $pegawai->nip); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>
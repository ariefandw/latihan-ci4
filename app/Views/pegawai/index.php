<a href="<?= site_url('pegawai/create'); ?>" class="btn btn-success">Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pegawais as $pegawai) : ?>
            <tr>
                <td><?= $pegawai['nip']; ?></td>
                <td><?= $pegawai['nama']; ?></td>
                <td><?= $pegawai['tgl_lahir']; ?></td>
                <td><?= $pegawai['alamat']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
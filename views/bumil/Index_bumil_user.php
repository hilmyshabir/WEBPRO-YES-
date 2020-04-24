<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Bumil <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center"><?= $title ?></h3>
            <?php if (empty($bumil)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data tidak ditemukan
                </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">id Bumil</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Tanggal Pelayanan</th>
                        <th class="text-center" scope="col">Umur Kehamilan</th>
                        <th class="text-center" scope="col">Resiko Kehamilan</th>
                        <th class="text-center" scope="col">Hasil Penimbangan</th>
                        <th class="text-center" scope="col">Imunisasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($bumil as $bml) : ?>
                            <td class="text-center"><?= $bml['id_bumil']; ?></td>
                            <td class="text-center"><?= $bml['nama_bumil']; ?></td>
                            <td class="text-center"><?= $bml['tgl_pelayanan']; ?></td>
                            <td class="text-center"><?= $bml['umur_kehamilan']; ?></td>
                            <td class="text-center"><?= $bml['resiko_kehamilan']; ?></td>
                            <td class="text-center"><?= $bml['hasil_penimbangan']; ?></td>
                            <td class="text-center"><?= $bml['imunisasi']; ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url('bumil_controller_user/tambah_bumil'); ?>" class="btn btn-primary">Tambah Data Bumil</a>
                </div>
            </div>

        </div>
    </div>
</div>
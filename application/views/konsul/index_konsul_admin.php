<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Konsultasi <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
            <h3 class="text-center">Daftar Konsultasi</h3>
            <?php if (empty($konsul)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data tidak ditemukan
                </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama Balita</th>
                        <th class="text-center" scope="col">Nama Ibu</th>
                        <th class="text-center" scope="col">Tanggal Konsultasi</th>
                        <th class="text-center" scope="col">Waktu</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($konsul as $ksl) : ?>
                            <td class="text-center"><?= $ksl['nama_balita']; ?></td>
                            <td class="text-center"><?= $ksl['nama_ibu']; ?></td>
                            <td class="text-center"><?= $ksl['tgl_konsul']; ?></td>
                            <td class="text-center"><?= $ksl['waktu_konsul']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('konsul_controller_admin/hapus_konsul/'); ?><?= $ksl['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                                <a href="<?= base_url('konsul_controller_admin/edit_konsul/'); ?><?= $ksl['id'] ?>" class="badge badge-success float-center" ?>edit</a>
                            </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
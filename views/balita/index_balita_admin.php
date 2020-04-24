<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Balita <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
            <?php if (empty($balita)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data tidak ditemukan
                </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama Balita</th>
                        <th class="text-center" scope="col">Tanggal Lahir</th>
                        <th class="text-center" scope="col">Jenis Kelamin</th>
                        <th class="text-center" scope="col">Tinggi Badan</th>
                        <th class="text-center" scope="col">Berat Badan</th>
                        <th class="text-center" scope="col">Nama Ibu</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($balita as $blt) : ?>
                            <td class="text-center"><?= $blt['nama_balita']; ?></td>
                            <td class="text-center"><?= $blt['tgl_lahir']; ?></td>
                            <td class="text-center"><?= $blt['jk_balita']; ?></td>
                            <td class="text-center"><?= $blt['panjang_bdn']; ?></td>
                            <td class="text-center"><?= $blt['berat_bdn']; ?></td>
                            <td class="text-center"><?= $blt['nama_ibu']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url(); ?>posyandu_controller_admin/hapus_balita/<?= $blt['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                                <a href="<?= base_url(); ?>posyandu_controller_admin/edit_balita/<?= $blt['id'] ?>" class="badge badge-success float-center" ?>edit</a>
                            </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
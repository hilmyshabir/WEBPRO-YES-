<script>
    var baseurl = "<?= base_url("index_balita_user.php/"); ?>";
</script>
<script src="<?= base_url('js/jquery-3.5.1.min.js'); ?>"></script>
<script src="<?= base_url('js/config.js'); ?>"></script>




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
                    <input type="text" class="form-control" placeholder="" name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="btn-search">Cari</button>
                        <a class="btn btn-danger" href="<?= base_url('posyandu_controller_user/index_balita_user') ?>">Reset</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col" id="view">
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
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>posyandu_controller_user/tambah_balita" class="btn btn-primary">Tambah Data Balita</a>
                </div>
            </div>

        </div>
    </div>
</div>
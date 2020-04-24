<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Balita
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $balita['id'] ?>">
                        <div class="form-group">
                            <label for="nama_balita">Nama Balita</label>
                            <input type="text" class="form-control" id="nama_balita" name="nama_balita" value="<?= $balita['nama_balita']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_balita') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $balita['tgl_lahir']; ?>">
                            <small class="form-text text-danger"><?= form_error('tgl_lahir') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="jk_balita">Jenis Kelamin : </label><br>
                            <input type="radio" id="laki-laki" name="jk_balita" value="Laki-laki">
                            <label for="laki-laki">Laki-laki</label>
                            <input type="radio" id="perempuan" name="jk_balita" value="Perempuan">
                            <label for="perempuan">Perempuan</label>
                            <small class="form-text text-danger"><?= form_error('jk_balita') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="panjang_bdn">Panjang Badan</label>
                            <input type="number" class="form-control" id="panjang_bdn" name="panjang_bdn" value="<?= $balita['panjang_bdn']; ?>">
                            <small class="form-text text-danger"><?= form_error('panjang_bdn') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="berat_bdn">Berat Badan</label>
                            <input type="number" class="form-control" id="berat_bdn" name="berat_bdn" value="<?= $balita['berat_bdn']; ?>">
                            <small class="form-text text-danger"><?= form_error('berat_bdn') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $balita['nama_ibu']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_ibu') ?>.</small>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('posyandu_controller_admin/index_balita_admin') ?>" class="btn btn-secondary float left">Batal</a>
                            <button type="submit" name="" class="btn btn-primary float-right">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
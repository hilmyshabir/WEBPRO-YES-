<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Ibu Hamil
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $bumil['id']; ?>">
                        <div class="form-group">
                            <label for="id_bumil">id Bumil</label>
                            <input type="text" class="form-control" id="id_bumil" name="id_bumil" value="<?= $bumil['id_bumil']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('id_bumil') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama_bumil">Nama</label>
                            <input type="text" class="form-control" id="nama_bumil" name="nama_bumil" value="<?= $bumil['nama_bumil']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_bumil') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_pelayanan">Tanggal Pelayanan</label>
                            <input type="date" class="form-control" id="tgl_pelayanan" name="tgl_pelayanan" value="<?= $bumil['tgl_pelayanan']; ?>">
                            <small class="form-text text-danger"><?= form_error('tgl_pelayanan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="umur_kehamilan">Umur Kehamilan</label>
                            <input type="number" class="form-control" id="umur_kehamilan" name="umur_kehamilan" value="<?= $bumil['umur_kehamilan']; ?>">
                            <small class="form-text text-danger"><?= form_error('umur_kehamilan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="resiko_kehamilan">Resiko Kehamilan</label>
                            <input type="text" class="form-control" id="resiko_kehamilan" name="resiko_kehamilan" value="<?= $bumil['resiko_kehamilan']; ?>">
                            <small class="form-text text-danger"><?= form_error('resiko_kehamilan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="hasil_penimbangan">Hasil Penimbangan</label>
                            <input type="number" class="form-control" id="hasil_penimbangan" name="hasil_penimbangan" value="<?= $bumil['hasil_penimbangan']; ?>">
                            <small class="form-text text-danger"><?= form_error('hasil_penimbangan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="imunisasi">Imunisasi</label>
                            <input type="text" class="form-control" id="imunisasi" name="imunisasi" value="<?= $bumil['imunisasi']; ?>">
                            <small class="form-text text-danger"><?= form_error('imunisasi') ?>.</small>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('bumil_controller_admin/index_bumil_admin'); ?>" class="btn btn-secondary float left">Batal</a>
                            <button type="submit" name="edit_bumil" class="btn btn-primary float-right">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
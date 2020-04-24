<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Konsultasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_balita">Nama Balita</label>
                            <input type="text" class="form-control" id="nama_balita" name="nama_balita">
                            <small class="form-text text-danger"><?= form_error('nama_balita') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                            <small class="form-text text-danger"><?= form_error('nama_ibu') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_konsul">Tanggal Konsultasi</label>
                            <input type="date" class="form-control" id="tgl_konsul" name="tgl_konsul">
                            <small class="form-text text-danger"><?= form_error('tgl_konsul') ?>.</small>
                        </div>
                        <div class="time">
                            <label for="waktu_konsul">Waktu</label>
                            <select class="time" id="waktu_konsul" name="waktu_konsul">
                                <option>pilih waktu</option>
                                <option>08:00</option>
                                <option>08:30</option>
                                <option>09:00</option>
                                <option>09:30</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('konsul_controller_user/index_konsul_user'); ?>" class="btn btn-secondary float left">Batal</a>
                            <button type="submit" name="tambah_konsul" class="btn btn-primary float-right">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
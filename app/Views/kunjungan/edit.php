<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>

<div  id="content-wrapper" class="d-flex flex-column">    
    <div id="content">
        <!-- End of Topbar -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-2 text-gray-800">EDIT KUNJUNGAN KERJA</h1>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto width: 1200px;" >
                    <form action="" method="post" id="text-editor">
                        <?= csrf_field() ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tanggal Bertamu</label>
                                <input type="text" name="tanggal_bertamu" class="form-control" placeholder="tanggal bertamu" value="<?= $kunjungan['tanggal_bertamu'] ?>"required disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control" placeholder="nama petugas" value="<?= $kunjungan['nama_petugas'] ?>" required>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Debitur</label>
                                <input type="text" name="nama_debitur" class="form-control" value="<?= $kunjungan['nama_debitur'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $kunjungan['alamat'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Tujuan</label>
                                <select class="form-control">
                                    <option selected><?= $kunjungan['tujuan'] ?></option>
                                    <option>Prospek</option>
                                    <option>Pick Up Dana</option>
                                    <option>Penagihan</option>
                                    <option>Survey</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hasil</label>
                                <input type="text" name="hasil" class="form-control" value="<?= $kunjungan['hasil'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="text" name="gamlap" class="form-control" value="<?= $kunjungan['gamlap'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Pilih Gambar</label>
                                <input type="file" name="gamlap" class="costum-file-input" id="costumFile2">
                            </div>
                            <button type="submit" name="status" value="published" class="btn btn-primary">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
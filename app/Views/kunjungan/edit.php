<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>

<div id="content-wrapper" class="d-flex flex-column">    
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
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tanggal Bertamu</label>
                                <input  class="form-control" placeholder="tanggal bertamu" value="<?= $kunker->tanggal_bertamu ?>"disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nama Petugas</label>
                                <input  class="form-control" value="<?= user()->fullname; ?>" disabled>   
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Debitur</label>
                            <input type="text" name="nama_debitur" class="form-control" value="<?= $kunker->nama_debitur ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $kunker->alamat ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tujuan</label>
                            <select name="tujuan" class="form-control">
                                <option value="Prospek"<?= ($kunker->tujuan == "Prospek" ? "selected" : "")?>>Prospek</option>
                                <option value="Pick Up Dana"<?= ($kunker->tujuan == "Pick Up Dana" ? "selected" : "")?>>Pick Up Dana</option>
                                <option value="Penagihan"<?= ($kunker->tujuPenagihanan == "Penagihan" ? "selected" : "")?>>Penagihan</option>
                                <option value="Survey"<?= ($kunker->tujuan == "Survey" ? "selected" : "")?>>Survey</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hasil</label>
                            <input type="text" name="hasil" class="form-control" value="<?= $kunker->hasil ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Hasil</label>
                            <input type="text" name="gamlap" class="form-control" value="<?= $kunker->gamlap ?>" required>
                        </div>
                           
                            <button type="submit" name="Submit" value="published" class="btn btn-primary mb-4">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
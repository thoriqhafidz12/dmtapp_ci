<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>
    <div class="loading-page">
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
    <div id="Moduleloader-page" class="jssorl-009-spin">
        <img src="image/spin.svg" />
    </div>  
    <div class="content">
        <div class="container-fluid">
            <h2 >FORM BUKU PENDATAAN KUNJUNGAN KERJA</h2>
            <!-- DataTales Example -->
            <div class="card shadow mb-4 bottom-slide">
                <div class="card-body">
                    <h4 align="center" class="mb-4">Silahkan isi daftar dibawah ini</h4>
                    <form action="<?= base_url(); ?>/kunjungan/save" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger" role="alert">
                                <h4><i class="fas a-solid fa-exclamation"></i> Periksa Data Form</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                            <div class="alert alert-success" role="alert">
                                <h4><i class="fas fa-thin fa-check"></i> Data Berhasil Masuk</h4>
                                </hr />
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label>Nama Debitur/Calon Debitur/Nasabah</label>
                                    <input type="text" class="form-control" name="id_petugas" value="<?= user()->id; ?>" hidden/>
                                    <input type="text" class="form-control" name="nama_petugas" value="<?= user()->fullname; ?>" hidden/>
                                    <input class="form-control" name="tanggal_bertamu" value="<?= date('Y-m-d H:i:s'); ?>" hidden/>
                                    <input type="text" class="form-control" name="nama_debitur" onkeypress="return huruf(event)" required/>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" onkeypress="return huruf dan angka(event, false)" required/>
                                    <br>
                                </div>      
                            </div>
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label>Tujuan</label>
                                    <select name='tujuan' class="form-control" required>
                                        <option value='Prospek'>Prospek</option>
                                        <option value='Survey'>Survey</option>
                                        <option value='Penagihan'>Penagihan</option>
                                        <option value='Pick Up Dana'>Pick Up Dana</option>
                                        <option value='Lain lain'>Lain-lain</option>
                                    </select>
                                    <br>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group last mb-3">
                                    <label>Hasil</label>
                                    <input type="text" class="form-control" name="hasil" required>
                                    <label>Pengisian Hasil dilarang menggunakan tanda petik ( ' )</label>
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group last mb-3">
                                    <label for ="formFile" class="form-label">Foto</label>
                                    <input type="file" class="form-control" id="formFile" name="gamlap">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex mb-5 mt-4 align-items-center">
                                    <div class="d-flex align-items-center"><input type="checkbox" required/>
                                    <label class="control control--checkbox mb-0 ml-2"><span class="caption">Saya telah mengisi data diatas dengan benar</a>.</span>
                                    
                                    <div class="control__indicator"></div>
                                    </label>
                                </div>
                            </div>
                            <input type="submit" value="Submit" class="btn px-5 btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?= $this->endSection(); ?>
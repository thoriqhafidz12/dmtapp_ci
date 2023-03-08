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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h2">FORM BUKU PENDATAAN KUNJUNGAN KERJA</h1>
            </div>
        </div>

        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 align="center" class="mb-4">Silahkan isi daftar dibawah ini</h4>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label>Nama Debitur/Calon Debitur/Nasabah</label>
                                    <input type="text" class="form-control" name="nama_petugas" value="<?= user()->fullname; ?>" hidden/>
                                    <input type="" class="form-control" name="tanggal_bertamu" value="<?= date('Y-m-d H:i:s'); ?>" hidden/>
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
                                    <input input type="text" class="form-control" name="hasil" required>
                                    <label>Pengisian Hasil dilarang menggunakan tanda petik ( ' )</label>
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group last mb-3">
                                    <label>Foto</label>
                                    <input input type="file" class="form-control" name="gamlap">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex mb-5 mt-4 align-items-center">
                                    <div class="d-flex align-items-center"><input type="checkbox" required/>
                                    <label class="control control--checkbox mb-0"><span class="caption">Saya telah mengisi data diatas dengan benar</a>.</span>
                                    
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
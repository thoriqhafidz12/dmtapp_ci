<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>
<link href="<?= base_url();?>css/form.css" rel="stylesheet">
    <div class="loading-page">
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
    <div id="Moduleloader-page" class="jssorl-009-spin">
        <img src="image/spin.svg" />
    </div>
    <div  id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- End of Topbar -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">EDIT PENDAFTARAN KREDIT</h1>
                    <a class="btn btn-danger" href="<?= base_url('kredit'); ?>">Cancel</a>
                </div>
                <?php if( in_groups('admin'))?>
                    <?php if( ($kredit->stts_pnd == 'Pemberkasan dan Registrasi')):  ?>
                        <h1 class="h3 mb-0 text-gray-800">Lanjutkan Proses Survey</h1>
                    <?php elseif( ($kredit->stts_pnd == 'Survey')) : ?>
                        <h1 class="h3 mb-0 text-gray-800">Lanjutkan Proses Analisa</h1> 
                    <?php elseif( ($kredit->stts_pnd == 'Analisa')) : ?>
                        <h1 class="h3 mb-0 text-gray-800">Lanjutkan Proses Komite</h1> 
                    <?php elseif( ($kredit->stts_pnd == 'Komite')) : ?>
                        <h1 class="h3 mb-0 text-gray-800">Lanjutkan Proses Realisasi</h1>  
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="wrapper my-5 mx-auto" style="max-width: 540px">
                    <form action="" method="post" id="form-slide" enctype="multipart/form-data">
                        <div id="slide">
                            <div class="form-group">
                                <label>Produk</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="produk" type="text" class="form-control" value="<?= $kredit->produk; ?>" required>
                                    <input class="form-control" name="id_petugas" value="<?= $kredit->id_petugas; ?>" hidden>
                                    <input class="form-control" name="stts_pnd" value="<?= $kredit->stts_pnd ?>" hidden>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Pendaftaran</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input type="text" class="form-control" name="tgl_daftar" value="<?= $kredit->tgl_daftar; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-flex align-items-center justify-content-around">
                                    <?php if( in_groups('admin')):?>
                                        <?php if( ($kredit->stts_pnd == 'Pemberkasan dan Registrasi')):  ?>
                                            <label>Tanggal Survey</label>
                                            <input type="date" placeholder="Tanggal Survey" class="form-control" name="tgl_survey" required>  

                                        <?php elseif( ($kredit->stts_pnd == 'Survey')) : ?>
                                            <label>Tanggal Survey</label>
                                            <input type="date" class="form-control" name="tgl_survey" value="<?= $kredit->tgl_survey; ?>"  >
                                            
                                        <?php elseif( ($kredit->stts_pnd == 'Analisa')) : ?>
                                            <label>Tanggal Survey</label>
                                            <input type="date" class="form-control" name="tgl_survey" value="<?= $kredit->tgl_survey; ?>">
                                            </div>
                                            </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-around">
                                            <label>Tanggal Komite</label>
                                            <input type="date" class="form-control" name="tgl_komite" required>

                                        <?php elseif( ($kredit->stts_pnd == 'Komite')) : ?>
                                            <label>Tanggal Survey</label>
                                            <input type="date" class="form-control" name="tgl_survey" value="<?= $kredit->tgl_survey; ?>">
                                            </div>
                                            </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-around">
                                            <label>Tanggal Komite</label>
                                            <input type="date" class="form-control" name="tgl_komite" value="<?= $kredit->tgl_komite; ?>">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-around">
                                            <label>Tanggal Realisasi</label>
                                            <input type="date" placeholder="Tanggal Realisasi" class="form-control" name="tgl_realisasi" required>  
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Petugas</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="nama_petugas"  value="<?= $kredit->nama_petugas; ?>" type="text" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jangka Waktu</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="jangka" type="text" class="form-control" value="<?= $kredit->jangka; ?>"><span class="input-group-text" id="basic-addon2">Bulan</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Proses</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="proses" type="text" class="form-control" value="<?= $kredit->proses; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Plafon</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="plafon" type="text" class="form-control" value="<?= $kredit->plafon; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="status" type="text" class="form-control" value="<?= $kredit->status; ?>">
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="button" id="btn-next" class="btn btn-secondary">Next</button>
                            </div>
                        </div>

                        <div id="slide">
                            <h3 class="h3">DATA PEMOHON</h3><hr>
                            <div class="form-group">
                                <label> Nama KTP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="nama_pem" type="text" class="form-control" placeholder="Sesuai KTP" value="<?= $kredit->nama_pem; ?>">
                                    <input name="jenis_pem" style="width: 135px"type="text" class="form-control" placeholder="Sesuai KTP" value="<?= $kredit->jenis_pem; ?>">
                                    <!-- <select name="jenis_pem" class="form-control bg-primary" style="width: 135px;color:white;" required>
                                        <option value='Laki-laki'>Laki-laki</option> 
                                        <option value='Perempuan'>Perempuan</option>
                                    </select> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Panggilan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="nama_pang" type="text" class="form-control" value="<?= $kredit->nama_pang; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tempat Tanggal Lahir</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="ttl1" type="text" class="form-control" placeholder="Sesuai KTP" value="<?= $kredit->ttl1; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor KTP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="no_ktp" type="text" class="form-control" placeholder="Sesuai KTP" value="<?= $kredit->no_ktp; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Foto KTP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="foto_ktp" class="form-control" type="text" hidden value="<?= $kredit->foto_ktp; ?>">
                                    <img src="<?= base_url('img/ktp/'.$kredit->foto_ktp.'') ?>" alt="" style="width: 120px;">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label>Masa Berlaku</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="masa_ber" type="text" class="form-control">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label>Nama Ibu Kandung</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="nama_ibu" type="text" class="form-control" value="<?= $kredit->nama_ibu; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="pend_ter" type="text" class="form-control" value="<?= $kredit->pend_ter; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Profesi</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="profesi" type="text" class="form-control" value="<?= $kredit->profesi; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Usaha</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="usaha" type="text" class="form-control" value="<?= $kredit->usaha; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="status_kaw" type="text" class="form-control" value="<?= $kredit->status_kaw; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Tanggungan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="jumlah_tang" id="input9" type="text" class="form-control" value="<?= $kredit->jumlah_tang; ?>"><span class="input-group-text" id="basic-addon2">Orang</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon / HP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="no_telp" type="text" class="form-control" value="<?= $kredit->no_telp; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Pasangan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="nama_pas" type="text" class="form-control" value="<?= $kredit->nama_pas; ?>">
                                    <input name="jenis_pas" type="text" class="form-control" style="width:135px;" value="<?= $kredit->jenis_pas; ?>">
                                    <!-- <select name="jenis_pas" class="form-control bg-primary" style="width: 135px;color:white;" required>
                                            <option value='Laki-laki'>Laki-laki</option> 
                                            <option value='Perempuan'>Perempuan</option>
                                    </select> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status Pasangan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="status_pas" id="input13" type="text" class="form-control" value="<?= $kredit->status_pas; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tempat/Tgl. Lahir</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="ttl_pas" id="input14" type="text" class="form-control" value="<?= $kredit->ttl_pas; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor KTP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="no_ktp2" id="input15" type="text" class="form-control" value="<?= $kredit->no_ktp2; ?>">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label>Masa Berlaku</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="masa_ber" type="text" class="form-control">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="pend_ter2" id="input16" type="text" class="form-control" value="<?= $kredit->pend_ter2; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Profesi / Pekerjaan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="profesi2" id="input17" type="text" class="form-control" value="<?= $kredit->profesi2; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Usaha</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="usaha2" id="input18" type="text" class="form-control" value="<?= $kredit->usaha2; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon / HP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="no_telp2" id="input19" type="text" class="form-control" value="<?= $kredit->no_telp2; ?>">
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" id="btn-before">Back</button>
                                <button type="button" class="btn btn-primary" id="btn-next">Next</button>
                            </div>
                        </div>

                        <div id="slide">
                            <h3 class="h3">Keterangan Tempat Tinggal</h3><hr>
                            <h5 class="h5">Alamat Tempat Tinggal Saat Ini</h5>
                            <div class="form-group">
                                <label>Jalan / Desa / Kel.</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input type="text" name="jl" class="form-control" value="<?= $kredit->jl; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>RT / RW</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input type="text" name="rtrw" class="form-control" value="<?= $kredit->rtrw; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kecamatan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input  type="text" name="kec" class="form-control" value="<?= $kredit->kec; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kabupaten / Kota</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="kab" type="text" class="form-control" value="<?= $kredit->kab; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Telepon / Fax</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="no_telp3" type="text" class="form-control" value="<?= $kredit->no_telp3; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kode Pos</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="kopos" type="text" class="form-control" value="<?= $kredit->kopos; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>HP</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="hp" type="text" class="form-control" value="<?= $kredit->hp; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Status Tempat Tinggal</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="status_ting" type="text" class="form-control" value="<?= $kredit->status_ting; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Lama Menempati Rumah</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="lama" type="text" class="form-control" value="<?= $kredit->lama; ?>"><span class="input-group-text" id="basic-addon2">Tahun</span>
                                </div>
                            </div>

                            <hr>
                            <h5 class="h5">Alamat Sesuai KTP</h5>
                            <div class="form-group">
                                <label>Jalan / Desa / Kel.</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="jl2" type="text" class="form-control" value="<?= $kredit->jl2; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>RT / RW</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="rtrw2" type="text" class="form-control" value="<?= $kredit->rtrw2; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kecamatan</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="kec2" type="text" class="form-control" value="<?= $kredit->kec2; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kabupaten / Kota</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="kab2" type="text" class="form-control" value="<?= $kredit->kab2; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Telepon / Fax</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="no_telp4" type="text" class="form-control" value="<?= $kredit->no_telp4; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kode Pos</label>
                                <div class="d-flex align-items-center justify-content-around" >
                                    <input name="kopos2" type="text" class="form-control" value="<?= $kredit->kopos2; ?>">
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" id="btn-before">Back</button>
                                <button type="button" class="btn btn-primary" id="btn-next">Next</button>
                            </div>
                        </div>

                        <div id="slide">
                            <h3 class="h3">Informasi Pekerjaan / Usaha dan Keuangan</h3><hr>
                            <div class="form-group">
                                <label>Tipe Pendapatan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="tipe" type="text" class="form-control" value="<?= $kredit->tipe; ?>">
                                    <!-- <select name="tipe" class="form-control" required>
                                        <option value='PNS'>PNS</option> 
                                        <option value='SWASTA'>SWASTA</option>
                                    </select> -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nama Badan (Toko,UD,CV,Dinas)</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="nama_badan" type="text" class="form-control"value="<?= $kredit->nama_badan; ?>" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kegiatan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="jenis_keg" type="text" class="form-control" value="<?= $kredit->jenis_keg; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Bidang</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="bidang" type="text" class="form-control" value="<?= $kredit->bidang; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="alamat" type="text" class="form-control" value="<?= $kredit->alamat; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kelurahan & RT / RW</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="kel" type="text" class="form-control mr-2" value="<?= $kredit->kel; ?>">
                                    <input name="rtrw3" type="text" class="form-control" value="<?= $kredit->rtrw3; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kecamatan / Kab. - Kota</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="kec3" type="text" class="form-control mr-2" value="<?= $kredit->kec3; ?>">
                                    <input name="kab3" type="text" class="form-control" value="<?= $kredit->kab3; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Telepon</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="no_telp5" type="text" class="form-control" value="<?= $kredit->no_telp5; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>No. NPWP (jika ada)</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="npwp" type="text" class="form-control" value="<?= $kredit->npwp; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>No. SIUP (jika ada)</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="siup" type="text" class="form-control" value="<?= $kredit->siup; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Lama</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="lama2" type="text" class="form-control" value="<?= $kredit->lama2; ?>"><span class="input-group-text">Tahun</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Omset / Gaji Perbulan</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="omset" type="text" class="form-control" value="<?= $kredit->omset; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Laba Per Bulan</label>
                                <div class="d-flex align-items-center justify-content-around ">
                                    <input name="laba" type="text" class="form-control" value="<?= $kredit->laba; ?>">
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" id="btn-before">Back</button>
                                <button type="button" class="btn btn-primary" id="btn-next">Next</button>
                            </div>
                        </div>

                        <div id="slide">
                            <h3 class="h3">Informasi Agunan</h3><hr>
                            <div class="form-group">
                                <label>Informasi Agunan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="informasi" class="form-control" type="text" value="<?= $kredit->informasi; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Foto Agunan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="foto_agunan" class="form-control" type="text" hidden value="<?= $kredit->foto_agunan; ?>">
                                    <img src="<?= base_url('img/agunan/'.$kredit->foto_agunan.'') ?>" alt="" style="width: 120px;">
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" id="btn-before">Back</button>
                                <button type="button" class="btn btn-primary" id="btn-next">Next</button>
                            </div>
                        </div>

                        <div id="slide">
                            <h3 class="h3">Informasi Lain</h3><hr>
                            <div class="form-group">
                                <label>Tujuan Pengajuan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="tujuan" class="form-control" type="text" value="<?= $kredit->tujuan; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Angsuran Diinginkan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="angsuran" class="form-control" type="text" value="<?= $kredit->angsuran; ?>"><span class="input-group-text" id="basic-addon2">Per Bulan</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Take Over</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="takover" class="form-control" type="text" value="<?= $kredit->takover; ?>">
                                    <!-- <Select class="form-control mr-2" name="takover">
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>
                                    </Select> -->
                                    <label>Bank</label>
                                    <input type="text" name="bank" class="form-control ml-2" value="<?= $kredit->bank; ?>">
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" id="btn-before">Back</button>
                                <button type="button" class="btn btn-primary" id="btn-next">Next</button>
                            </div>
                        </div>

                        <div id="slide">
                            <h3 class="h3">Bukti Tanda Tangan</h3><hr>
                            <div class="form-group">
                                <label>Tanda Tangan Pemohon</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="ttd_daftar" class="form-control" type="text" hidden value="<?= $kredit->ttd_daftar; ?>" >
                                    <img src="<?= base_url('img/ttd/daftar/'.$kredit->ttd_daftar.'') ?>" alt="" style="width: 120px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanda Tangan Petugas</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="ttd_petugas" class="form-control" type="text" hidden value="<?= $kredit->ttd_petugas; ?>">
                                    <img src="<?= base_url('img/ttd/petugas/'.$kredit->ttd_petugas.'') ?>" alt="" style="width: 120px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanda Tangan Proses Slick</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input name="ttd_slick" class="form-control" type="text" hidden value="<?= $kredit->ttd_slick; ?>">
                                    <img src="<?= base_url('img/ttd/slick/'.$kredit->ttd_slick.'') ?>" alt="" style="width: 120px;">
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" id="btn-before">Back</button>
                                <button type="submit" onclick="swal({ title: 'Success', text: 'Form submitted!', button: 'Okay', icon: 'success' }, {title: 'Error', text: 'Form submitted!', button: 'Okay', icon: 'error' })" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div> 
    </div> 
<script src="<?= base_url ('/js/form.js')?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?= $this->endSection(); ?>
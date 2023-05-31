<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>
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
                <div class="row text-center">
                    <div class="col order-first"><h class="h3 text-gray-800">Pengajuan Kredit</h></div>
                    <div class="col order-last"><a href="<?= base_url('kredit/' . $kredit->id.'/cetak'); ?>" class="btn btn-danger mb-4 align-right" target="_blank"> Cetak </a></div>
                    <div class="col"><span class="badge badge-<?= ($kredit->stts_pnd == 'Pemberkasan dan Registrasi') ? 'danger' : (($kredit->stts_pnd == 'Analisa')?'warning':(($kredit->stts_pnd == 'Survey')?'info':(($kredit->stts_pnd == 'Komite')?'secondary':(($kredit->stts_pnd == 'Komite')?'primary':'success'))));?>"><?= $kredit->stts_pnd; ?></span></div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="container">
                        <ul class="list-group text-center">
                            <li class="list-group-item list-group-item-primary col-md-6 offset-md-3">Atas Nama : <?= $kredit->nama_pem; ?></li>
                            <li class="list-group-item list-group-item-primary col-md-6 offset-md-3">Pendaftaran Tanggal : <?= date('d-F-Y H:i:s', strtotime($kredit->tgl_daftar)) ?></li>
                            <li class="list-group-item list-group-item-primary col-md-6 offset-md-3">Plafon : <?= $kredit->plafon; ?></li>
                            <li class="list-group-item list-group-item-primary col-md-6 offset-md-3">Produk : <?= $kredit->produk; ?></li>
                            <li class="list-group-item list-group-item-primary col-md-6 offset-md-3">Petugas : <?= $kredit->nama_petugas; ?></li>
                            <li class="list-group-item list-group-item-primary col-md-6 offset-md-3">Proses Pendaftaran : <?= $kredit->proses; ?></li>
                            <li class="list-group-item list-group-item-primary col-md-6 offset-md-3">Status Pendaftaran : <?= $kredit->status; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="container">
                    <h5 class="text-center">Data Pemohon</h5>
                        <div class="col-md-6 offset-md-3">
                            <div class="row row-cols-auto">
                                <div class="row row-cols-2">
                                <div class="col"><strong>Nama Petugas</strong></div>
                                <div class="col">: <?= $kredit->nama_petugas; ?></div>   
                                <div class="col"><strong>Nama Calon Nasabah</strong></div>
                                <div class="col">: <?= $kredit->nama_pem; ?> (<?= $kredit->jenis_pem; ?>)</div>  
                                <div class="col"><Strong>Nama Panggilan</Strong></div>
                                <div class="col">: <?= $kredit->nama_pang; ?></div>   
                                <div class="col"><strong>Tempat /TglLahir</strong></div>
                                <div class="col">: <?= $kredit->ttl1; ?></div>    
                                <div class="col"><strong>No KTP</strong></div>
                                <div class="col">: <?= $kredit->no_ktp; ?></div>    
                                <div class="col"><strong>Nama Ibu Kandung</strong></div>
                                <div class="col">: <?= $kredit->nama_ibu; ?></div>
                                <div class="col"><strong>Pendidikan Terakhir</strong></div>
                                <div class="col">: <?= $kredit->pend_ter; ?></div>
                                <div class="col"><strong>Profesi /Pekerjaan</strong></div>
                                <div class="col">: <?= $kredit->profesi; ?></div>
                                <div class="col"><strong>Usaha</strong></div>
                                <div class="col">: <?= $kredit->usaha; ?></div>
                                <div class="col"><strong>Status Perkawinan</strong></div>
                                <div class="col">: <?= $kredit->status_kaw; ?></div>
                                <div class="col"><strong>Jumlah Tanggungan</strong></div>
                                <div class="col">: <?= $kredit->jumlah_tang; ?> Orang</div>
                                <div class="col"><strong>No. Telp/HP</strong></div>
                                <div class="col">: <?= $kredit->no_telp; ?></div>
                                <div class="col"><strong>Nama Pasangan</strong></div>
                                <div class="col">: <?= $kredit->nama_pas; ?>(<?= $kredit->jenis_pas; ?>)</div>
                                <div class="col"><strong>Status Pasangan</strong></div>
                                <div class="col">: <?= $kredit->status_pas; ?></div>
                                <div class="col"><strong>Tempat/ TglLahir</strong></div>
                                <div class="col">: <?= $kredit->ttl_pas; ?></div>
                                <div class="col"><strong>No. KTP</strong></div>
                                <div class="col">: <?= $kredit->no_ktp2; ?></div>
                                <div class="col"><strong>Pendidikan Terakhir</strong></div>
                                <div class="col">: <?= $kredit->pend_ter2; ?></div>
                                <div class="col"><strong>Profesi / Pekerjaan</strong></div>
                                <div class="col">: <?= $kredit->profesi2; ?></div>
                                <div class="col"><strong>Usaha</strong></div>
                                <div class="col">: <?= $kredit->usaha2; ?></div>
                                <div class="col"><strong>No. Telp/HP</strong></div>
                                <div class="col mb-4">: <?= $kredit->no_telp2; ?></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="container">
                    <h5 class="text-center">Keterangan Tempat Tinggal</h5>
                        <div class="col-md-6 offset-md-3">
                            <div class="row row-cols-auto">
                                <div class="row row-cols-2">
                                    <div class="col-auto">
                                        <p><strong>Alamat Tempat Tinggal :</strong></p>
                                        <div class="row row-cols-auto">
                                            <div class="row row-cols-2">
                                                <div class="col"><strong>Jalan / Desa / Kel </strong></div>
                                                <div class="col">: <?= $kredit->jl; ?></div>
                                                <div class="col"><strong>RT / RW </strong></div>
                                                <div class="col">: <?= $kredit->rtrw; ?></div>
                                                <div class="col"><strong>Kecamatan </strong></div>
                                                <div class="col">: <?= $kredit->kec; ?></div>
                                                <div class="col"><strong>Kabupaten / Kota</strong></div>
                                                <div class="col">: <?= $kredit->kab; ?></div>
                                                <div class="col"><strong>Telepon / Fax </strong></div>
                                                <div class="col">: <?= $kredit->no_telp3; ?></div>
                                                <div class="col"><strong>Kode Pos</strong></div>
                                                <div class="col">: <?= $kredit->kopos; ?></div>
                                                <div class="col"><strong>HP </strong></div>
                                                <div class="col">: <?= $kredit->hp; ?></div>
                                                <div class="col"><strong>Status Tempat Tinggal</strong></div>
                                                <div class="col">: <?= $kredit->status_ting; ?></div>
                                                <div class="col"><strong>Lama Menempati Rumah</strong></div>
                                                <div class="col mb-4">: <?= $kredit->lama; ?> Tahun</div>
                                            </div>
                                        </div>
                                        <p class="mt-2"><strong>Alamat Sesuai KTP :</strong></p>
                                        <div class="row row-cols-auto">
                                            <div class="row row-cols-2">
                                                <div class="col"><strong>Jalan / Desa / Kel </strong></div>
                                                <div class="col">: <?= $kredit->jl2; ?></div>
                                                <div class="col"><strong>RT / RW</strong></div>
                                                <div class="col">: <?= $kredit->rtrw2; ?></div>
                                                <div class="col"><strong>Kecamatan </strong></div>
                                                <div class="col">: <?= $kredit->kec2; ?></div>
                                                <div class="col"><strong>Kabupaten / Kota</strong></div>
                                                <div class="col">: <?= $kredit->kab2; ?></div>
                                                <div class="col"><strong>Telepon / Fax </strong></div>
                                                <div class="col">: <?= $kredit->no_telp4; ?></div>
                                                <div class="col"><strong>Kode Pos</strong></div>
                                                <div class="col">: <?= $kredit->kopos2; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="container">
                        <h5 class="text-center">Informasi Pekerjaan/Usaha dan Keuangan</h5>
                        <div class="col-md-6 offset-md-3">
                            <div class="row row-cols-auto">
                                <div class="row row-cols-2">
                                    <div class="col-auto">
                                        <div class="row row-cols-auto">
                                            <div class="row row-cols-2">
                                                <div class="col"><strong>Tipe Pendapatan </strong></div>
                                                <div class="col">: <?= $kredit->tipe; ?></div>
                                                <div class="col"><strong>Nama Badan </strong></div>
                                                <div class="col">: <?= $kredit->nama_badan; ?></div>
                                                <div class="col"><strong>Jenis Kegiatan </strong></div>
                                                <div class="col">: <?= $kredit->jenis_keg; ?></div>
                                                <div class="col"><strong>Bidang</strong></div>
                                                <div class="col">: <?= $kredit->bidang; ?></div>
                                                <div class="col"><strong>Alamat </strong></div>
                                                <div class="col">: <?= $kredit->alamat; ?></div>
                                                <div class="col"><strong>Kelurahan </strong></div>
                                                <div class="col">: <?= $kredit->kel; ?></div>
                                                <div class="col"><strong>RT / RW </strong></div>
                                                <div class="col">: <?= $kredit->rtrw3; ?></div>
                                                <div class="col"><strong>Kecamatan </strong></div>
                                                <div class="col">: <?= $kredit->kec3; ?></div>
                                                <div class="col"><strong>Kabupaten / Kota</strong></div>
                                                <div class="col">: <?= $kredit->kab3; ?></div>
                                                <div class="col"><strong>Telepon / Fax</strong></div>
                                                <div class="col">: <?= $kredit->no_telp5; ?></div>
                                                <div class="col"><strong>NPWP (jika ada)</strong></div>
                                                <div class="col">: <?= $kredit->npwp; ?></div>
                                                <div class="col"><strong>No. SIUP (jika ada)</strong></div>
                                                <div class="col">: <?= $kredit->siup; ?></div>
                                                <div class="col"><strong>Lama </strong></div>
                                                <div class="col mb-2">: <?= $kredit->lama2; ?> Tahun</div>
                                                <div class="col"><strong>Omset / Gaji Per Bulan</strong></div>
                                                <div class="col">: <?= $kredit->omset; ?></div>
                                                <div class="col"><strong>Laba Per Bulan</strong></div>
                                                <div class="col mb-4">: <?= $kredit->laba; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="container">
                    <h5 class="text-center">Informasi Agunan</h5>
                        <div class="col-md-6 offset-md-3">
                            <div class="row row-cols-auto">
                                <div class="row row-cols-2">
                                    <div class="col-auto">
                                        <div class="row row-cols-auto">
                                            <div class="row row-cols-2">
                                                <div class="col"><strong>*Jika Agunan Tanah </strong></div>
                                                <div class="col">: <?= $kredit->informasi; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="container">
                    <h5 class="text-center">Informasi Lain</h5>
                        <div class="col-md-6 offset-md-3">
                            <div class="row row-cols-auto">
                                <div class="row row-cols-2">
                                    <div class="col-auto">
                                        <div class="row row-cols-auto">
                                            <div class="row row-cols-2">
                                                <div class="col"><strong>Tujuan Pengajuan </strong></div>
                                                <div class="col">: <?= $kredit->tujuan; ?></div>
                                                <div class="col"><strong>Angsuran Diinginkan </strong></div>
                                                <div class="col">: <?= $kredit->angsuran; ?> Per Bulan</div>
                                                <div class="col"><strong>Take Over </strong></div>
                                                <div class="col">: <?= $kredit->takover; ?></div>
                                                <div class="col"><strong>Bank </strong></div>
                                                <div class="col">: <?= $kredit->bank; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="container">
                        <div class="col-md-6 offset-md-3">
                            <div class="row row-cols-auto">
                                <div class="row row-cols-2">
                                    <div class="col-auto">
                                        <div class="row row-cols-auto">
                                            <div class="row row-cols-2">
                                                <div class="col"><strong>Tanda Tangan Pendaftaran </strong></div>
                                                <div class="col mb-2"><img src="<?= base_url('img/ttd/daftar/'.$kredit->ttd_daftar.'') ?>" alt="" style="width: 120px;"></div>
                                                <div class="col"><strong>Tanda Tangan Petugas </strong></div>
                                                <div class="col mb-2"><img src="<?= base_url('img/ttd/petugas/'.$kredit->ttd_petugas.'') ?>" alt="" style="width: 120px;"></div>
                                                <div class="col"><strong>Tanda Tangan Slick </strong></div>
                                                <div class="col mb-2"><img src="<?= base_url('img/ttd/slick/'.$kredit->ttd_slick.'') ?>" alt="" style="width: 120px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
<?= $this->endSection(); ?>
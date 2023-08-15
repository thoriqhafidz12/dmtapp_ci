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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">HASIL PENDAFTARAN KREDIT</h1>
                </div>
            </div> 
        </div> 
    </div>
    
    <div class="container text-center">
        <div class="col-md-8 offset-md-2">
            <table class="table table-responsive">
                <tr>
                    <td class="table table-<?= ($hasil == 'Data Pendaftaran Kredit') ? 'primary' : ''; ?>"><a href="<?= base_url('kredit'); ?>"> Semua Data</a></td>
                    <td class="table table-<?= ($hasil == 'Data Registrasi') ? 'primary' : ''; ?>"><a href="<?= base_url('kredit/registrasi'); ?>"> Pemberkasan dan Registrasi</a></td>
                    <td class="table table-<?= ($hasil == 'Data Proses Survey') ? 'primary' : ''; ?>"><a href="<?= base_url('kredit/survey'); ?>">Proses Survey</a></td>
                    <td class="table table-<?= ($hasil == 'Data Proses Analisa') ? 'primary' : ''; ?>"><a href="<?= base_url('kredit/analisa'); ?>">Proses Analisa</a></td>
                    <td class="table table-<?= ($hasil == 'Data Proses Komite') ? 'primary' : ''; ?>"><a href="<?= base_url('kredit/komite'); ?>">Proses Komite</a></td>
                    <td class="table table-<?= ($hasil == 'Hasil Realisasi') ? 'primary' : ''; ?>"><a href="<?= base_url('kredit/realisasi'); ?>">Realisasi</a></td>
                </tr>
            </table>
        </div>  
    </div> 
    <h4 class="text-center"><?= $hasil; ?></h4>
    <div class="bottom-slide">
        <div class="col-lg-12">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col" class="align-middle text-center">No</th>
                        <th scope="col" class="align-middle text-center">Tgl Pendaftaran</th>
                        <th scope="col" class="align-middle text-center">Tgl Survey</th>
                        <th scope="col" class="align-middle text-center">Tgl Komite</th>
                        <th scope="col" class="align-middle text-center">Tgl Realisasi</th>
                        <th scope="col" class="align-middle text-center">Produk</th>
                        <th scope="col" class="align-middle text-center">Nama Petugas</th>
                        <th scope="col" class="align-middle text-center">Nama Calon Nasabah</th>
                        <th scope="col" class="align-middle text-center">Alamat</th>
                        <th scope="col" class="align-middle text-center">Plafon</th>
                        <th scope="col" class="align-middle text-center">Pekerjaan</th>
                        <th scope="col" class="align-middle text-center">Angsuran</th>
                        <th scope="col" class="align-middle text-center">Agunan</th>
                        <th scope="col" class="align-middle text-center">Tanda Tangan Nasabah</th>
                        <th scope="col" class="align-middle text-center">Status Pendaftaran</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x=1; ?>
                    <?php foreach($kredits as $kredit) : ?>
                    <tr>
                        <td class="align-middle text-center" ><?= $x++; ?></td>
                        <td class="align-middle text-center"><?= date('d-F-Y H:i:s', strtotime($kredit->tgl_daftar)) ?></td>
                       <?php if( ($kredit->stts_pnd == 'Survey')):  ?>
                                <td class="align-middle text-center"><?= date('d-F-Y', strtotime($kredit->tgl_survey)) ?></td>
                                <td class="align-middle text-center"><span class="badge badge-danger">BELUM DILAKSANAKAN</span></td>  
                                <td class="align-middle text-center"><span class="badge badge-danger">BELUM DILAKSANAKAN</span></td>  
                            <?php elseif( ($kredit->stts_pnd == 'Komite')) : ?>
                                <td class="align-middle text-center"><?=  date('d-F-Y', strtotime($kredit->tgl_survey)) ?></td>
                                <td class="align-middle text-center"><?=  date('d-F-Y', strtotime($kredit->tgl_komite)) ?></td>
                                <td class="align-middle text-center"><span class="badge badge-danger">BELUM DILAKSANAKAN</span></td> 
                            <?php elseif( ($kredit->stts_pnd == 'Analisa')) : ?>
                                <td class="align-middle text-center"><?=  date('d-F-Y', strtotime($kredit->tgl_survey)) ?></td>
                                <td class="align-middle text-center"><span class="badge badge-danger">BELUM DILAKSANAKAN</span></td> 
                                <td class="align-middle text-center"><span class="badge badge-danger">BELUM DILAKSANAKAN</span></td> 
                            <?php elseif( ($kredit->stts_pnd == 'Realisasi')) : ?>
                                <td class="align-middle text-center"><?= date('d-F-Y', strtotime($kredit->tgl_survey)) ?></td> 
                                <td class="align-middle text-center"><?= date('d-F-Y', strtotime($kredit->tgl_komite))?></td> 
                                <td class="align-middle text-center"><?= date('d-F-Y', strtotime($kredit->tgl_realisasi)) ?></td> 
                            <?php else :?>
                                <td class="align-middle text-center"><span class="badge badge-danger">BELUM DILAKSANAKAN</span></td>
                                <td class="align-middle text-center"><span class="badge badge-danger">BELUM DILAKSANAKAN</span></td>
                                <td class="align-middle text-center"><span class="badge badge-danger">BELUM DILAKSANAKAN</span></td>
                            <?php endif; ?>
                            
                        <td class="align-middle text-center"><?= $kredit->produk; ?></td>
                        <td class="align-middle text-center"><?= $kredit->nama_petugas; ?></td>
                        <td class="align-middle text-center"><?= $kredit->nama_pem; ?></td>
                        <td class="align-middle text-center"><?= $kredit->jl; ?></td>
                        <td class="align-middle text-center"><?= $kredit->plafon; ?></td>
                        <td class="align-middle text-center"><?= $kredit->tipe; ?></td>
                        <td class="align-middle text-center"><?= $kredit->angsuran; ?></td>
                        <td class="align-middle text-center"><?= $kredit->informasi; ?></td>
                        <td><img src="<?= base_url('img/ttd/daftar/'.$kredit->ttd_daftar.'') ?>" alt="" style="width: 120px;"></td>
                        <td class="align-middle text-center">
                            <span class="badge badge-<?= ($kredit->stts_pnd == 'Pemberkasan dan Registrasi') ? 'danger' : (($kredit->stts_pnd == 'Analisa')?'warning':(($kredit->stts_pnd == 'Survey')?'info':(($kredit->stts_pnd == 'Komite')?'secondary':(($kredit->stts_pnd == 'Komite')?'primary':'success'))));?>"><?= $kredit->stts_pnd; ?></span></td>
                        </td>
                        <td style="text-align:center;">
                            <a href="<?= base_url('kredit/' . $kredit->id); ?>" class="btn btn-primary btn-sm mb-2"> Detail </a>    
                            <a href="<?= base_url('kredit/'.$kredit->id.'/edit') ?>" class="btn btn-info btn-sm">Edit</a>
                        </td>
                        <td style="text-align:center;">
                            <a href="#" data-href="<?= base_url('kredit/'.$kredit->id.'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-danger btn-sm mb-2">Delete</a>   
                            <?php if( in_groups('admin')):?>
                                <?php if( ($kredit->stts_pnd == 'Pemberkasan dan Registrasi')):  ?>
                                    <a href="<?= base_url('kredit/' . $kredit->id.'/nxtSurvey'); ?>" class="btn btn-info btn-sm">Lanjut Survey</a>  
                                <?php elseif( ($kredit->stts_pnd == 'Survey')):  ?>
                                    <a href="<?= base_url('kredit/' . $kredit->id.'/nxtAnalisa'); ?>" class="btn btn-warning btn-sm">Lanjutkan Analisa</a>  
                                <?php elseif( ($kredit->stts_pnd == 'Analisa')) : ?>
                                    <a href="<?= base_url('kredit/' . $kredit->id.'/nxtKomite'); ?>" class="btn btn-secondary btn-sm">Lanjutkan Komite</a>  
                                <?php elseif( ($kredit->stts_pnd == 'Komite')) : ?>
                                    <a href="<?= base_url('kredit/' . $kredit->id.'/nxtRealisasi'); ?>" class="btn btn-success btn-sm">Lanjutkan Realisasi</a>  
                            <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2 class="h2">Are you sure?</h2>
                            <p>The data will be deleted and lost forever</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmToDelete(el){
            $("#delete-button").attr("href", el.dataset.href);
            $("#confirm-dialog").modal('show');
        }
    </script>
<?= $this->endSection(); ?>
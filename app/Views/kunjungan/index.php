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
                    <h1 class="h3 mb-0 text-gray-800">HASIL KUNJUNGAN KERJA</h1>
                </div>
            </div>
            
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Bertamu</th>
                                            <th>Nama Petugas</th>
                                            <th>Nama Debitur</th>
                                            <th>Alamat</th>
                                            <th>Tujuan</th>
                                            <th>Hasil</th>
                                            <th>Foto</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x=1; ?>
                                        <?php foreach($kunker as $kunjungan):?>
                                            <tr>
                                                <td><?= $x++; ?></td>
                                                <td><?= $kunjungan['tanggal_bertamu'] ?></td>
                                                <td><?= $kunjungan['nama_petugas'] ?></td>
                                                <td><?= $kunjungan['nama_debitur'] ?></td>
                                                <td><?= $kunjungan['alamat'] ?></td>
                                                <td><?= $kunjungan['tujuan'] ?></td>
                                                <td><?= $kunjungan['hasil'] ?></td>
                                                <td><?= $kunjungan['gamlap'] ?></td>
                                               
                                                <!-- <td>
                                                    <img src="<base_url('uploads/'.$kunjungan->gambar.'') ?>" alt="">
                                                </td> -->
                                                <td>
                                                    <a href="<?= base_url('/kunjungan/'.$kunjungan['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <a href="#" data-href="<?= base_url('kunjungan/'.$kunjungan['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
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
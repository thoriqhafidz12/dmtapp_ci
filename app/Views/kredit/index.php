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
    <div class="bottom-slide">
        <div class="col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Nama Petugas</th>
                    <th scope="col">Nama Calon Nasabah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Plafon</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Nama Badan</th>
                    <th scope="col">Angsuran</th>
                    <th scope="col">Agunan</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=1; ?>
                <?php foreach($pinjamans as $pinjaman) : ?>
                <tr>
                    <th scope="row"><?= $x++; ?></th>
                    <td><?= $pinjaman->produk; ?></td>
                    <td><?= $pinjaman->nama_petugas; ?></td>
                    <td><?= $pinjaman->nama_ktp; ?></td>
                    <td><?= $pinjaman->jl1; ?></td>
                    <td><?= $pinjaman->plafon; ?></td>
                    <td><?= $pinjaman->tipe; ?></td>
                    <td><?= $pinjaman->nama_badan; ?></td>
                    <td><?= $pinjaman->angsuran; ?></td>
                    <td><?= $pinjaman->informasi; ?></td>
                    <td>
                        <a href="<?= base_url('kredit/' . $pinjaman->pinjamanid); ?>" class="btn btn-danger"> Detail </a>    
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>





<?= $this->endSection(); ?>
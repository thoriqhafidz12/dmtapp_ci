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
                    <h1 class="h3 mb-0 text-gray-800">Atas Nama | <?= $pinjaman->nama_ktp; ?></h1>
                </div>
            </div> 
        </div> 
    </div> 
    <div class="bottom-slide">
        <div class="col-lg-8">
        <table class="table">
            <thead>
                <tr>
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
                <tr>
                    <td><?= $pinjaman->nama_petugas; ?></td>
                    <td><?= $pinjaman->nama_ktp; ?></td>
                    <td><?= $pinjaman->jl1; ?></td>
                    <td><?= $pinjaman->plafon; ?></td>
                    <td><?= $pinjaman->tipe; ?></td>
                    <td><?= $pinjaman->nama_badan; ?></td>
                    <td><?= $pinjaman->angsuran; ?></td>
                    <td><?= $pinjaman->informasi; ?></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>





<?= $this->endSection(); ?>
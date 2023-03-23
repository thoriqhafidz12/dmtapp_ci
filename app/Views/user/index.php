<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>

<div class="container-fluid bottom-slide">
    <div class="loading-page">
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
    <div id="Moduleloader-page" class="jssorl-009-spin">
        <img src="image/spin.svg" />
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">HELLO <?= user()->fullname; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="card-horizontal" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url('/img/' . user()->user_image); ?>" alt="<?= user()->username; ?>">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h4><?= user()->username?></h4>
                        </li>

                        <?php if (user() -> fullname) : ?>
                        <li class="list-group-item">
                            <?= user()->fullname; ?>
                        </li>
                        <?php endif ?>
                        <li class="list-group-item"><?= user()->email; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>

<div class="container-fluid navbar-left">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Users Detail</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url('/img/' . $user->user_image); ?>" alt="<?= $user->username; ?>">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4><?= $user->username?></h4>
                            </li>

                            <?php if ($user -> fullname) : ?>
                            <li class="list-group-item">
                                <?= $user->fullname; ?>
                            </li>
                            <?php endif ?>

                            <li class="list-group-item"><?= $user->email; ?></li>
                            <li class="list-group-item">
                                <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning';?>"><?= $user->name; ?></span>
                            </li>
                            <li class="list-group-item">
                                <small><a href="<?= base_url('admin'); ?>">&laquo; back to user list</a></small>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>
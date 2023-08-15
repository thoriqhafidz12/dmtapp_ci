<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url(); ?>user/save" method="post" encrypt="multipart/form-data">
                <?= csrf_field(); ?>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <div class="col-8">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?= user()->username?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-8">
                        <label >Full Name</label>
                        <input type="text" class="form-control" name= "fullname" value="<?= user()->fullname?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-8">
                        <label >Image</label>
                        <input type="file" class="form-control" name= "user_image">
                        <img src="<?= base_url('img/'.user()->user_image.'') ?>" alt="" ">
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn px-5 btn-primary">
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
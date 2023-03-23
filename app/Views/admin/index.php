<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>

<div class="container-fluid">
    <div class="loading-page">
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
    <div id="Moduleloader-page" class="jssorl-009-spin">
        <img src="image/spin.svg">
    </div> 
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Users List</h1>

    <div class="bottom-slide">
        <div class="col-lg-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=1; ?>
                <?php foreach($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $x++; ?></th>
                    <td><?= $user->username; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->name; ?></td>
                    <td>
                        <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-danger"> Detail </a>    
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>
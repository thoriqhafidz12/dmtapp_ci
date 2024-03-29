
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <div class="navbar-left">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
            <img src="<?= base_url('img/logo_bpr.jpeg'); ?>" alt="logo" width="57" height="57">
            <div class="sidebar-brand-text mx-3">DMT APPS</div>
        </a>
        

        <!-- MENU DALAM ADMIN -->
        <?php if( in_groups('admin')) : ?>

            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <div class="sidebar-heading">
                User Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                    <i class="fas fa-thin fa-users"></i>
                    <span>Users List</span>
                </a>
            </li>

            

        <?php endif; ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            MENU
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('user'); ?>" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-thin fa-user"></i>
                <span>About Me</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">OPTION</h6>
                    <a class="collapse-item" href="<?= base_url('user'); ?>">My Profile</a>
                    <a class="collapse-item" href="<?= base_url('user/edit'); ?>">Edit Profile</a>
                </div>
            </div>
        </li>

        <li class="nav-item" >
            <a class="nav-link" href="<?= base_url('kunjungan/new'); ?>">
                <i class="fas fa-duotone fa-handshake"></i>
                <span>Kunjungan Petugas</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kredit/pendaftaran'); ?>">
                <i class="fas fa-money-check-alt"></i>  
                <span>Pendaftaran Kredit</span></a>
        </li>
        <li class="nav-item" >
            <a class="nav-link" href="#">
            <i class="fas fa-chart-bar"></i>
                <span>Simulasi Kredit</span></a>
        </li>
        <!-- Nav Item - Kunjungan -->
        
        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Riwayat
        </div>
        <!-- Nav Item - Tables -->
        
        <li class="nav-item" >
            <a class="nav-link" href="<?= base_url('kunjungan'); ?>">
                <i class="fas fa-thin fa-layer-group"></i>
                <span>Riwayat Kunjungan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kredit'); ?>">
            <i class="fas fa-hand-holding-usd"></i>
                <span>Riwayat Pendaftaran</span></a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    </div>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
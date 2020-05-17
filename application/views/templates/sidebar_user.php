<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-clinic-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Posyandu Tulip 20</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Headline
    </div>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('news'); ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('tutorial'); ?>">
            <i class="fas fa=fw fa-people-carry"></i>
            <span>Edukasi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Layanan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('konsul_controller_user/index_konsul_user') ?>">
            <i class="fas fa=fw fa-user-clock"></i>
            <span>Konsultasi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('posyandu_controller_user/index_balita_user') ?>">
            <i class="fas fa-fw fa-baby"></i>
            <span>Layanan Balita</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('bumil_controller_user/index_bumil_user') ?>">
            <i class="fas fa-fw fa-baby"></i>
            <span>Layanan Ibu Hamil</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('LandingPage') ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
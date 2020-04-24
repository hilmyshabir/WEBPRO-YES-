<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-clinic-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Posyandu Tulip 20</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Layanan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('konsul_controller_admin/index_konsul_admin') ?>">
            <i class="fas fa=fw fa-user-clock"></i>
            <span>Konsultasi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('posyandu_controller_admin/index_balita_admin') ?>">
            <i class="fas fa-fw fa-baby"></i>
            <span>Layanan Balita</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('bumil_controller_admin/index_bumil_admin') ?>">
            <i class="fas fa-fw fa-baby"></i>
            <span>Layanan Ibu Hamil</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
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
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Production Monitoring </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        User Management
    </div>

    <!-- Heading -->

    <!-- Nav Item - User List -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="far fa-user"></i>
            <span>My Profile</span></a>
    </li>
    <hr class="sidebar-divider">
    <!-- Nav Item - Tables -->
    <?php if (in_groups('super-admin')) :  ?>
        <div class="sidebar-heading">
            User profile
        </div>
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-user-edit"></i>
                <span>Edit Profile</span></a>
        </li>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="far fa-user"></i>
                <span>User List</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php endif; ?>

    <?php if (has_permission('manage-mesin')) : ?>
        <div class="sidebar-heading">
            Monitoring
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('mesin'); ?>/m1">
                <i class="fas fa-chalkboard"></i>
                <span>Mesin 1</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('mesin'); ?>/m2">
                <i class="fas fa-chalkboard"></i>
                <span>Mesin 2</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('mesin'); ?>/m3">
                <i class="fas fa-chalkboard"></i>
                <span>Mesin 3</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('mesin'); ?>/m4">
                <i class="fas fa-chalkboard"></i>
                <span>Mesin 4</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php endif; ?>
    <?php if (has_permission('manage-mesin')) : ?>

        <div class="sidebar-heading">
            Input Parameter
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                <i class="fas fa-cog"></i>
                <span>Mesin 1</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('param2'); ?>">
                <i class="fas fa-cog"></i>
                <span>Mesin 2</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('param3'); ?>">
                <i class="fas fa-cog"></i>
                <span>Mesin 3</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('param4'); ?>">
                <i class="fas fa-cog"></i>
                <span>Mesin 4</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php endif; ?>

    <div class="sidebar-heading">
        OEE
    </div>

    <!-- Nav Item - Dashboard -->
    <?php if (has_permission('manage-dashboard')) : ?>
        <li class="nav-item">
            <!-- <a class="nav-link" href="/"> -->
            <a class="nav-link" href="/">
                <i class="far fa-clock"></i>
                <span>Dashboard</span></a>
        </li>
    <?php endif; ?>

        <!-- <li class="nav-item"> -->
            <!-- <a class="nav-link" href="/"> -->
            <!-- <a class="nav-link" href="">
                <i class="far fa-edit"></i>
                <span>Input Downtime</span></a> -->
        <!-- </li> -->


    <!-- Nav Item - Quality -->
    <?php if (has_permission('manage-history')) : ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('history'); ?>">
                <i class="fas fa-history"></i>
                <span>History Trouble</span></a>
        </li>
    <?php endif; ?>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
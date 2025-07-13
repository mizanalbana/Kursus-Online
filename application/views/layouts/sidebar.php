<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.html" class="brand-link">
      <!--begin::Brand Image-->
      <img src=<?php echo base_url('assets/assets/img/lambang-unimma.png'); ?> alt="AdminLTE Logo"
        class="brand-image opacity-100 shadow" />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">Kursus Online</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

        <li class="nav-item">
          <a href="<?= site_url('dashboard') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <?php if (is_role('admin')): ?>
          <li class="nav-item">
            <a href="<?= site_url('user') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Kelola Pengguna</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= site_url('courses') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Semua Kursus</p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="<?= site_url('courses') ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Tambah Jadwal</p>
            </a>
          </li> -->
        <?php elseif (is_role('instructor')): ?>
          <li class="nav-item">
            <a href="<?= site_url('materials') ?>" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Kursus Saya</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= site_url('schedules') ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Jadwal Kursus</p>
            </a>
          </li> -->
        <?php elseif (is_role('student')): ?>
          <li class="nav-item">
            <a href="<?= site_url('profile') ?>" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>Kursus Saya</p>
            </a>
          </li>
        <?php endif; ?>

        <li class="nav-item">
          <a href="<?= site_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>

  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
<!--begin::App Main-->
<main class="app-main">
  <!--begin::App Content Header-->
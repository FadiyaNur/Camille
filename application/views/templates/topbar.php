<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style="background-color: pink;">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-mdnone rounded-circle mr-3" style="color: black;">
        <i class="fa fa-bars"></i>
      </button>
      <!-- Page Heading -->
      <h1 class="h3 mb-2 " style="color: black; font-family: monospace; font: bold; font-style: italic;"><?= $judul; ?></h1>
      <!-- Topbar Navbar -->
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline medium" style="color: black;"><?= $user['nama']; ?></span>
            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= base_url('user/index'); ?>">
              <i class="fas fa-user fa-sm fa-fw mr-2" style="color: black;"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 " style="color: black;"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>
    </nav>
    <!-- End of Topbar -->
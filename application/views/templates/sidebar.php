<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebardark accordion text-white" id="accordionSidebar" style="background-color:pink;">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center text-white" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15" style="color: black;">
      <i class="fas fa-angle-down"></i>
    </div>
    <div class="sidebar-brand-text mx-3" style="color: black;">Camille Organic Mask</div>
  </a>
  <hr class="sidebar-divider">

  <!-- Divider -->
  <div class="sidebar-heading" style="color: black; font: bold;">
    Home
  </div>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <!-- Nav Item - Dashboard -->
  <li class="nav-item ">
    <a class="nav-link pb-0 text-white" href="<?= base_url('admin'); ?>">
      <i class="fas fa-desktop" style="color: black;"></i>
      <span style="color: black;">Dashboard</span>
    </a>
  </li>
  <hr class="sidebar-divider mt-3">

  <!-- Looping Menu-->

  <!-- Heading -->
  <div class="sidebar-heading" style="color: black; font: bold;">
    Master Data
  </div>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active text-white">
    <!-- Nav Item - Dashboard -->
  <li class="nav-item ">
    <a class="nav-link pb-0 text-white" href="<?= base_url('user'); ?>">
      <i class=""></i>
      <span style="color:#49093B;">Data User</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link pb-0 text-white" href="<?= base_url('daftarproduct/index'); ?>">
      <i class=""></i>
      <span style="color:#49093B;">Product</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link pb-0 text-white" href="<?= base_url('Contact'); ?>">
      <i class=""></i>
      <span style="color:#49093B;">Contact Us</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider mt-3">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -- > 
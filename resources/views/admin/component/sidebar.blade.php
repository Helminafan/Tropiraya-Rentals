<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <!-- <div class="sidebar-brand-icon">
        <i class="fas fa-laugh-wink"></i>
      </div> -->
      <div class="sidebar-brand-text">
        <img style="width: 150 px" height="35" src="{{asset('admin/img/Frame 22.png')}}" alt="" />
      </div>
      
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('admin.dashboard')}}">
        <i class="fa-brands fa-microsoft"></i>
        <span>Dashboard</span></a
      >
    </li>

    <!-- Divider -->

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ request()->is('admin/barang') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('admin.barang')}}">
        <i class="fa-solid fa-box"></i>

        <span>Barang</span></a
      >
    </li>
    <li class="nav-item">
      <a class="nav-link" href="peminjam.html">
        <i class="fa-solid fa-layer-group"></i>
        <span>Peminjam</span></a
      >
    </li>
    <li class="nav-item">
      <a class="nav-link" href="riwayatpeminjaman.html">
        <i class="fa-solid fa-clock-rotate-left"></i>
        <span>Riwayat Peminjam</span></a
      >
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item position-absolute" style="bottom: 0">
      <a class="nav-link" href="tables.html">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span>Log Out</span></a
      >
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
  </ul>

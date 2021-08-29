
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-file-contract"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kontrak Kerja</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Dashboard
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('beranda');  ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Kontrak Kerja
        </div>

        
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-clipboard"></i>
            <span>Buat Kontrak kerja Baru</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Kontrak Kerja Baru:</h6>
              <a class="collapse-item" href="<?= base_url('kontrak_kerja/dpa_cv/data_rekanan'); ?>">Data DPA/CV</a>
              <a class="collapse-item" href="<?= base_url('kontrak_kerja/data_nomor'); ?>">Data Nomor</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

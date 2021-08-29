
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>



      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name'];  ?></span>
            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Data DPA / CV</h1>
      <h5>data PA/PPK</h5>
       <?= $this->session->flashdata('message'); ?>
      <div class="row">
        <div class="col-lg-7">
         <form class="user" method="post" action="<?= base_url('kontrak_kerja/dpa_cv/data_pa_ppk') ?>">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control " id="nama" name="nama" value="<?= set_value('nama'); ?>" placeholder="" required="">
          </div>

          <div class="form-group">
            <label>NIP</label>
            <input type="text" class="form-control " id="nip" name="nip" value="<?= set_value('nip'); ?>" placeholder="" required="">
          </div>

          <div class="form-group">
            <label>Pangkat/Gol</label>
            <input type="text" class="form-control " id="pangkat/gol" name="pangkat/gol" value="<?= set_value('pangkat/gol'); ?>" placeholder="" required="">
          </div>

          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control " id="jabatan" name="jabatan" value="<?= set_value('jabatan'); ?>" placeholder="" required="">
          </div>

          <div class="form-group">
            <label>Selaku</label>
            <input type="text" class="form-control " id="selaku" name="selaku" value="<?= set_value('selaku'); ?>" placeholder="" required="">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control " id="alamat" name="alamat" value="<?= set_value('alamat'); ?>" placeholder="" required="">
          </div>

          <button type="submit" class="btn btn-primary btn-user btn-block">
            Simpan
          </button>
          <hr>

        </form>
      </div>
    </div>

    <a href="<?= base_url('kontrak_kerja/dpa_cv/data_pekerjaan'); ?>" style="float: left;"><button class="btn btn-primary" title="Ke data Pekerjaan" >Sebelumnya</button></a>
    <a href="<?= base_url('kontrak_kerja/dpa_cv/data_ppbj'); ?>" style="float: right;"><button class="btn btn-primary" title="Ke data PPBJ" >Selanjutnya</button></a>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

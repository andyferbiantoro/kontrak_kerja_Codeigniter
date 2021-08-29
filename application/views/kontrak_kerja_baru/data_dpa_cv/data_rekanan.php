
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
      <h5>data rekanan</h5>
      <br>
       <?= $this->session->flashdata('message'); ?>
      <div class="row">
        <div class="col-lg-7">
         <form class="user" method="post" action="<?= base_url('kontrak_kerja/dpa_cv/data_rekanan') ?>">
          <div class="form-group">
            <label>Nama Perusahaan</label>
            <input type="text" class="form-control " id="nama_perusahaan" name="nama_perusahaan" value="<?= set_value('nama_perusahaan'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Nama Direktur</label>
            <input type="text" class="form-control " id="nama_direktur" name="nama_direktur" value="<?= set_value('nama_direktur'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control " id="alamat" name="alamat" value="<?= set_value('alamat'); ?>" required="">
          </div>

          <div class="form-group">
            <label>Npwp</label>
            <input type="text" class="form-control " id="npwp" name="npwp" value="<?= set_value('npwp'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control " id="email" name="email" value="<?= set_value('email'); ?>"  required="">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>

          <div class="form-group">
            <label>No Telp</label>
            <input type="text" class="form-control " id="no_telp" name="no_telp" value="<?= set_value('no_telp'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>No Akte Notaris</label>
            <input type="text" class="form-control " id="no_akte_notaris" name="no_akte_notaris" value="<?= set_value('no_akte_notaris'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Tanggal Akte Notaris</label>
            <input type="date" class="form-control " id="tgl_akte_notaris" name="tgl_akte_notaris" value="<?= set_value('tgl_akte_notaris'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Nama Notaris</label>
            <input type="text" class="form-control " id="nama_notaris" name="nama_notaris" value="<?= set_value('nama_notaris'); ?>"  required="">
          </div>

          <button type="submit" class="btn btn-primary btn-user btn-block">
            Simpan
          </button>
          <hr>

        </form>
      </div>
    </div>
    <a href="<?= base_url('kontrak_kerja/dpa_cv/data_pekerjaan'); ?>"  style="float: right;"><button class="btn btn-primary" title="Ke data Pekerjan" >Selanjutnya</button></a><br><br>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


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
      <h5>data Pekerjaan</h5>
      <?= $this->session->flashdata('message'); ?>
      <div class="row">
        <div class="col-lg-7">
         <form class="user" method="post" action="<?= base_url('kontrak_kerja/dpa_cv/data_pekerjaan') ?>">
          <div class="form-group">
            <label>Lingkup Pekerjaan</label>
            <input type="text" class="form-control " id="lingkup_pekerjaan" name="lingkup_pekerjaan" value="<?= set_value('lingkup_pekerjaan'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Paket Pekerjaan</label>
            <input type="text" class="form-control " id="paket_pekerjaan" name="paket_pekerjaan" value="<?= set_value('paket_pekerjaan'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Nama Kegiatan</label>
            <input type="text" class="form-control " id="nama_kegiatan" name="nama_kegiatan" value="<?= set_value('nama_kegiatan'); ?>" required="">
          </div>

          <div class="form-group">
            <label>Sub Kegiatan</label>
            <input type="text" class="form-control " id="sub_kegiatan" name="sub_kegiatan" value="<?= set_value('sub_kegiatan'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>No Dpa</label>
            <input type="text" class="form-control " id="no_dpa" name="no_dpa" value="<?= set_value('no_dpa'); ?>" required="">
          </div>

          <div class="form-group">
            <label>Kode Rekening</label>
            <input type="text" class="form-control " id="kode_rekening" name="kode_rekening" value="<?= set_value('kode_rekening'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Sumber Pendanaan</label>
            <input type="text" class="form-control " id="sumber_pendanaan" name="sumber_pendanaan" value="<?= set_value('sumber_pendanaan'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Satuan Kerja</label>
            <input type="text" class="form-control " id="satuan_kerja" name="satuan_kerja" value="<?= set_value('satuan_kerja'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Tahun</label>
            <input type="text" class="form-control " id="tahun" name="tahun" value="<?= set_value('tahun'); ?>"  required="">
          </div>

          <div class="form-group">
            <label>Pagu Anggaran</label>
            <input type="text" class="form-control " id="pagu_anggaran" name="pagu_anggaran" value="<?= set_value('pagu_anggaran'); ?>" placeholder="" required="">
          </div>

          <div class="form-group">
            <label>Pelaksanaan</label>
            <input type="number" class="form-control " id="pelaksanaan" name="pelaksanaan" value="<?= set_value('pelaksanaan'); ?>" placeholder="" required="">
          </div>

          <div class="form-group">
            <label>Harga Nego/Kontrak</label>
            <input type="number" class="form-control " id="harga_nego/kontrak" name="harga_nego/kontrak" value="<?= set_value('harga_nego/kontrak'); ?>" placeholder="" required="">
          </div>

          <!-- <div class="form-group">
            <label>HPS</label>
            <input type="text" class="form-control form-control-user" id="id_hps" name="id_hps" value="<?= set_value('id_hps'); ?>" placeholder="" required="">
          </div> -->

          <div class="form-group">
            <label>HPS</label>
            <select type="text" class="form-control " name="id_hps">
              <option value="">- Pilih -</option>
              <?php foreach ($hps as $hps) : ?>
                <option value="<?= $hps['id_hps'] ?>"><?= $hps['barang/jasa'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary btn-user btn-block">
            Simpan
          </button>
          <hr>

        </form>
      </div>
    </div>
    <a href="<?= base_url('kontrak_kerja/dpa_cv/data_rekanan'); ?>" style="float: left;"><button class="btn btn-primary" title="Ke data Rekanan" >Sebelumnya</button></a>
    <a href="<?= base_url('kontrak_kerja/dpa_cv/data_pa_ppk'); ?>" style="float: right;"><button class="btn btn-primary" title="Ke data PA/PPK" >Selanjutnya</button></a>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

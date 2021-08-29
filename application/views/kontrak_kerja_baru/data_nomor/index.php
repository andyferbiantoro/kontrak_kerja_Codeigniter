
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
      <h1 class="h3 mb-4 text-gray-800">Data Nomor</h1>
       <?= $this->session->flashdata('message'); ?>
       <button class="btn btn-sm btn-primary my-1" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus fa-sm"></i>Tambah Data Nomor</button><br><br>
      <table id="dataku" class="table table-bordered table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Uraian</th>
            <th scope="col">Nomor</th>
            <th scope="col">Tanggal</th>
          </tr>
        </thead>

        <?php
        $no = 1;
        foreach ($data_nomor as $dn) :
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dn['uraian'] ?></td>
            <td><?php echo $dn['nomor'] ?></td>
            <td><?php echo date('d F Y', strtotime($dn['tanggal'])) ?></td>
          </tr>
        <?php endforeach; ?>
      </table>


      <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Nomor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form class="user" method="post" action="<?= base_url('kontrak_kerja/data_nomor/tambah_data_nomor') ?>">
                    <div class="form-group">
                        <label>Uraian</label>
                        <select type="text" class="form-control" name="uraian">
                            <option selected disabled> -- Pilih Uraian -- </option>
                                <option>HPS RAB</option>
                                <option>Penetapan HPS</option>
                                <option>Rencana Spesifikasi Barang</option>
                                <option>RAB</option>
                                <option>Rekom</option>
                                <option>Perintah Proses PL</option>
                                <option>BA Hasil</option>
                                <option>BA Verifikasi</option>
                                <option>Laporan</option>
                                <option>Surat Penunjukan PPBJ</option>
                                <option>Surat Kesanggupan Kerja</option>
                                <option>SPK</option>
                                <option>SPMK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" name="nomor" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                        
                    </div>                   
                   
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

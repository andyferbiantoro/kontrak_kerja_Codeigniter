

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-sm-6 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register Sistem Informasi Kontrak Kerja</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Full name" required="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nip/nik" name="nip/nik" value="<?= set_value('nip/nik'); ?>" placeholder="NIP/NIK" required="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email Address" required="">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1"  placeholder="Password" required="">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password" required="">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register
                </button>
                <hr>
              </form>
             
             
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Sudah Punya Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

 
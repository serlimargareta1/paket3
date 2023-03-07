<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style= "border:1px solid #FF99bb;">
              <div class="card-body">
                <h5 class="card-title"></h5>

                <p class="card-text">
                  Selamat datang, <b><?= $this->session->userdata('nama') ?></b> di aplikasi Laundry Serli Margareta*
                </p>
              </div>
            </div><!-- /.card -->
          </div>

    <?php if ($this->session->userdata('role') != 'owner') : ?>
    <?php if ($this->session->userdata('role') != 'kasir') : ?>
      <div class="col-lg-3">
        <div class="card shadow border-left-primary">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Outlet</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?= $this->db->get_where('tb_outlet')->num_rows(); ?>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user-friends fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($this->session->userdata('role') != 'kasir') : ?>
    <div class="col-lg-3">
      <div class="card shadow border-left-primary">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Paket</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?= $this->db->get_where('tb_paket')->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-friends fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="col-lg-3">
      <div class="card shadow border-left-primary">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Member</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?= $this->db->get_where('tb_member')->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-friends fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php if ($this->session->userdata('role') != 'kasir') : ?>
    <div class="col-lg-3">
      <div class="card shadow border-left-primary">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah User</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?= $this->db->get_where('tb_user')->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-friends fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>

  </div>
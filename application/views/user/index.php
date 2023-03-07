<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #FF99bb;">
            <div class="card-header">

            <!-- garis tabel user dan tambah user -->
                <h5 class="card-title"><?php echo $judul ?></h5>
                <div class="card-tools">
                  <a href="<?php echo base_url('user/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-md-12">
                    
                <!-- jika berhasil tambah data user -->
                <?php if ($message = $this->session->flashdata('message')): ?>
                    <div class ="alert alert-success">
                    <strong>Berhasil</strong>
                    <p><?php echo $message ?></p>
                    </div>
                    <?php endif ?>
                    <?php if ($message = $this->session->flashdata('hapus')): ?>
                    <div class ="alert alert-danger">
                    <strong>Berhasil</strong>
                    <p><?php echo $message ?></p>
                    </div>
                    <?php endif ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Outlet</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; foreach ($user as $row): ?>
                                    <tr>
                                        <td><?php echo $index++ ?></td>
                                        <td><?php echo $row['nama_user'] ?></td>
                                        <td><?php echo $row['nama_outlet'] ?></td>
                                        <td><?php echo $row['username'] ?></td>
                                        <td><?php echo $row['role'] ?></td>
                                        <td>
                                                <a class="btn btn-warning" href="<?php echo base_url('user/ubah/') . $row['id_user'] ?>"><i class="fa fa-edit"></i></a>
                                                <?php if ($row['username'] != "admin") : ?>
                                                <a class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus?')" href="<?php echo base_url('user/hapus/'). $row['id_user'] ?>"><i class="fa fa-trash"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        </div>
                     </div>
              </div>
            </div>
          </div>
        </div>
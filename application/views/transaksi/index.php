<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #FF99bb;">
            <div class="card-header">

            <!-- garis tabel outlet dan tambah outlet -->
                <h5 class="card-title col-md-12">
                    <div class="d-flex justify-content-between">
                        <?php echo $judul ?>
                        <form action="" class="d-flex">
                            <input type="text" name="keyword" placeholder="Cari kode invoice" class="form-control">
                            <button type="submit" class="ml-2 btn btn-primary">Cari</button>
                        </form>
                    </div>
                </h5>
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-md-12">
                    
                <!-- jika berhasil tambah data outlet -->
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
                                    <th>Tgl</th>
                                    <th>Invoice</th>
                                    <th>Outlet</th>
                                    <th>Member</th>
                                    <th>User</th>
                                    <th>Batas waktu</th>
                                    <th>Tgl Bayar</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; foreach ($transaksi as $row): ?>
                                    <tr>
                                        <td><?php echo $index++ ?></td>
                                        <td><?php echo $row['tgl'] ?></td>
                                        <td><?php echo $row['kd_invoice'] ?></td>
                                        <td><?php echo $row['nama_outlet'] ?></td>
                                        <td><?php echo $row['nama_member'] ?></td>
                                        <td><?php echo $row['nama_user'] ?></td>
                                        <td><?php echo $row['batas_waktu'] ?></td>
                                        <td><?php echo $row['tgl_bayar'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td><?php echo "Rp." . number_format($row['total_bayar']) ?></td>
                                        <td>
                                            <a class="btn btn-warning my-1" href="<?php echo base_url('transaksi/ubah/') . $row['id_transaksi'] ?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger my-1" onclick="return confirm('apakah anda yakin ingin menghapus?')" href="<?php echo base_url('transaksi/hapus/'). $row['id_transaksi'] ?>"><i class="fa fa-trash"></i></a>

                                            <a class="btn btn-info my-1" href="<?= base_url() ?>transaksi/cetak/<?= $row['kd_invoice'] ?>"><i class="fa fa-print"></i></a>
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
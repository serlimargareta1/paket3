<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #FF99bb;">
            <div class="card-header">

            <!-- garis tabel  dan tambah outlet -->
                <h5 class="card-title"><?php echo $judul ?></h5>
                <div class="card-tools">
                  <a href="<?php echo base_url('outlet')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <form method="post">
                           <div class="form-group">
                               <label for="Id Paket">ID Outlet</label>
                                   <input type="number" name="id_outlet" id="id_paket" class="form-control" placeholder="ID Paket" required="" value="<?= id('tb_outlet', 'id_outlet') ?>" readonly>                       
                           </div>
                           <div class="form-group">
                               <label for="Id Paket">Nama Outlet</label>
                                   <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Outlet">                       
                           </div>
                           <div class="form-group">
                               <label for="Id Outlet">Alamat</label>
                                   <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="">                       
                           </div>
                           <div class="form-group">
                               <label for="Id Outlet">Telepon</label>
                                   <input type="text" name="tlp" id="tlp" class="form-control" placeholder="tlp" required="">                       
                           </div>
                           <div class="form-group">
                             <button type="submit" class="btn btn-primary">Simpan</button>

                       </form>
                        </div>
                     </div>

              </div>
            </div>
          </div>
        </div>
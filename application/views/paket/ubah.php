<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #FF99bb;">
            <div class="card-header">

            <!-- garis tabel paket dan tambah paket -->
                <h5 class="card-title"><?php echo $judul ?></h5>
                <div class="card-tools">
                  <a href="<?php echo base_url('paket')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <form method="post">
                           <div class="form-group">
                               <label for="id_paket">ID Paket</label>
                                   <input type="number" name="id_paket" id="id_paket" class="form-control" placeholder="ID Paket" required="" value="<?php echo $paket['id_paket']?>" readonly>                       
                           </div>
                           <div class="form-group">
                          <label for="Id Paket">Outlet</label>
                            <select name="id_outlet" id="id_outlet" class="form-control" required="">
                              <?php foreach ($outlet as $row): ?>
                                <option value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
                              <?php endforeach; ?>
                            </select>
                           </div>
                           <div class="form-group">
                               <label for="Id Paket">Nama Paket</label>
                                   <input type="text" name="nama_paket" id="nama_paket" class="form-control" placeholder="Nama Paket" value="<?php echo $paket['nama_paket']?>">                       
                           </div>
                           <div class="form-group">
                               <label for="Id Paket">Jenis</label>
                               <select name="jenis" id="jenis" class="form-control" required="">
                               <option <?php echo $paket['jenis'] == 'kiloan' ? 'selected' : '' ?> value="kiloan">kiloan</option>
                               <option <?php echo $paket['jenis'] == 'selimut' ? 'selected' : '' ?> value="selimut">selimut</option>
                               <option <?php echo $paket['jenis'] == 'bed cover' ? 'selected' : '' ?> value="bed_cover">bed cover</option>
                               <option <?php echo $paket['jenis'] == 'kaos' ? 'selected' : '' ?> value="kaos">kaos</option>
                               <option <?php echo $paket['jenis'] == 'celana' ? 'selected' : '' ?> value="celana">celana</option>
                               <option <?php echo $paket['jenis'] == 'lainnya' ? 'selected' : '' ?> value="lain">lainnya</option>
                            </select>
                           </div>
                           <div class="form-group">
                               <label for="Id Paket">Harga</label>
                                   <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" required="" value="<?php echo $paket['harga']?>">                       
                           </div>
                           <div class="form-group">
                             <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                       </form>
                     </div>
              </div>
            </div>
          </div>
        </div>
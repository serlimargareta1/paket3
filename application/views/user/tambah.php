
<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #FF99bb;">
            <div class="card-header">

            <!-- garis user dan tambah user -->
                <h5 class="card-title"><?php echo $judul ?></h5>
                <div class="card-tools">
                  <a href="<?php echo base_url('user')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <form method="post">
                           <div class="form-group">
                               <label for="">ID User</label>
                                   <input type="number" name="id_user" id="id_user" class="form-control" placeholder="ID User" required="" value="<?php echo id('tb_user', 'id_user') ?>" readonly>                       
                           </div>
                           <div class="form-group">
                               <label for="">ID Outlet</label>
                                <select name="id_outlet" id="id_outlet" class="form-control" required="">
                                  <option value="">Pilih Outlet</option>
                                <?php foreach ($Outlet as $row): ?>                               
                                  <option value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
                              <?php endforeach; ?>
                               </select>
                            </div>      
                           <div class="form-group">
                               <label for="">Nama User</label>
                                   <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama User">                       
                           </div>
                           <div class="form-group">
                               <label for="">Username</label>
                                   <input type="text" name="username" id="username" class="form-control" placeholder="username" required="">                       
                           </div>
                           <div class="form-group">
                               <label for="">Password</label>
                                   <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">                       
                           </div>
                           <div class="form-group">
                               <label for="">Role</label>
                               <select name="role" id="role" class="form-control">
                               <option value="Pilih Opsi">Pilih Opsi</option>
                                <option value="admin">admin</option>
                                <option value="kasir">kasir</option>
                                <option value="owner">owner</option>
                               </select>     
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
<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #FF99bb;">
            <div class="card-header">

            <!-- garis tabel  dan tambah outlet -->
                <h5 class="card-title"><?php echo $judul ?></h5>
                <div class="card-tools">
                  <a href="<?php echo base_url('member')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <form method="post">
                           <div class="form-group">
                               <label for="Id Paket">ID Member</label>
                                   <input type="number" name="id_member" id="id_member" class="form-control" placeholder="ID Member" required="" value="<?php echo id('tb_member', 'id_member') ?>" readonly>                       
                           </div>
                           <div class="form-group">
                               <label for="">Nama Member</label>
                                   <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Member" >                       
                           </div>
                           <div class="form-group">
                               <label for="">Alamat</label>
                                   <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="" >                       
                           </div>
                           <div class="form-group">
                               <label for="">Telepon</label>
                                   <input type="number" name="tlp" id="tlp" class="form-control" placeholder="Telepon" required="" >                       
                           </div>
                           <div class="form-group">
                               <label for="">Jenis Kelamin</label>
                               <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="L">Laki - laki</option>
                                <option value="P">Perempuan</option>
                               </select>  
                           </div>
                           <div class="form-group">
                             <button type="submit" class="btn btn-primary">Submit</button>

                       </form>
                        </div>
                     </div>

              </div>
            </div>
          </div>
        </div>
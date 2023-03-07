<div class="row mt-4">
            <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #FF99bb;">
            <div class="card-header">
                <h5 class="card-title"><?php echo $judul ?></h5>
              </div>
            <!-- garis tabel  dan tambah transaksi -->
              <div class="card-body">
                <form method="post">
                  <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kode Invoice</label>
                        <input type="text" name="kode_invoice" id="kode_invoice" class="form-control" value="<?php echo kd_invoice()?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="datetime-local" name="tgl" id="tgl" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Batas Waktu</label>
                        <input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal Bayar</label>
                        <input type="datetime-local" name="tgl_bayar" id="tgl_bayar" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Member</label>
                      <select name="member" id="member" class="form-control member">
                        <?php foreach ($member as $row): ?>
                          <option value="<?php echo $row['id_member'] ?>"><?php echo $row['nama'] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Status</label>
                      <select name="status" id="status" class="form-control">
                        <option value="Baru">baru</option>
                        <option value="Proses">proses</option>
                        <option value="Selesai">selesai</option>
                        <option value="Diambil">diambil</option>
                      </select>
                      </div>
                      <div class="form-group">
                          <label for="">Dibayar</label>
                          <select name="dibayar" id="dibayar" class="form-control">
                          <option value="dibayar">dibayar</option>
                          <option value="belum_dibayar">belum dibayar</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
                    <select name="paket" id="paket" class="form-control paket">
                      <?php foreach ($paket as $row): ?>
                        <option value="<?php echo $row['id_paket'] ?>"><?php echo $row['nama_paket'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <input type="text" class="form-control qty" name="qty" placeholder="qty" autocomplete="off"> 
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block btn-tambah-det"><i class="fa fa-plus"></i> Tambah</button>                   
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>Paket</th>
                              <th>Harga</th>
                              <th>Qty</th>
                              <th>Total Harga</th>
                              <th>Keterangan</th>
                              <th>Hapus</th>

                            </tr>
                          </thead>
                          <tbody class="det-transaksi">
                          </tbody>
                        </table>
                    </div>
                  </div>
                  <div class="col-md-7 float-right">
                   <div class="">
                    <table class="table">
                      <tr>
                        <th>Biaya Tambahan</th>
                        <td><input autocomplete="off" type="text" class="form-control biaya_tambahan" name="biaya_tambahan" placeholder="Biaya Tambahan"></td>
                      </tr>
                      <tr>
                        <th>Pajak</th>
                        <td><input autocomplete="off" type="text" class="form-control pajak" name="pajak" placeholder="Pajak"></td>
                      </tr>
                      <tr>
                        <th>Diskon (%)</th>
                        <td><input autocomplete="off" type="text" class="form-control diskon" name="diskon" placeholder="diskon"></td>
                      </tr>
                      <tr>
                        <th>Total Bayar</th>
                        <td><input autocomplete="off" type="text" class="form-control total_bayar" name="total_bayar" readonly=""></td>
                      </tr>
                      <tr>
                        <th>Cash</th>
                        <td><input autocomplete="off" type="text" class="form-control cash" name="cash" placeholder="cash"></td>
                      </tr>
                      <tr>
                        <th>Kembalian</th>
                        <td><input autocomplete="off" type="text" class="form-control kembalian" name="kembalian" readonly=""></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <button type="submit" class="btn btn-block btn-primary">Cetak</button>
                        </td>
                      </tr>
                    </table>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script>
        const base_url = '<?php echo base_url() ?>'
      </script>
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
                        <input type="text" name="kode_invoice" id="kode_invoice" class="form-control" value="<?php echo $transaksi['kd_invoice'] ?>" readonly>
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="tgl" id="tgl" class="form-control" value="<?php echo date('Y-m-d\TH:i:s', strtotime($transaksi['tgl'])) ?>">
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="batas_waktu" id="batas_waktu" class="form-control" value="<?php echo date('Y-m-d\TH:i:s', strtotime($transaksi['batas_waktu'])) ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal Bayar</label>
                        <input type="datetime-local" name="tgl_bayar" id="tgl_bayar" class="form-control" value="<?php echo date('Y-m-d\TH:i:s', strtotime($transaksi['tgl_bayar'])) ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                    
                    <div class="form-group">
                      <label for="">Status</label>
                      <select name="status" id="status" class="form-control">
                        <option <?php echo $transaksi['status'] == 'baru'  ? 'selected' : '' ?> value="Baru">baru</option>
                        <option <?php echo $transaksi['status'] == 'proses' ? 'selected' : '' ?> value="Proses">proses</option>
                        <option <?php echo $transaksi['status'] == 'selesai' ? 'selected' : '' ?> value="Selesai">selesai</option>
                        <option <?php echo $transaksi['status'] ==  'diambil' ? 'selected' : '' ?> value="Diambil">diambil</option>
                      </select>
                      </div>
                      <div class="form-group">
                          <label for="">Dibayar</label>
                          <select name="dibayar" id="dibayar" class="form-control">
                          <option <?php echo $transaksi['dibayar'] ==  'dibayar' ? 'selected' : '' ?> value="dibayar">dibayar</option>
                          <option <?php echo $transaksi['dibayar'] ==  'belum_dibayar' ? 'selected' : '' ?> value="belum_dibayar">belum dibayar</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                  </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      <script>
        const base_url = '<?php echo base_url() ?>'
      </script>
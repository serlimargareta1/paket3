<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?><title>
    <style>
        td {
            font-size: 12px;
            font-family: sans-serif;
        }
        h3 {
            font-size: 16px;
        }
        hr {
            border: 0;
            border-top: 2px solid #FF99bb;
        }
        .table {
            border: 1px solid black;
            border-coLLapse: collapse;
        }

        th {
            font-family: sans-serif;
            font-size: 12px;
            background: lightblue;
        }
        </style>
    </head>

    <body>
        <table>
        <tr>
        <td width="400">
            <h3>Laundry Serli M</h3>
        </td>
        <td>
            <!-- <h3>Invoice</h3> -->
            <img src="<?= base_url('assets/img/icon.jpg') ?> " width="100">
            </td>
        </tr>
        <tr>
            <td>Alamat : Jember</td>
        </tr>
        <tr>
            <td>Telp. : 0895326291138</td>
        </tr>
        <tr>
            <td>Email : serlimargareta922@gmail.com</td>
        </tr>
    </table>
    <hr><br>

    <table width="700" class="tabel">
        <tr>
            <th class="tabel text-center">Id Member</th>
            <th class="tabel text-center">Tanggal Masuk</th>
            <th class="tabel text-center">Nama Member</th>
            <th class="tabel text-center">Total Bayar</th>
            <th class="tabel text-center">Status Pembayaran</th>
            <th class="tabel text-center">Tanggal Ambil</th>
        </tr>

        <tr>
            <td class="tabel"><?= $transaksi['id_member'] ?></td>
            <td class="tabel"><?= $transaksi['tgl'] ?></td>
            <td class="tabel"><?= $transaksi['nama'] ?></td>
            <td class="tabel"><?= "Rp. " . number_format($transaksi['total_bayar']) ?></td>
            <td class="tabel"><?= $transaksi['dibayar'] ?></td>
            <td class="tabel"><?= $transaksi['tgl_bayar'] ?></td>
        </tr>
        
        </table><br>

        <table>
            <tr>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
            <p>1. Pengambilan cucian harus membawa nota</p>
            <p>2. Cuci luntur bukan tanggung jawab kami</p>
            <p>3. Hitung dan periksa sebelum pergi</p>
            <p>4. Klaim kekurangan/kehilangan cucian setelah meninggalkan laundry tidak dilayani</p>
        </td>
    </tr>
</table>

</body>
</html>
<script>
    window.print();
</script>
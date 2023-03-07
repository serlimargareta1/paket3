<h1>Laporan Laundry Serli M</h1>

<table border='1' cellpadding="10" class="table table.bordered table.striped">
    <thead>
        <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Paket</th>
        <th>Outlet</th>
        <th>Harga</th>
        <th>Terjual</th>
        <th>Status Pembayaran</th>
        <th>Pendapatan</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $total = 0;
    $index=1; foreach ($laporan as $row): ?>
        <tr>
            <td><?= $index++ ?></td>
            <td><?= $row['tgl'] ?></td>
            <td><?= $row['nama_paket'] ?></td>
            <td><?= $row['nama_outlet'] ?></td>
            <td><?= "Rp." . number_format($row['harga']) ?></td>
            <td><?= $row['terjual'] ?></td>
            <td><?= $row['dibayar'] ?></td>
            <td>
                <?php if ($row['dibayar'] == 'dibayar') : ?>
                    <?= "Rp." . number_format($row['pendapatan']) ?>
                <?php else: ?>
                    Rp. 0
                <?php endif; ?>
            </td>
        </tr>
            <?php if ($row['dibayar'] =='dibayar') : ?>
                <?php $total += $row['pendapatan'] ?>
            <?php endif ; ?>
    <?php endforeach; ?>
    <tr>
        <td colspan="7">Total :</td>
        <td><?= "Rp."  . number_format($total) ?></td>
    </tr>
    </tbody>
</table>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Laporan Transaksi</h2>
    <p>Periode Tanggal: <?= date('j M Y', strtotime($start_date)) ?> - <?= date('j M Y', strtotime($end_date)) ?></p>
    <table>
        <tr>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>Tanggal</th>
            <th>Nama Donasi</th>
            <th>Nama Donatur</th>
            <th>Jumlah Donasi</th>
        </tr>
        <?php
        $nomor = 1;
        $total_donasi = 0;
        ?>
        <?php foreach ($transaksi as $t) : ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $t['id_transaksi']; ?></td>
                <td><?= date('j M Y', strtotime($t['created_at'])); ?></td>
                <td><?= $t['nama_donasi']; ?></td>
                <td>Anonim</td>
                <td><?= 'Rp. ' . number_format($t['jumlah_donasi'], 0, ',', '.'); ?></td>
            </tr>
            <?php $total_donasi += $t['jumlah_donasi']; ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="5" style="text-align:left;"><strong>Total Donasi</strong></td>
            <td><strong><?= 'Rp. ' . number_format($total_donasi, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
</body>

</html>
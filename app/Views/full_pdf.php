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
    <h1>Laporan Full</h1>
    <p>Periode Tanggal: <?= date('j M Y', strtotime($start_date)) ?> - <?= date('j M Y', strtotime($end_date)) ?></p>

    <h2>Laporan Donasi</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Id Donasi</th>
            <th>Tanggal</th>
            <th>Nama Donasi</th>
            <th>Target Donasi</th>
            <th>Perolehan Donasi</th>
        </tr>
        <?php
        $nomor = 1;
        $total_target_donasi = 0;
        $total_perolehan_donasi = 0;
        ?>
        <?php foreach ($donasi as $d) : ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $d['id_donasi'] ?></td>
                <td><?= date('j M Y', strtotime($d['created_at'])); ?></td>
                <td><?= $d['nama_donasi'] ?></td>
                <td><?= 'Rp. ' . number_format($d['target_donasi'], 0, ',', '.'); ?></td>
                <td><?= 'Rp. ' . number_format($d['perolehan_donasi'], 0, ',', '.'); ?></td>
            </tr>
            <?php
            $total_target_donasi += $d['target_donasi'];
            $total_perolehan_donasi += $d['perolehan_donasi'];
            ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" style="text-align:left;"><strong>Total</strong></td>
            <td><strong><?= 'Rp. ' . number_format($total_target_donasi, 0, ',', '.'); ?></strong></td>
            <td><strong><?= 'Rp. ' . number_format($total_perolehan_donasi, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>

    <h2>Laporan Pengeluaran</h2>
    <table>
        <tr>
            <th>No</th>
            <th>ID Pengeluaran</th>
            <th>Tanggal</th>
            <th>Nama Donasi</th>
            <th>Nama Pengeluaran</th>
            <th>Pengeluaran</th>
        </tr>
        <?php
        $nomor = 1;
        $total_pengeluaran = 0;
        ?>
        <?php foreach ($pengeluaran as $p) : ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $p['id_pengeluaran']; ?></td>
                <td><?= date('j M Y', strtotime($p['created_at'])); ?></td>
                <td><?= $p['nama_donasi']; ?></td>
                <td><?= $p['nama_pengeluaran']; ?></td>
                <td><?= 'Rp. ' . number_format($p['perolehan_pengeluaran'], 0, ',', '.'); ?></td>
            </tr>
            <?php $total_pengeluaran += $p['perolehan_pengeluaran']; ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="5" style="text-align:left;"><strong>Total Pengeluaran</strong></td>
            <td><strong><?= 'Rp. ' . number_format($total_pengeluaran, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>

    <h2>Laporan Transaksi</h2>
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
        $total_jumlah_donasi = 0;
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
            <?php $total_jumlah_donasi += $t['jumlah_donasi']; ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="5" style="text-align:left;"><strong>Total Donasi</strong></td>
            <td><strong><?= 'Rp. ' . number_format($total_jumlah_donasi, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
</body>

</html>
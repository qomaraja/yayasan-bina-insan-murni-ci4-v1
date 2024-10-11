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
    <h2>Laporan Pengeluaran</h2>
    <p>Periode Tanggal: <?= date('j M Y', strtotime($start_date)) ?> - <?= date('j M Y', strtotime($end_date)) ?></p>
    <table>
        <tr>
            <th>No</th>
            <th>Id Pengeluaran</th>
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
                <td><?= $p['id_pengeluaran'] ?></td>
                <td><?= date('j M Y', strtotime($p['created_at'])); ?></td>
                <td><?= $p['nama_donasi']; ?></td>
                <td><?= $p['nama_pengeluaran'] ?></td>
                <td><?php echo 'Rp. ' . number_format($p['perolehan_pengeluaran'], 0, ',', '.'); ?></td>
            </tr>
            <?php $total_pengeluaran += $p['perolehan_pengeluaran']; ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="5" style="text-align:left;"><strong>Total Pengeluaran</strong></td>
            <td><strong><?= 'Rp. ' . number_format($total_pengeluaran, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
</body>

</html>
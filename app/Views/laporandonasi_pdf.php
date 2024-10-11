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
    <h2>Laporan Donasi</h2>
    <p>Periode Tanggal: <?= date('j M Y', strtotime($start_date)) ?> - <?= date('j M Y', strtotime($end_date)) ?></p>
    <table>
        <tr>
            <th>No</th>
            <th>Id Donasi</th>
            <th>Tanggal</th>
            <th>Nama Donasi</th>
            <th>Target Donasi</th>
            <th>Donasi Terkumpul</th>
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
                <td><?= $d['nama_donasi']; ?></td>
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
</body>

</html>
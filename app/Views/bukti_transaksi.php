<!doctype html>
<html lang="en">

<head>
    <link href="<?= base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Pembayaran Sukses</title>
    <?= view('layout/css'); ?>
</head>

<body>
    <?= view('layout/header'); ?>

    <div class="container-fluid pt-5 mt-5" id="bukti_transaksi">
        <div class="mt-inner">
            <div class="row px-5">
                <!-- <h1 class="font-bold" style="color: #139e55;">Bukti Transaksi</h1>
                <br> -->
                <div class="alert alert-success col-md-6">
                    <h4 class="elip font-bold"><b>Terima Kasih, <?= $nama_donatur; ?></b></h4>
                    <p>Donasi Anda untuk <b><?= $nama_donasi; ?></b> sebesar <b>Rp. <?= number_format($jumlah_donasi, 2); ?></b> telah berhasil.</p>
                    <p>Pesan Anda: <?= $pesan_donatur; ?></p>
                    <p>No Telepon: <?= $no_telp_donatur; ?></p>
                </div>
            </div>
        </div>
    </div>

    <?= view('layout/footer'); ?>
    <?= view('layout/js'); ?>
</body>

</html>
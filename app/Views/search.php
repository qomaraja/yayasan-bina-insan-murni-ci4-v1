<!doctype html>
<html lang="en">

<head>
    <link href="<?= base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Search</title>
    <?= view('layout/css'); ?>
</head>

<body class="px-3">

    <?= view('layout/header'); ?>

    <div class="container-fluid pt-5 mt-5">

        <?php if (!empty($donasiResults)) { ?>
            <h2>Hasil Pencarian Donasi</h2>
            <?php foreach ($donasiResults as $dr) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                    <a href="<?= base_url('/donasi/detail/' . $dr['id_donasi']); ?>">
                        <div class="card" id="card">
                            <img src="<?= base_url('/' . $dr['img1']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $dr['nama_donasi']; ?></h5>
                                <p class="card-text text-truncate-2"><?= $dr['deskripsi_donasi']; ?></p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-link"><?= $dr['masa_aktif']; ?><br>Hari Lagi</p>
                                    </div>
                                    <div class="col">
                                        <p class="card-link text-end">Terkumpul<br><?= 'Rp.' . number_format($dr['perolehan_donasi'], 0, ',', '.'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php } ?>

        <?php if (!empty($artikelResults)) { ?>
            <h2>Hasil Pencarian Artikel</h2>
            <?php foreach ($artikelResults as $ar) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                    <a href="<?= base_url('/artikel/detail/' . $ar['id_artikel']); ?>">
                        <div class="card" id="card">
                            <img src="<?= base_url('/front/images/' . $ar['img1']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $ar['judul_artikel']; ?></h5>
                                <p class="card-text text-truncate-2"><?= $ar['isi_artikel']; ?></p>
                                <p class="card-text"><small class="text-body-secondary"><?= date('j M Y', strtotime($ar['created_at'])); ?></small></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php } ?>

        <?php if (empty($donasiResults) && empty($artikelResults)) { ?>
            <p>Tidak ada hasil yang ditemukan.</p>
        <?php } ?>

    </div>

    <?= view('layout/ingin'); ?>
    <?= view('layout/footer'); ?>
    <?= view('layout/js'); ?>

    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '+1d',
            todayHighlight: true
        });
    </script>

</body>

</html>
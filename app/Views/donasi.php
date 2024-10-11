<!doctype html>
<html lang="en">

<head>
    <link href="<?= base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Donasi</title>
    <?= view('layout/css'); ?>
</head>

<body class="px-3">

    <?= view('layout/header'); ?>

    <div class="container-fluid pt-5 mt-5 mb-5">

        <div class="row" id="city">
            <div class="col-md-12 text-center">
                <h1 class="font-purple font-bold font-xl">Mari Bantu Mereka Yang Membutuhkan</h1>
                <p class="font-medium font-md">"Kami siap menerima dan menyalurkan donasi anda"</p>
                <br>
            </div>
        </div>

        <!-- wilayah donasi -->
        <div class="row">
            <?php foreach ($donasi as $d) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
                    <a href="<?= site_url('/donasi/detail/' . $d['id_donasi']); ?>">
                        <div class="card" id="card">
                            <img src="<?= base_url('/front/images/donasi/' . $d['img1']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $d['nama_donasi']; ?></h5>
                                <!-- Progres Bar -->
                                <div class="progress" role="progressbar" aria-label="Progress bar example">
                                    <div id="progress-bar" class="progress-bar bg-success" style="width: <?= ($d['perolehan_donasi'] / $d['target_donasi']) * 100 ?>%"></div>
                                </div>
                                <div class="row mt-2">
                                    <p class="card-text text-end">Terkumpul<br><?= 'Rp ' . number_format($d['perolehan_donasi'], 0, ',', '.'); ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- wilayah donasi -->

    </div>

    <?= view('layout/ingin'); ?>

    <?= view('layout/footer'); ?>

    <?= view('layout/js'); ?>

</body>

</html>
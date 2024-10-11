<!doctype html>
<html lang="en">

<head>
    <link href="<?php echo base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Daftar Artikel</title>
    <?= view('layout/css'); ?>
</head>

<body class="px-3">

    <?= view('layout/header'); ?>

    <div class="container-fluid pt-5 mt-5">

        <div class="row" id="city">
            <div class="col-md-12 text-center">
                <h1 class="font-purple font-bold font-xl">Kisah Kami Di Sini</h1>
                <p class="font-medium font-md">"Semua pasti bisa, pasti jaya"</p>
                <br>
            </div>
        </div>

        <!-- wilayah artikel -->
        <div class="row">
            <?php foreach ($artikel as $a) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                    <a href="<?= base_url('/artikel/detail/' . $a['id_artikel']); ?>">
                        <div class="card" id="card">
                            <img src="<?= base_url('/front/images/artikel/' . $a['img1']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $a['judul_artikel']; ?></h5>
                                <p class="card-text"><small class="text-body-secondary"><?= $a['created_at']; ?></small></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- wilayah artikel -->

    </div>

    <?= view('layout/ingin'); ?>

    <?= view('layout/footer'); ?>

    <?= view('layout/js'); ?>

</body>

</html>
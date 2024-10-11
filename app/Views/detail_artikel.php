<!doctype html>
<html lang="en">

<head>
    <link href="<?php echo base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Artikel</title>
    <?= view('layout/css'); ?>
</head>

<body class="px-3">

    <?= view('layout/header'); ?>

    <div class="container-fluid pt-5 mt-5" id="artikel">
        <div class="row mb-3">
            <div class="col">
                <h1 class="font-bold py-2"><?= $artikel['judul_artikel']; ?></h1>
            </div>
        </div>
        <div class="row">
            <img src="<?= base_url('/front/images/artikel/' . $artikel['img1']); ?>" class="img-fluid custom-size" alt="">
            <p class="text_artikel"><?= $artikel['isi_artikel']; ?></p>
        </div>
        <div class="row mb-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <?php if (!empty($artikel['img' . $i])) : ?>
                            <div class="carousel-item <?= $i == 1 ? 'active' : ''; ?>">
                                <img src="<?= base_url('/front/images/artikel/' . $artikel['img' . $i]); ?>" class="img-fluid custom-size" alt="...">
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                </a>
            </div>
        </div>
    </div>

    <?= view('layout/ingin'); ?>

    <?= view('layout/footer'); ?>

    <?= view('layout/js'); ?>

</body>

</html>
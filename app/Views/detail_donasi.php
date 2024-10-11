<!doctype html>
<html lang="en">

<head>
    <link href="<?= base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Detail</title>
    <?= view('layout/css'); ?>
</head>

<body class="mx-3">

    <?= view('layout/header'); ?>

    <div class="container-fluid pt-4 mt-5">
        <div class="detail row mt-inner">
            <h1 class="font-bold py-4"><?= $donasi['nama_donasi']; ?></h1>
        </div>
        <div class="detail row">
            <div class="thumbnail col-md-6 mb-3">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <?php if (!empty($donasi['img' . $i])) : ?>
                                <div class="carousel-item <?= $i == 1 ? 'active' : ''; ?>">
                                    <img src="<?= base_url('/front/images/donasi/' . $donasi['img' . $i]); ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleAutoplaying" role="button" data-slide="prev"></a>
                    <a class="carousel-control-next" href="#carouselExampleAutoplaying" role="button" data-slide="next"></a>
                </div>
                <!-- Progres Bar -->
                <div class="progress mt-3 role=" progressbar" aria-label="Progress bar example">
                    <div id="progress-bar" class="progress-bar bg-success" style="width: <?= ($donasi['perolehan_donasi'] / $donasi['target_donasi']) * 100 ?>%"></div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <h5 class="eclip mt-inner" align="left">Tercapai: <br> <b><?= 'Rp ' . number_format($donasi['perolehan_donasi'], 0, ',', '.'); ?></b></h5>
                    </div>
                    <div class="col">
                        <h5 class="eclip mt-inner" align="right">Target: <br> <?= 'Rp ' . number_format($donasi['target_donasi'], 0, ',', '.'); ?></h5>
                    </div>
                </div>
                <br>
                <div class="col-md">
                    <a href="<?= site_url('/transaksi/register/' . $donasi['id_donasi']); ?>" class="btn btn-success btn-lg btn-block w-100" type="button">Donasi Sekarang</a>
                </div>
            </div>

            <div class="col-md-6">
                <ul class="nav nav-tabs mt-3" id="navtabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" href="#deskripsi_donasi">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pengeluaran-tab" data-bs-toggle="tab" href="#pengeluaran_donasi">Pengeluaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pesan-tab" data-bs-toggle="tab" href="#pesan_donatur">Pesan</a>
                    </li>
                </ul>

                <div class="tab-content mb-5">
                    <div class="tab-pane fade show active" id="deskripsi_donasi">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="eclip text-left mt-inner"><?= $donasi['deskripsi_donasi']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pengeluaran_donasi">
                        <?php if (!empty($pengeluaran) && is_array($pengeluaran)) : ?>
                            <div class="col-md-12 mt-4">
                                <h5 class="font-bold mb-3">Detail Pengeluaran</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>Pengeluaran</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $total_pengeluaran = 0;
                                            foreach ($pengeluaran as $r) :
                                                $total_pengeluaran += $r['perolehan_pengeluaran'];
                                            ?>
                                                <tr>
                                                    <td><?= date('j M Y', strtotime($r['created_at'])); ?></td>
                                                    <td><?= htmlspecialchars($r['nama_pengeluaran']); ?></td>
                                                    <td><?= 'Rp ' . number_format($r['perolehan_pengeluaran'], 0, ',', '.'); ?></td>
                                                    <td><?= htmlspecialchars($r['deskripsi_pengeluaran']); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td colspan="2" class="text-right"><strong>Total Pengeluaran</strong></td>
                                                <td><strong><?= 'Rp ' . number_format($total_pengeluaran, 0, ',', '.'); ?></strong></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php else : ?>
                            <p>Data pengeluaran tidak tersedia.</p>
                        <?php endif; ?>
                    </div>

                    <div class="tab-pane fade" id="pesan_donatur">
                        <?php if (!empty($transaksi) && is_array($transaksi)) : ?>
                            <div class="comments-container">
                                <h5 class="text-left mb-3">Pesan dari Para Donatur</h5>
                                <?php foreach ($transaksi as $t) : ?>
                                    <div class="comment">
                                        <div class="comment-header">
                                            <div class="comment-user-info">
                                                <strong><?= htmlspecialchars($t['nama_donatur']); ?></strong>
                                                <span class="comment-time"><?= date('j M Y', strtotime($t['created_at'])); ?></span>
                                            </div>
                                        </div>
                                        <div class="comment-body">
                                            <p><?= htmlspecialchars($t['pesan_donatur']); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else : ?>
                            <p>Pesan Dari Donatur Tidak Ada.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
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
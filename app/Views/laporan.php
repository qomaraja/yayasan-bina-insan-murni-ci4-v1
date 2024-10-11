<!doctype html>
<html lang="en">

<head>
    <link href="<?php echo base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Laporan</title>
    <?= view('layout/css'); ?>
    <base href="<?= base_url('admin/'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempus-dominus-bootstrap-4/5.39.0/css/tempus-dominus-bootstrap-4.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
</head>

<body class="px-3">

    <?= view('layout/header'); ?>

    <section class="content">
        <div class="container-fluid mt-5 pt-4">
            <div class="row" id="city">
                <div class="col-md-12 text-center">
                    <h1 class="font-purple font-bold font-xl">Kepercayaan Adalah Kebanggaan Kami</h1>
                    <p class="font-medium font-md">"Kami transparan terhadap kegiatan yang kami lakukan"</p>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Transaksi</h3>
                        </div>
                        <form action="<?= site_url('laporan/laportransaksi/transaksi') ?>" method="get">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="transaksi" name="transaksi">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Cetak</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Donasi</h3>
                        </div>
                        <form action="<?= site_url('laporan/lapordonasi/donasi') ?>" method="get">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="donasi" name="donasi">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cetak</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Pengeluaran</h3>
                        </div>
                        <form action="<?= site_url('laporan/laporpengeluaran/pengeluaran') ?>" method="get">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="pengeluaran" name="pengeluaran">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger">Cetak</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Full</h3>
                        </div>
                        <form action="<?= site_url('laporan/laporfull/full') ?>" method="get">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="full" name="full">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Cetak</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?= view('layout/ingin'); ?>

    <?= view('layout/footer'); ?>

    <?= view('layout/js'); ?>

    <base href="<?= base_url('admin'); ?>/">
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempus-dominus-core/5.39.0/js/tempus-dominus-core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempus-dominus-bootstrap-4/5.39.0/js/tempus-dominus-bootstrap-4.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        $(function() {
            //Date range picker
            $('#transaksi').daterangepicker({
                locale: {
                    format: 'YYYY/MM/DD'
                }
            })
            $('#donasi').daterangepicker({
                locale: {
                    format: 'YYYY/MM/DD'
                }
            })
            $('#pengeluaran').daterangepicker({
                locale: {
                    format: 'YYYY/MM/DD'
                }
            })
            $('#full').daterangepicker({
                locale: {
                    format: 'YYYY/MM/DD'
                }
            })
        })
    </script>

</body>

</html>
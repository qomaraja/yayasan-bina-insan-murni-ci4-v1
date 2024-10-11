<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?php echo base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <base href="<?= base_url('admin/'); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/binsani_logo.png" alt="binsani_logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-success fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-light mx-3" href="<?= site_url('/'); ?>" role="button">Beranda</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="<?= site_url('/admadmin'); ?>" class="brand-link">
                <img src="dist/img/binsani_logo.png" alt="binsani_logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">BINSANI</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- SidebarSearch Form -->
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Tambahkan ikon ke tautan menggunakan kelas .nav-icon
             dengan font-awesome atau pustaka ikon lainnya -->

                        <li class="nav-item <?= in_array($activeMenu, ['dashboard']) ? 'menu-open' : '' ?>">
                            <a href="<?= site_url('/admadmin'); ?>" class="nav-link <?= in_array($activeMenu, ['dashboard']) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item <?= in_array($activeMenu, ['data_spanduk', 'tambah_spanduk', 'edit_spanduk']) ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= in_array($activeMenu, ['data_spanduk', 'tambah_spanduk', 'edit_spanduk']) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Spanduk
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('/admspanduk'); ?>" class="nav-link <?= $activeMenu == 'data_spanduk' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Spanduk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('/admspanduk/addspanduk'); ?>" class="nav-link <?= $activeMenu == 'tambah_spanduk' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Spanduk</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?= in_array($activeMenu, ['data_donasi', 'tambah_donasi', 'edit_donasi']) ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= in_array($activeMenu, ['data_donasi', 'tambah_donasi', 'edit_donasi']) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Donasi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('/admdonasi'); ?>" class="nav-link <?= $activeMenu == 'data_donasi' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Donasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('/admdonasi/adddonasi'); ?>" class="nav-link <?= $activeMenu == 'tambah_donasi' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Donasi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?= in_array($activeMenu, ['data_artikel', 'tambah_artikel', 'edit_artikel']) ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= in_array($activeMenu, ['data_artikel', 'tambah_artikel', 'edit_artikel']) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Artikel
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('/admartikel'); ?>" class="nav-link <?= $activeMenu == 'data_artikel' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Artikel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('/admartikel/addartikel'); ?>" class="nav-link <?= $activeMenu == 'tambah_artikel' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Artikel</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?= in_array($activeMenu, ['data_transaksi', 'tambah_transaksi', 'edit_transaksi']) ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= in_array($activeMenu, ['data_transaksi', 'tambah_transaksi', 'edit_transaksi']) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Transaksi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('/admtransaksi'); ?>" class="nav-link <?= $activeMenu == 'data_transaksi' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Transaksi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('/admtransaksi/addtransaksi'); ?>" class="nav-link <?= $activeMenu == 'tambah_transaksi' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Transaksi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?= in_array($activeMenu, ['data_pengeluaran', 'tambah_pengeluaran', 'edit_pengeluaran']) ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= in_array($activeMenu, ['data_pengeluaran', 'tambah_pengeluaran', 'edit_pengeluaran']) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pengeluaran
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('/admpengeluaran'); ?>" class="nav-link <?= $activeMenu == 'data_pengeluaran' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pengeluaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('/admpengeluaran/addpengeluaran'); ?>" class="nav-link <?= $activeMenu == 'tambah_pengeluaran' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Pengeluaran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?= in_array($activeMenu, ['laporan']) ? 'menu-open' : '' ?>">
                            <a href="<?= site_url('/admlaporan'); ?>" class="nav-link <?= in_array($activeMenu, ['laporan']) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item mt-5 pt-5">
                            <a href="<?= base_url('/logout'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Keluar
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid mt-5 pt-4">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= site_url('/admadmin') ?>">Home</a></li>

                                <!-- Pengkondisian Breadcrumb Aktif -->
                                <?php if ($activeMenu == 'dashboard') : ?>
                                    <li class="breadcrumb-item active">Dashboard</li>

                                <?php elseif (in_array($activeMenu, ['data_spanduk', 'tambah_spanduk', 'edit_spanduk'])) : ?>
                                    <li class="breadcrumb-item"><a href="<?= site_url('/admspanduk') ?>">Spanduk</a></li>
                                    <?php if ($activeMenu == 'data_spanduk') : ?>
                                        <li class="breadcrumb-item active">Data Spanduk</li>
                                    <?php elseif ($activeMenu == 'tambah_spanduk') : ?>
                                        <li class="breadcrumb-item active">Tambah Spanduk</li>
                                    <?php elseif ($activeMenu == 'edit_spanduk') : ?>
                                        <li class="breadcrumb-item active">Edit Spanduk</li>
                                    <?php endif; ?>

                                <?php elseif (in_array($activeMenu, ['data_donasi', 'tambah_donasi', 'edit_donasi'])) : ?>
                                    <li class="breadcrumb-item"><a href="<?= site_url('/admdonasi') ?>">Donasi</a></li>
                                    <?php if ($activeMenu == 'data_donasi') : ?>
                                        <li class="breadcrumb-item active">Data Donasi</li>
                                    <?php elseif ($activeMenu == 'tambah_donasi') : ?>
                                        <li class="breadcrumb-item active">Tambah Donasi</li>
                                    <?php elseif ($activeMenu == 'edit_donasi') : ?>
                                        <li class="breadcrumb-item active">Edit Donasi</li>
                                    <?php endif; ?>

                                <?php elseif (in_array($activeMenu, ['data_artikel', 'tambah_artikel', 'edit_artikel'])) : ?>
                                    <li class="breadcrumb-item"><a href="<?= site_url('/admartikel') ?>">Artikel</a></li>
                                    <?php if ($activeMenu == 'data_artikel') : ?>
                                        <li class="breadcrumb-item active">Data Artikel</li>
                                    <?php elseif ($activeMenu == 'tambah_artikel') : ?>
                                        <li class="breadcrumb-item active">Tambah Artikel</li>
                                    <?php elseif ($activeMenu == 'edit_artikel') : ?>
                                        <li class="breadcrumb-item active">Edit Artikel</li>
                                    <?php endif; ?>

                                <?php elseif (in_array($activeMenu, ['data_transaksi', 'tambah_transaksi', 'edit_transaksi'])) : ?>
                                    <li class="breadcrumb-item"><a href="<?= site_url('/admtransaksi') ?>">Transaksi</a></li>
                                    <?php if ($activeMenu == 'data_transaksi') : ?>
                                        <li class="breadcrumb-item active">Data Transaksi</li>
                                    <?php elseif ($activeMenu == 'tambah_transaksi') : ?>
                                        <li class="breadcrumb-item active">Tambah Transaksi</li>
                                    <?php elseif ($activeMenu == 'edit_transaksi') : ?>
                                        <li class="breadcrumb-item active">Edit Transaksi</li>
                                    <?php endif; ?>


                                <?php elseif (in_array($activeMenu, ['data_pengeluaran', 'tambah_pengeluaran', 'edit_pengeluaran'])) : ?>
                                    <li class="breadcrumb-item"><a href="<?= site_url('/admpengeluaran') ?>">Pengeluaran</a></li>
                                    <?php if ($activeMenu == 'data_pengeluaran') : ?>
                                        <li class="breadcrumb-item active">Data Pengeluaran</li>
                                    <?php elseif ($activeMenu == 'tambah_pengeluaran') : ?>
                                        <li class="breadcrumb-item active">Tambah Pengeluaran</li>
                                    <?php elseif ($activeMenu == 'edit_pengeluaran') : ?>
                                        <li class="breadcrumb-item active">Edit Pengeluaran</li>
                                    <?php endif; ?>

                                <?php elseif ($activeMenu == 'laporan') : ?>
                                    <li class="breadcrumb-item active">Laporan</li>
                                <?php endif; ?>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <?= $this->renderSection('content'); ?>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 Yayasan Bina Insan Murni.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="plugins/dropzone/min/dropzone.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            bsCustomFileInput.init();

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'YYYY-MM-DD' // Ubah format menjadi YYYY-MM-DD
            });


            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

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
            $('#donatur').daterangepicker({
                locale: {
                    format: 'YYYY/MM/DD'
                }
            })
            $('#full').daterangepicker({
                locale: {
                    format: 'YYYY/MM/DD'
                }
            })

            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>

    <script>
        $(document).ready(function() {
            // Fungsi untuk menangani pencarian ketika tombol ditekan
            $('.btn-sidebar').on('click', function() {
                let query = $('.form-control-sidebar').val().toLowerCase();
                filterMenu(query);
            });

            // Fungsi untuk menangani pencarian ketika mengetik
            $('.form-control-sidebar').on('input', function() {
                let query = $(this).val().toLowerCase();
                filterMenu(query);
            });

            function filterMenu(query) {
                // Iterasi setiap item menu
                $('.nav-item').each(function() {
                    let itemText = $(this).text().toLowerCase();
                    // Periksa apakah teks item mengandung query
                    if (itemText.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to handle search when button is clicked
            $('.search-button').on('click', function() {
                let query = $('.search-input').val().toLowerCase();
                filterTable(query);
            });

            // Function to handle search when typing
            $('.search-input').on('input', function() {
                let query = $(this).val().toLowerCase();
                filterTable(query);
            });

            function filterTable(query) {
                // Iterate each table row
                $('#spanduk tbody tr').each(function() {
                    let rowText = $(this).text().toLowerCase();
                    // Check if row text contains the query
                    if (rowText.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to handle search when button is clicked
            $('.search-button').on('click', function() {
                let query = $('.search-input').val().toLowerCase();
                filterTable(query);
            });

            // Function to handle search when typing
            $('.search-input').on('input', function() {
                let query = $(this).val().toLowerCase();
                filterTable(query);
            });

            function filterTable(query) {
                // Iterate each table row
                $('#donasi tbody tr').each(function() {
                    let rowText = $(this).text().toLowerCase();
                    // Check if row text contains the query
                    if (rowText.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to handle search when button is clicked
            $('.search-button').on('click', function() {
                let query = $('.search-input').val().toLowerCase();
                filterTable(query);
            });

            // Function to handle search when typing
            $('.search-input').on('input', function() {
                let query = $(this).val().toLowerCase();
                filterTable(query);
            });

            function filterTable(query) {
                // Iterate each table row
                $('#artikel tbody tr').each(function() {
                    let rowText = $(this).text().toLowerCase();
                    // Check if row text contains the query
                    if (rowText.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to handle search when button is clicked
            $('.search-button').on('click', function() {
                let query = $('.search-input').val().toLowerCase();
                filterTable(query);
            });

            // Function to handle search when typing
            $('.search-input').on('input', function() {
                let query = $(this).val().toLowerCase();
                filterTable(query);
            });

            function filterTable(query) {
                // Iterate each table row
                $('#transaksi tbody tr').each(function() {
                    let rowText = $(this).text().toLowerCase();
                    // Check if row text contains the query
                    if (rowText.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to handle search when button is clicked
            $('.search-button').on('click', function() {
                let query = $('.search-input').val().toLowerCase();
                filterTable(query);
            });

            // Function to handle search when typing
            $('.search-input').on('input', function() {
                let query = $(this).val().toLowerCase();
                filterTable(query);
            });

            function filterTable(query) {
                // Iterate each table row
                $('#pengeluaran tbody tr').each(function() {
                    let rowText = $(this).text().toLowerCase();
                    // Check if row text contains the query
                    if (rowText.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>
</body>

</html>
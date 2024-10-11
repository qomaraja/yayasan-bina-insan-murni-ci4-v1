<!doctype html>
<html lang="en">

<head>
    <link href="<?= base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Transaksi</title>
    <?= view('layout/css'); ?>
</head>

<body class="px-3">

    <?= view('layout/header'); ?>

    <div class="bg">
        <div class="container-fluid pt-4 mt-5" id="register">
            <div class="mt-inner">
                <div class="row px-5">
                    <h1 class="font-bold" style="color: #139e55;">Silakan Masukan Data Anda</h1>
                    <br>
                    <div class="alert alert-success col-md-6">
                        <form id="payment-form">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_donasi" value="<?= $donasi['id_donasi']; ?>">
                            <div class="form-group">
                                <h4 class="elip font-bold" style="margin-bottom: 30px"><b><?= $donasi['nama_donasi']; ?></b></h4>
                                <label for="jumlah_donasi">Donasi</label>
                                <input type="text" name="jumlah_donasi" id="jumlah_donasi" class="form-control" placeholder="Rp." autofocus required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="nama_donatur">Nama Lengkap</label>
                                <input type="text" name="nama_donatur" id="nama_donatur" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="no_telp_donatur">No Telepon (WhatsApp)</label>
                                <input type="text" name="no_telp_donatur" id="no_telp_donatur" class="form-control" placeholder="No Telepon" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="pesan_donatur">Pesan</label>
                                <textarea name="pesan_donatur" id="pesan_donatur" class="form-control" placeholder="Pesan" rows="3"></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success white btn-lg btn-block" id="pay-button">Lanjut Donasi</button>
                        </form>
                    </div>

                    <div class="col-md-6" style="margin-top: 350px;">
                        <h1 class="text-content font-bold font-xl">Dari kita untuk kita</h1>
                        <h2 class="text-content font-bold font-xl" style="color: #139e55;">#ManusiaDermawan</h2>
                        <p class="text-content font-lg">"Sedekah akan membuka pintu rezeki dari arah yang tidak di sangka sebelumnya"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= view('layout/ingin'); ?>
    <?= view('layout/footer'); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-BsxPYr_Cn0bGXdw4"></script>

    <script>
        $(document).ready(function() {
            $('#payment-form').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: '<?= base_url('transaksi/getSnapToken') ?>',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.token) {
                            snap.pay(response.token, {
                                onSuccess: function(result) {
                                    console.log(result);
                                    // Setelah pembayaran sukses, kirim data ke server untuk disimpan
                                    $.ajax({
                                        url: '<?= base_url('transaksi/complete') ?>',
                                        method: 'POST',
                                        data: {
                                            id_donasi: $('input[name="id_donasi"]').val(),
                                            nama_donatur: $('input[name="nama_donatur"]').val(),
                                            no_telp_donatur: $('input[name="no_telp_donatur"]').val(),
                                            pesan_donatur: $('textarea[name="pesan_donatur"]').val(),
                                            jumlah_donasi: $('input[name="jumlah_donasi"]').val(),
                                            order_id: result.order_id
                                        },
                                        success: function(response) {
                                            window.location.href = '<?= base_url('/transaksi/success') ?>';
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error saving transaction: ' + status + error);
                                        }
                                    });
                                },
                                onPending: function(result) {
                                    console.log(result);
                                },
                                onError: function(result) {
                                    console.log(result);
                                }
                            });
                        } else {
                            console.error('Snap token not found in the response');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + status + error);
                    }
                });
            });
        });
    </script>

</body>

</html>
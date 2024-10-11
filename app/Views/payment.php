<!doctype html>
<html lang="en">

<head>
    <link href="<?= base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Payment</title>
    <?= view('layout/css'); ?>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-BsxPYr_Cn0bGXdw4"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '<?= base_url('midtrans/token') ?>',
                method: 'post',
                data: {
                    id_transaksi: '<?= $id_transaksi ?>',
                    nama_donatur: '<?= $nama_donatur ?>',
                    no_telp_donatur: '<?= $no_telp_donatur ?>',
                    jumlah_donasi: '<?= $jumlah_donasi ?>'
                },
                success: function(data) {
                    snap.pay(data.token, {
                        onSuccess: function(result) {
                            console.log(result);
                            window.location.href = '<?= base_url('/transaksi/complete/' . $id_transaksi) ?>';
                        },
                        onPending: function(result) {
                            console.log(result);
                        },
                        onError: function(result) {
                            console.log(result);
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + error);
                }
            });
        });
    </script>
</body>

</html>
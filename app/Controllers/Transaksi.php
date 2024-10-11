<?php

// App\Controllers\Transaksi.php
namespace App\Controllers;

use App\Models\MdlDonasi;
use App\Models\MdlTransaksi;
use Config\Midtrans as MidtransConfig;
use Midtrans\Config;
use Midtrans\Snap;

class Transaksi extends BaseController
{
    protected $MdlDonasi;
    protected $MdlTransaksi;

    public function __construct()
    {
        $this->MdlDonasi = new MdlDonasi();
        $this->MdlTransaksi = new MdlTransaksi();

        // Set konfigurasi Midtrans
        $config = new MidtransConfig();
        Config::$serverKey = $config->serverKey;
        Config::$isProduction = $config->isProduction;
        Config::$isSanitized = $config->isSanitized;
        Config::$is3ds = $config->is3ds;
    }

    public function register($id_donasi)
    {
        $donasi = $this->MdlDonasi->find($id_donasi);
        return view('transaksi_donasi', ['donasi' => $donasi]);
    }

    public function getSnapToken()
    {
        $nama_donatur = $this->request->getVar('nama_donatur');
        $no_telp_donatur = $this->request->getVar('no_telp_donatur');
        $jumlah_donasi = (float) $this->request->getVar('jumlah_donasi');

        $transaction_details = [
            'order_id' => rand(),
            'gross_amount' => $jumlah_donasi,
        ];

        $customer_details = [
            'first_name' => $nama_donatur,
            'phone' => $no_telp_donatur,
        ];

        $transaction = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
        ];

        try {
            $snapToken = Snap::getSnapToken($transaction);
            return $this->response->setJSON(['token' => $snapToken]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['error' => $e->getMessage()]);
        }
    }

    public function complete()
    {
        $data = [
            'id_donasi' => (int) $this->request->getVar('id_donasi'),
            'nama_donatur' => $this->request->getVar('nama_donatur'),
            'no_telp_donatur' => $this->request->getVar('no_telp_donatur'),
            'pesan_donatur' => $this->request->getVar('pesan_donatur'),
            'jumlah_donasi' => (float) $this->request->getVar('jumlah_donasi'),
            'order_id' => $this->request->getVar('order_id'),
        ];

        try {
            $this->MdlTransaksi->save($data);

            // Perbarui perolehan donasi di data_donasi
            $this->MdlDonasi->updatePerolehanDonasi($data['id_donasi'], $data['jumlah_donasi']);

            // Redirect ke halaman sukses
            return redirect()->to(base_url('/transaksi/success'));
        } catch (\Exception $e) {
            // Handle error
            echo $e->getMessage();
        }
    }

    public function success()
    {
        // Ambil data transaksi terakhir yang disimpan
        $lastTransaction = $this->MdlTransaksi->orderBy('id_transaksi', 'DESC')->first();

        $donasi = $this->MdlDonasi->find($lastTransaction['id_donasi']);

        $data = [
            'transaksi' => $lastTransaction,
            'donasi' => $donasi,
            'nama_donasi' => $donasi['nama_donasi'],
            'jumlah_donasi' => $lastTransaction['jumlah_donasi'],
            'nama_donatur' => $lastTransaction['nama_donatur'],
            'no_telp_donatur' => $lastTransaction['no_telp_donatur'],
            'pesan_donatur' => $lastTransaction['pesan_donatur'],
        ];

        // Tampilkan view bukti transaksi
        return view('bukti_transaksi', $data);
    }
}

<?php

namespace App\Controllers;

use Config\Midtrans as MidtransConfig;
use Midtrans\Config;
use Midtrans\Snap;

class Midtrans extends BaseController
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        $config = new MidtransConfig();
        Config::$serverKey = $config->serverKey;
        Config::$isProduction = $config->isProduction;
        Config::$isSanitized = $config->isSanitized;
        Config::$is3ds = $config->is3ds;
    }

    public function token()
    {
        $nama_donatur = $this->request->getVar('nama_donatur');
        $no_telp_donatur = $this->request->getVar('no_telp_donatur');
        $jumlah_donasi = $this->request->getVar('jumlah_donasi');

        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => $jumlah_donasi, // Nominal transaksi
        );

        $customer_details = array(
            'first_name' => $nama_donatur,
            'phone' => $no_telp_donatur,
        );

        $transaction = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details
        );

        try {
            $snapToken = Snap::getSnapToken($transaction);
            return $this->response->setJSON(['token' => $snapToken]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['error' => $e->getMessage()]);
        }
    }
}

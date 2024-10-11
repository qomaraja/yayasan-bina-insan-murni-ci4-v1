<?php

namespace App\Controllers;

use App\Models\MdlTransaksi; // Tambahkan ini
use App\Models\MdlPengeluaran; // Tambahkan ini
use App\Models\MdlDonasi; // Tambahkan ini
use App\Models\MdlArtikel; // Tambahkan ini


class AdmAdmin extends BaseController
{
    protected $MdlTransaksi; // Ganti MdlDonasi menjadi MdlTransaksi
    protected $MdlPengeluaran; // Ganti MdlDonasi menjadi MdlTransaksi
    protected $MdlDonasi; // Ganti MdlDonasi menjadi MdlTransaksi
    protected $MdlArtikel; // Ganti MdlDonasi menjadi MdlTransaksi

    public function __construct()
    {
        $this->MdlTransaksi = new MdlTransaksi(); // Ganti inisialisasi
        $this->MdlPengeluaran = new MdlPengeluaran(); // Ganti inisialisasi
        $this->MdlDonasi = new MdlDonasi(); // Ganti inisialisasi
        $this->MdlArtikel = new MdlArtikel(); // Ganti inisialisasi
    }

    public function index()
    {
        $models = [
            'jumlahTransaksi' => [$this->MdlTransaksi, 'countAll'],
            'jumlahPengeluaran' => [$this->MdlPengeluaran, 'countAll'],
            'jumlahDonasi' => [$this->MdlDonasi, 'countAll'],
            'jumlahArtikel' => [$this->MdlArtikel, 'countAll'],
            'totalDonasi' => [$this->MdlTransaksi, 'getTotalDonasi'],
            'totalPengeluaran' => [$this->MdlPengeluaran, 'getTotalPengeluaran']
        ];

        $data = [
            'title' => 'Dashboard',
            'activeMenu' => 'dashboard'
        ];

        foreach ($models as $key => $modelMethod) {
            [$model, $method] = $modelMethod;
            $data[$key] = $model->$method();
        }

        return view('admdashboard', $data);
    }
}

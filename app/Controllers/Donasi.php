<?php

namespace App\Controllers;

use App\Models\MdlDonasi;
use App\Models\MdlPengeluaran;
use App\Models\MdlTransaksi;

class Donasi extends BaseController
{
    protected $MdlDonasi;
    protected $MdlPengeluaran;
    protected $MdlTransaksi;


    public function __construct()
    {
        $this->MdlDonasi = new MdlDonasi();
        $this->MdlPengeluaran = new MdlPengeluaran();
        $this->MdlTransaksi = new MdlTransaksi();
    }

    public function index()
    {
        $donasi = $this->MdlDonasi->findAll();

        $data = ['donasi' => $donasi];
        return view('donasi', $data);
    }

    public function detail($id_donasi)
    {
        $donasi = $this->MdlDonasi->find($id_donasi);
        $data = [
            'donasi' => $donasi,
            'pengeluaran' => $this->MdlPengeluaran->getPengeluaranByDonasi($id_donasi),
            'transaksi' => $this->MdlTransaksi->getTransaksiByDonasi($id_donasi)
        ];
        return view('detail_donasi', $data);
    }
}

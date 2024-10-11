<?php

namespace App\Controllers;

use App\Models\MdlDonasi;
use App\Models\MdlSpanduk;
use App\Models\MdlArtikel;
use App\Models\MdlTransaksi;


class Home extends BaseController
{
    protected $MdlDonasi;
    protected $MdlSpanduk;
    protected $MdlArtikel;
    protected $MdlTransaksi;


    public function __construct()
    {
        $this->MdlDonasi = new MdlDonasi();
        $this->MdlSpanduk = new MdlSpanduk();
        $this->MdlArtikel = new MdlArtikel();
        $this->MdlTransaksi = new MdlTransaksi();
    }

    public function index()
    {
        $MdlDonasi = $this->MdlDonasi->findAll();
        $MdlSpanduk = $this->MdlSpanduk->findAll();
        $MdlArtikel = $this->MdlArtikel->findAll();

        $models = [
            'jumlahTransaksi' => [$this->MdlTransaksi, 'countAll'],
            'jumlahDonasi' => [$this->MdlDonasi, 'countAll'],
            'totalDonasi' => [$this->MdlTransaksi, 'getTotalDonasi']
        ];

        $data = [
            'donasi' => $MdlDonasi,
            'spanduk' => $MdlSpanduk,
            'artikel' => $MdlArtikel
        ];

        foreach ($models as $key => $modelMethod) {
            [$model, $method] = $modelMethod;
            $data[$key] = $model->$method();
        }

        return view('home', $data);
    }

    public function home2()
    {
        return view('home2');
    }
}

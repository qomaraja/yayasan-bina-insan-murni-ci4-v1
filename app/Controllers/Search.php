<?php

namespace App\Controllers;

use App\Models\MdlDonasi;
use App\Models\MdlArtikel;

class Search extends BaseController
{
    public function index()
    {
        // Mengambil query pencarian dari URL
        $query = $this->request->getVar('query');

        // Mencari data donasi
        $donasiModel = new MdlDonasi();
        $donasiResults = $donasiModel->like('nama_donasi', $query)->orLike('deskripsi_donasi', $query)->findAll();

        // Mencari data artikel
        $artikelModel = new MdlArtikel();
        $artikelResults = $artikelModel->like('judul_artikel', $query)->orLike('isi_artikel', $query)->findAll();

        // Menampilkan hasil pencarian
        return view('search', ['donasiResults' => $donasiResults, 'artikelResults' => $artikelResults]);
    }
}

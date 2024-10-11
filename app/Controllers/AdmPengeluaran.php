<?php

namespace App\Controllers;

use App\Models\MdlDonasi;
use App\Models\MdlPengeluaran;


class AdmPengeluaran extends BaseController
{
    protected $MdlDonasi;
    protected $MdlPengeluaran;


    public function __construct()
    {
        $this->MdlDonasi = new MdlDonasi();
        $this->MdlPengeluaran = new MdlPengeluaran();
    }

    public function index()
    {
        $pengeluaran = $this->MdlPengeluaran->getPengeluaranWithDonasi();

        $data = [
            'pengeluaran' => $pengeluaran,
            'title' => 'Data Pengeluaran',
            'activeMenu' => 'data_pengeluaran'
        ];

        return view('admpengeluaran', $data);
    }

    public function addPengeluaran()
    {
        $data = [
            'title' => 'Tambah Pengeluaran',
            'donasi' => $this->MdlPengeluaran->getDonasi(),
            'activeMenu' => 'tambah_pengeluaran'
        ];
        return view('addpengeluaran', $data);
    }

    public function savePengeluaran()
    {
        // $imgPengeluaran = $this->request->getFile('img');
        // if ($imgPengeluaran->getError() == 4) {
        //     $imgNama = 'default.png';
        // } else {
        //     $imgNama = $imgPengeluaran->getRandomName();
        //     $imgPengeluaran->move('front/images/pengeluaran', $imgNama);
        // }

        $this->MdlPengeluaran->save([
            'id_donasi' => $this->request->getVar('nama_donasi'),
            'nama_pengeluaran' => $this->request->getVar('nama_pengeluaran'),
            'perolehan_pengeluaran' => $this->request->getVar('perolehan_pengeluaran'),
            'deskripsi_pengeluaran' => $this->request->getVar('deskripsi_pengeluaran'),
            // 'img' => $imgNama
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admpengeluaran');
    }

    public function editPengeluaran($id_pengeluaran)
    {
        $pengeluaran = $this->MdlPengeluaran->find($id_pengeluaran);

        $data = [
            'pengeluaran' => $pengeluaran,
            'title' => 'Edit pengeluaran',
            'donasi' => $this->MdlPengeluaran->getDonasi(),
            'activeMenu' => 'edit_pengeluaran'
        ];

        return view('editpengeluaran', $data);
    }

    public function updatePengeluaran($id_pengeluaran)
    {
        $this->MdlPengeluaran->save([
            'id_pengeluaran' => $id_pengeluaran,
            'id_donasi' => $this->request->getVar('nama_donasi'),
            'nama_pengeluaran' => $this->request->getVar('nama_pengeluaran'),
            'perolehan_pengeluaran' => $this->request->getVar('perolehan_pengeluaran'),
            'deskripsi_pengeluaran' => $this->request->getVar('deskripsi_pengeluaran'),
            // 'img1' => $imgNama
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admpengeluaran');
    }

    public function deletePengeluaran($id_pengeluaran)
    {
        $MdlPengeluaran = $this->MdlPengeluaran->find($id_pengeluaran);

        // if ($MdlPengeluaran['img'] != 'default.png') {

        //     unlink('front/images/pengeluaran/' . $MdlPengeluaran['img']);
        // }

        $this->MdlPengeluaran->delete($id_pengeluaran);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admpengeluaran');
    }
}

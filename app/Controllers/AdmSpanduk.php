<?php

namespace App\Controllers;

use App\Models\MdlSpanduk;


class AdmSpanduk extends BaseController
{
    protected $MdlSpanduk;


    public function __construct()
    {
        $this->MdlSpanduk = new MdlSpanduk();
    }

    public function index()
    {
        $spanduk = $this->MdlSpanduk->findAll();

        $data = [
            'spanduk' => $spanduk,
            'title' => 'Data Spanduk',
            'activeMenu' => 'data_spanduk'
        ];

        return view('admspanduk', $data);
    }

    public function addSpanduk()
    {
        $data = [
            'title' => 'Tambah Spanduk',
            'activeMenu' => 'tambah_spanduk'
        ];

        return view('addspanduk', $data);
    }

    public function saveSpanduk()
    {
        $imgSpanduk = $this->request->getFile('img');
        if ($imgSpanduk->getError() == 4) {
            $imgNama = 'default.png';
        } else {
            $imgNama = $imgSpanduk->getRandomName();
            $imgSpanduk->move('front/images/slider', $imgNama);
        }

        $this->MdlSpanduk->save([
            'judul_spanduk' => $this->request->getVar('judul_spanduk'),
            'deskripsi_spanduk' => $this->request->getVar('deskripsi_spanduk'),
            'img' => $imgNama
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admspanduk');
    }

    public function editSpanduk($id_spanduk)
    {
        $spanduk = $this->MdlSpanduk->find($id_spanduk);

        $data = [
            'spanduk' => $spanduk,
            'title' => 'Edit Spanduk',
            'activeMenu' => 'edit_spanduk'
        ];

        return view('editspanduk', $data);
    }

    public function updateSpanduk($id_spanduk)
    {
        $imgSpanduk = $this->request->getFile('img');
        if ($imgSpanduk->getError() == 4) {
            $imgNama = $this->request->getVar('imgLama');
        } else {
            $imgNama = $imgSpanduk->getRandomName();
            $imgSpanduk->move('front/images/slider', $imgNama);
            if ($this->request->getVar('imgLama') != 'default.png') {

                unlink('front/images/slider/' . $this->request->getVar('imgLama'));
            }
        }

        $this->MdlSpanduk->save([
            'id_spanduk' => $id_spanduk,
            'judul_spanduk' => $this->request->getVar('judul_spanduk'),
            'deskripsi_spanduk' => $this->request->getVar('deskripsi_spanduk'),
            'img' => $imgNama
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diperbarui.');

        return redirect()->to('/admspanduk');
    }

    public function deleteSpanduk($id_spanduk)
    {
        $MdlSpanduk = $this->MdlSpanduk->find($id_spanduk);

        if ($MdlSpanduk['img'] != 'default.png') {

            unlink('front/images/slider/' . $MdlSpanduk['img']);
        }


        $this->MdlSpanduk->delete($id_spanduk);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admspanduk');
    }
}

<?php

namespace App\Controllers;

use App\Models\MdlDonasi;


class AdmDonasi extends BaseController
{
    protected $MdlDonasi;

    public function __construct()
    {
        $this->MdlDonasi = new MdlDonasi();
    }

    public function index()
    {
        $donasi = $this->MdlDonasi->findAll();

        $data = [
            'donasi' => $donasi,
            'title' => 'Data Donasi',
            'activeMenu' => 'data_donasi'
        ];

        return view('admdonasi', $data);
    }

    public function addDonasi()
    {
        $data = [
            'title' => 'Tambah Donasi',
            'activeMenu' => 'tambah_donasi'
        ];
        return view('adddonasi', $data);
    }

    public function saveDonasi()
    {
        $imgDonasi1 = $this->request->getFile('img1');
        if ($imgDonasi1->getError() == 4) {
            $imgNama1 = 'default.png';
        } else {
            $imgNama1 = $imgDonasi1->getRandomName();
            $imgDonasi1->move('front/images/donasi', $imgNama1);
        }

        $imgDonasi2 = $this->request->getFile('img2');
        if ($imgDonasi2->getError() == 4) {
            $imgNama2 = 'default.png';
        } else {
            $imgNama2 = $imgDonasi2->getRandomName();
            $imgDonasi2->move('front/images/donasi', $imgNama2);
        }

        $imgDonasi3 = $this->request->getFile('img3');
        if ($imgDonasi3->getError() == 4) {
            $imgNama3 = 'default.png';
        } else {
            $imgNama3 = $imgDonasi3->getRandomName();
            $imgDonasi3->move('front/images/donasi', $imgNama3);
        }

        $imgDonasi4 = $this->request->getFile('img4');
        if ($imgDonasi4->getError() == 4) {
            $imgNama4 = 'default.png';
        } else {
            $imgNama4 = $imgDonasi4->getRandomName();
            $imgDonasi4->move('front/images/donasi', $imgNama4);
        }

        $imgDonasi5 = $this->request->getFile('img5');
        if ($imgDonasi5->getError() == 4) {
            $imgNama5 = 'default.png';
        } else {
            $imgNama5 = $imgDonasi5->getRandomName();
            $imgDonasi5->move('front/images/donasi', $imgNama5);
        }

        $this->MdlDonasi->save([
            'nama_donasi' => $this->request->getVar('nama_donasi'),
            'target_donasi' => $this->request->getVar('target_donasi'),
            'deskripsi_donasi' => $this->request->getVar('deskripsi_donasi'),
            'img1' => $imgNama1,
            'img2' => $imgNama2,
            'img3' => $imgNama3,
            'img4' => $imgNama4,
            'img5' => $imgNama5
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admdonasi');
    }

    public function editDonasi($id_donasi)
    {
        $donasi = $this->MdlDonasi->find($id_donasi);

        $data = [
            'donasi' => $donasi,
            'title' => 'Edit donasi',
            'activeMenu' => 'edit_donasi'
        ];

        return view('editdonasi', $data);
    }

    public function updateDonasi($id_donasi)
    {
        $imgDonasi1 = $this->request->getFile('img1');
        if ($imgDonasi1->getError() == 4) {
            $imgNama1 = $this->request->getVar('imgLama1');
        } else {
            $imgNama1 = $imgDonasi1->getRandomName();
            $imgDonasi1->move('front/images/donasi', $imgNama1);
            if ($this->request->getVar('imgLama1') != 'default.png') {

                unlink('front/images/donasi/' . $this->request->getVar('imgLama1'));
            }
        }

        $imgDonasi2 = $this->request->getFile('img2');
        if ($imgDonasi2->getError() == 4) {
            $imgNama2 = $this->request->getVar('imgLama2');
        } else {
            $imgNama2 = $imgDonasi2->getRandomName();
            $imgDonasi2->move('front/images/donasi', $imgNama2);
            if ($this->request->getVar('imgLama2') != 'default.png') {

                unlink('front/images/donasi/' . $this->request->getVar('imgLama2'));
            }
        }

        $imgDonasi3 = $this->request->getFile('img3');
        if ($imgDonasi3->getError() == 4) {
            $imgNama3 = $this->request->getVar('imgLama3');
        } else {
            $imgNama3 = $imgDonasi3->getRandomName();
            $imgDonasi3->move('front/images/donasi', $imgNama3);
            if ($this->request->getVar('imgLama3') != 'default.png') {

                unlink('front/images/donasi/' . $this->request->getVar('imgLama3'));
            }
        }

        $imgDonasi4 = $this->request->getFile('img4');
        if ($imgDonasi4->getError() == 4) {
            $imgNama4 = $this->request->getVar('imgLama4');
        } else {
            $imgNama4 = $imgDonasi4->getRandomName();
            $imgDonasi4->move('front/images/donasi', $imgNama4);
            if ($this->request->getVar('imgLama4') != 'default.png') {

                unlink('front/images/donasi/' . $this->request->getVar('imgLama4'));
            }
        }

        $imgDonasi5 = $this->request->getFile('img5');
        if ($imgDonasi5->getError() == 4) {
            $imgNama5 = $this->request->getVar('imgLama5');
        } else {
            $imgNama5 = $imgDonasi5->getRandomName();
            $imgDonasi5->move('front/images/donasi', $imgNama5);
            if ($this->request->getVar('imgLama5') != 'default.png') {

                unlink('front/images/donasi/' . $this->request->getVar('imgLama5'));
            }
        }

        $this->MdlDonasi->save([
            'id_donasi' => $id_donasi,
            'nama_donasi' => $this->request->getVar('nama_donasi'),
            'target_donasi' => $this->request->getVar('target_donasi'),
            'deskripsi_donasi' => $this->request->getVar('deskripsi_donasi'),
            'img1' => $imgNama1,
            'img2' => $imgNama2,
            'img3' => $imgNama3,
            'img4' => $imgNama4,
            'img5' => $imgNama5
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admdonasi');
    }

    public function deleteDonasi($id_donasi)
    {
        $Mdldonasi = $this->MdlDonasi->find($id_donasi);

        if ($Mdldonasi['img1'] != 'default.png') {

            unlink('front/images/donasi/' . $Mdldonasi['img1']);
        }

        if ($Mdldonasi['img2'] != 'default.png') {

            unlink('front/images/donasi/' . $Mdldonasi['img2']);
        }

        if ($Mdldonasi['img3'] != 'default.png') {

            unlink('front/images/donasi/' . $Mdldonasi['img3']);
        }

        if ($Mdldonasi['img4'] != 'default.png') {

            unlink('front/images/donasi/' . $Mdldonasi['img4']);
        }

        if ($Mdldonasi['img5'] != 'default.png') {

            unlink('front/images/donasi/' . $Mdldonasi['img5']);
        }

        $this->MdlDonasi->delete($id_donasi);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admdonasi');
    }
}

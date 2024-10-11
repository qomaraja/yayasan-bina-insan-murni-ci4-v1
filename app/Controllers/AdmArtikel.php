<?php

namespace App\Controllers;

use App\Models\MdlArtikel;


class AdmArtikel extends BaseController
{
    protected $MdlArtikel;

    public function __construct()
    {
        $this->MdlArtikel = new MdlArtikel();
    }

    public function index()
    {
        $artikel = $this->MdlArtikel->findAll();

        $data = [
            'artikel' => $artikel,
            'title' => 'Data Artikel',
            'activeMenu' => 'data_artikel'
        ];

        return view('admartikel', $data);
    }

    public function addArtikel()
    {
        $data = [
            'title' => 'Tambah Artikel',
            'activeMenu' => 'tambah_artikel'
        ];

        return view('addartikel', $data);
    }

    public function saveArtikel()
    {
        $imgArtikel1 = $this->request->getFile('img1');
        if ($imgArtikel1->getError() == 4) {
            $imgNama1 = 'default.png';
        } else {
            $imgNama1 = $imgArtikel1->getRandomName();
            $imgArtikel1->move('front/images/artikel', $imgNama1);
        }

        $imgArtikel2 = $this->request->getFile('img2');
        if ($imgArtikel2->getError() == 4) {
            $imgNama2 = 'default.png';
        } else {
            $imgNama2 = $imgArtikel2->getRandomName();
            $imgArtikel2->move('front/images/artikel', $imgNama2);
        }

        $imgArtikel3 = $this->request->getFile('img3');
        if ($imgArtikel3->getError() == 4) {
            $imgNama3 = 'default.png';
        } else {
            $imgNama3 = $imgArtikel3->getRandomName();
            $imgArtikel3->move('front/images/artikel', $imgNama3);
        }

        $imgArtikel4 = $this->request->getFile('img4');
        if ($imgArtikel4->getError() == 4) {
            $imgNama4 = 'default.png';
        } else {
            $imgNama4 = $imgArtikel4->getRandomName();
            $imgArtikel4->move('front/images/artikel', $imgNama4);
        }

        $imgArtikel5 = $this->request->getFile('img5');
        if ($imgArtikel5->getError() == 4) {
            $imgNama5 = 'default.png';
        } else {
            $imgNama5 = $imgArtikel5->getRandomName();
            $imgArtikel5->move('front/images/artikel', $imgNama5);
        }

        $this->MdlArtikel->save([
            'judul_artikel' => $this->request->getVar('judul_artikel'),
            'isi_artikel' => $this->request->getVar('isi_artikel'),
            'img1' => $imgNama1,
            'img2' => $imgNama2,
            'img3' => $imgNama3,
            'img4' => $imgNama4,
            'img5' => $imgNama5
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admartikel');
    }

    public function editArtikel($id_artikel)
    {
        $artikel = $this->MdlArtikel->find($id_artikel);

        $data = [
            'artikel' => $artikel,
            'title' => 'Edit Artikel',
            'activeMenu' => 'edit_artikel'
        ];

        return view('editartikel', $data);
    }

    public function updateArtikel($id_artikel)
    {
        $imgartikel1 = $this->request->getFile('img1');
        if ($imgartikel1->getError() == 4) {
            $imgNama1 = $this->request->getVar('imgLama1');
        } else {
            $imgNama1 = $imgartikel1->getRandomName();
            $imgartikel1->move('front/images/artikel', $imgNama1);
            if ($this->request->getVar('imgLama1') != 'default.png') {

                unlink('front/images/artikel/' . $this->request->getVar('imgLama1'));
            }
        }

        $imgartikel2 = $this->request->getFile('img2');
        if ($imgartikel2->getError() == 4) {
            $imgNama2 = $this->request->getVar('imgLama2');
        } else {
            $imgNama2 = $imgartikel2->getRandomName();
            $imgartikel2->move('front/images/artikel', $imgNama2);
            if ($this->request->getVar('imgLama2') != 'default.png') {

                unlink('front/images/artikel/' . $this->request->getVar('imgLama2'));
            }
        }

        $imgartikel3 = $this->request->getFile('img3');
        if ($imgartikel3->getError() == 4) {
            $imgNama3 = $this->request->getVar('imgLama3');
        } else {
            $imgNama3 = $imgartikel3->getRandomName();
            $imgartikel3->move('front/images/artikel', $imgNama3);
            if ($this->request->getVar('imgLama3') != 'default.png') {

                unlink('front/images/artikel/' . $this->request->getVar('imgLama3'));
            }
        }

        $imgartikel4 = $this->request->getFile('img4');
        if ($imgartikel4->getError() == 4) {
            $imgNama4 = $this->request->getVar('imgLama4');
        } else {
            $imgNama4 = $imgartikel4->getRandomName();
            $imgartikel4->move('front/images/artikel', $imgNama4);
            if ($this->request->getVar('imgLama4') != 'default.png') {

                unlink('front/images/artikel/' . $this->request->getVar('imgLama4'));
            }
        }

        $imgartikel5 = $this->request->getFile('img5');
        if ($imgartikel5->getError() == 4) {
            $imgNama5 = $this->request->getVar('imgLama5');
        } else {
            $imgNama5 = $imgartikel5->getRandomName();
            $imgartikel5->move('front/images/artikel', $imgNama5);
            if ($this->request->getVar('imgLama5') != 'default.png') {

                unlink('front/images/artikel/' . $this->request->getVar('imgLama5'));
            }
        }

        $this->MdlArtikel->save([
            'id_artikel' => $id_artikel,
            'judul_artikel' => $this->request->getVar('judul_artikel'),
            'isi_artikel' => $this->request->getVar('isi_artikel'),
            'img1' => $imgNama1,
            'img2' => $imgNama2,
            'img3' => $imgNama3,
            'img4' => $imgNama4,
            'img5' => $imgNama5
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admartikel');
    }

    public function deleteArtikel($id_artikel)
    {
        $MdlArtikel = $this->MdlArtikel->find($id_artikel);

        if ($MdlArtikel['img1'] != 'default.png') {

            unlink('front/images/artikel/' . $MdlArtikel['img1']);
        }

        if ($MdlArtikel['img2'] != 'default.png') {

            unlink('front/images/artikel/' . $MdlArtikel['img2']);
        }

        if ($MdlArtikel['img3'] != 'default.png') {

            unlink('front/images/artikel/' . $MdlArtikel['img3']);
        }

        if ($MdlArtikel['img4'] != 'default.png') {

            unlink('front/images/artikel/' . $MdlArtikel['img4']);
        }

        if ($MdlArtikel['img5'] != 'default.png') {

            unlink('front/images/artikel/' . $MdlArtikel['img5']);
        }

        $this->MdlArtikel->delete($id_artikel);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admartikel');
    }
}

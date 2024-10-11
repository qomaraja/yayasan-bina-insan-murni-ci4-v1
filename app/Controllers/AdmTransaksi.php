<?php

namespace App\Controllers;

use App\Models\MdlTransaksi;
use App\Models\MdlDonasi;

class AdmTransaksi extends BaseController
{
    protected $MdlTransaksi;
    protected $MdlDonasi;

    public function __construct()
    {
        $this->MdlTransaksi = new MdlTransaksi();
        $this->MdlDonasi = new MdlDonasi();
    }

    public function index()
    {
        $transaksi = $this->MdlTransaksi->gettransaksiWithDonasi();

        $data = [
            'transaksi' => $transaksi,
            'title' => 'Data Transaksi',
            'activeMenu' => 'data_transaksi'
        ];

        return view('admtransaksi', $data);
    }

    public function addTransaksi()
    {
        $data = [
            'title' => 'Tambah transaksi',
            'donasi' => $this->MdlTransaksi->getDonasi(),
            'activeMenu' => 'tambah_transaksi'
        ];
        return view('addtransaksi', $data);
    }

    public function saveTransaksi()
    {
        // Ambil nilai donasi
        $id_donasi = $this->request->getVar('nama_donasi');
        $jumlah_donasi = $this->request->getVar('jumlah_donasi');

        // Simpan data transaksi baru
        $this->MdlTransaksi->save([
            'id_donasi' => $id_donasi,
            'nama_donatur' => $this->request->getVar('nama_donatur'),
            'no_telp_donatur' => $this->request->getVar('no_telp_donatur'),
            'pesan_donatur' => $this->request->getVar('pesan_donatur'),
            'jumlah_donasi' => $jumlah_donasi,
        ]);

        // Ambil total perolehan donasi saat ini
        $perolehan_donasi = $this->MdlDonasi->find($id_donasi)['perolehan_donasi'];

        // Update perolehan_donasi di data_donasi
        $perolehan_donasi += $jumlah_donasi;
        $this->MdlDonasi->save([
            'id_donasi' => $id_donasi,
            'perolehan_donasi' => $perolehan_donasi,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admtransaksi');
    }

    public function editTransaksi($id_transaksi)
    {
        $transaksi = $this->MdlTransaksi->find($id_transaksi);

        $data = [
            'transaksi' => $transaksi,
            'title' => 'Edit Transaksi',
            'activeMenu' => 'edit_transaksi'
        ];

        return view('edittransaksi', $data);
    }

    public function updateTransaksi($id_transaksi)
    {
        // Ambil data transaksi berdasarkan id_transaksi
        $transaksi = $this->MdlTransaksi->find($id_transaksi);

        // Ambil data donasi berdasarkan id_donasi dari transaksi
        $donasi = $this->MdlDonasi->find($transaksi['id_donasi']);

        // Ambil nilai tambah_donasi dan kurang_donasi dari input form
        $tambah_donasi = $this->request->getVar('tambah_donasi');
        $kurang_donasi = $this->request->getVar('kurang_donasi');

        // Hitung jumlah_donasi yang baru
        $jumlah_donasi_baru = $transaksi['jumlah_donasi'];

        if ($tambah_donasi) {
            $jumlah_donasi_baru += $tambah_donasi;
        }

        if ($kurang_donasi) {
            $jumlah_donasi_baru -= $kurang_donasi;
        }

        // Update data transaksi
        $this->MdlTransaksi->save([
            'id_transaksi' => $id_transaksi,
            'nama_donatur' => $this->request->getVar('nama_donatur'),
            'no_telp_donatur' => $this->request->getVar('no_telp_donatur'),
            'jumlah_donasi' => $jumlah_donasi_baru,
            'pesan_donatur' => $this->request->getVar('pesan_donatur'),
        ]);

        // Update perolehan_donasi di data_donasi
        $perolehan_donasi_baru = $donasi['perolehan_donasi'] + ($jumlah_donasi_baru - $transaksi['jumlah_donasi']);
        $this->MdlDonasi->save([
            'id_donasi' => $donasi['id_donasi'],
            'perolehan_donasi' => $perolehan_donasi_baru,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diupdate.');

        return redirect()->to('/admtransaksi');
    }


    public function deleteTransaksi($id_transaksi)
    {
        // Ambil data transaksi yang akan dihapus
        $transaksi = $this->MdlTransaksi->find($id_transaksi);

        // Ambil data donasi berdasarkan id_donasi dari transaksi
        $donasi = $this->MdlDonasi->find($transaksi['id_donasi']);

        // Hitung jumlah_donasi yang baru setelah pengurangan transaksi
        $jumlah_donasi_baru = $donasi['perolehan_donasi'] - $transaksi['jumlah_donasi'];

        // Update perolehan_donasi di data_donasi
        $this->MdlDonasi->save([
            'id_donasi' => $donasi['id_donasi'],
            'perolehan_donasi' => $jumlah_donasi_baru,
        ]);

        // Hapus data transaksi
        $this->MdlTransaksi->delete($id_transaksi);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admtransaksi');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlDonasi extends Model
{
    protected $table = 'data_donasi';
    protected $primaryKey = 'id_donasi';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama_donasi',
        'target_donasi',
        'perolehan_donasi',
        'masa_donasi',
        'deskripsi_donasi',
        'masa_aktif',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5'
    ];

    public function getDonasi($id_donasi = null)
    {
        if ($id_donasi === null) {
            return $this->findAll(); // Mengembalikan seluruh data donasi
        } else {
            return $this->find($id_donasi); // Mengambil data donasi berdasarkan ID
        }
    }

    public function update($id = null, $data = null): bool
    {
        return parent::update($id, $data);
    }

    public function findDonasiByTransaksiId($id_transaksi)
    {
        $result = $this->where('id_transaksi', $id_transaksi)->findAll();
        return $result ?: [];
    }

    public function getDonasiByDateRange($start_date, $end_date)
    {
        return $this->where('created_at >=', $start_date)
            ->where('created_at <=', $end_date)
            ->findAll();
    }

    public function updatePerolehanDonasi($id_donasi, $jumlah_donasi)
    {
        $this->set('perolehan_donasi', 'perolehan_donasi + ' . $jumlah_donasi, false)
            ->where('id_donasi', $id_donasi)
            ->update();
    }
}

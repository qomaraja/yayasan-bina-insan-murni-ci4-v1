<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlPengeluaran extends Model
{
    protected $table = 'data_pengeluaran';
    protected $primaryKey = 'id_pengeluaran';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_donasi',
        'nama_pengeluaran',
        'perolehan_pengeluaran',
        'img',
        'deskripsi_pengeluaran'
    ];

    public function getPengeluaran($id_pengeluaran = null)
    {
        if ($id_pengeluaran === null) {
            return $this->findAll();
        } else {
            return $this->find($id_pengeluaran);
        }
    }

    public function getPengeluaranByDonasi($id_donasi)
    {
        $result = $this->where('id_donasi', $id_donasi)->findAll();
        return $result ?: [];
    }

    public function getTotalPengeluaran()
    {
        return $this->selectSum('perolehan_pengeluaran')->get()->getRow()->perolehan_pengeluaran;
    }

    public function getPengeluaranWithDonasi()
    {
        return $this->select('data_pengeluaran.*, data_donasi.nama_donasi')
            ->join('data_donasi', 'data_donasi.id_donasi = data_pengeluaran.id_donasi')
            ->findAll();
    }

    public function getPengeluaranByDateRange($start_date, $end_date)
    {
        return $this->select('data_pengeluaran.*, data_donasi.nama_donasi')
            ->join('data_donasi', 'data_donasi.id_donasi = data_pengeluaran.id_donasi')
            ->where('data_pengeluaran.created_at >=', $start_date)
            ->where('data_pengeluaran.created_at <=', $end_date)
            ->findAll();
    }

    public function getDonasi()
    {
        return $this->db->table('data_donasi')->get()->getResultArray();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlTransaksi extends Model
{
    protected $table = 'data_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_donasi',
        'nama_donatur',
        'no_telp_donatur',
        'pesan_donatur',
        'jumlah_donasi'
    ];

    public function getTransaksi($id_transaksi = null)
    {
        if ($id_transaksi === null) {
            return $this->findAll();
        } else {
            return $this->find($id_transaksi);
        }
    }

    public function getTransaksiByDonasi($id_donasi)
    {
        $result = $this->where('id_donasi', $id_donasi)->findAll();
        return $result ?: [];
    }

    public function detailTransaksi($table, $conditions)
    {
        return $this->where($conditions)->get();
    }

    public function getTotalDonasi()
    {
        return $this->selectSum('jumlah_donasi')->get()->getRow()->jumlah_donasi;
    }

    public function getDonasi()
    {
        return $this->db->table('data_donasi')->get()->getResultArray();
    }

    public function getTransaksiWithDonasi()
    {
        return $this->select('data_transaksi.*, data_donasi.nama_donasi')
            ->join('data_donasi', 'data_donasi.id_donasi = data_transaksi.id_donasi')
            ->findAll();
    }

    public function getTransaksiByDateRange($start_date, $end_date)
    {
        return $this->select('data_transaksi.*, data_donasi.nama_donasi')
            ->join('data_donasi', 'data_donasi.id_donasi = data_transaksi.id_donasi')
            ->where('data_transaksi.created_at >=', $start_date)
            ->where('data_transaksi.created_at <=', $end_date)
            ->findAll();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlArtikel extends Model
{
    protected $table = 'data_artikel';
    protected $primaryKey = 'id_artikel';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'judul_artikel',
        'isi_artikel',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5'
    ];

    public function getArtikel($id_artikel = null)
    {
        if ($id_artikel === null) {
            return $this->findAll(); // Mengembalikan seluruh data donasi
        } else {
            return $this->find($id_artikel); // Mengambil data donasi berdasarkan ID
        }
    }
}

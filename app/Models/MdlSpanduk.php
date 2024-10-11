<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlSpanduk extends Model
{
    protected $table = 'data_spanduk';
    protected $primaryKey = 'id_spanduk';
    protected $allowedFields = ['judul_spanduk', 'deskripsi_spanduk', 'img'];
}

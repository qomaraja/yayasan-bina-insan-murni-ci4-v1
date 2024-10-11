<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Midtrans extends BaseConfig
{
    public $serverKey = 'SB-Mid-server-Bhm7uU_S0CwT3rH-4VL9aK49';
    public $clientKey = 'SB-Mid-client-BsxPYr_Cn0bGXdw4';
    public $isProduction = false; // Ubah ke true jika menggunakan environment produksi
    public $isSanitized = true;
    public $is3ds = true;
}

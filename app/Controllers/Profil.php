<?php

namespace App\Controllers;

use App\Models\MdlProgram;

class Profil extends BaseController
{
    protected $MdlProgram;

    public function __construct()
    {
        $this->MdlProgram = new MdlProgram();
    }

    public function index()
    {
        $MdlProgram = $this->MdlProgram->findAll();

        $data = [
            'program' => $MdlProgram,
        ];
        return view('profil', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\KaryawanModel;

class Umum extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'pengguna'
        ];
        return view('pengguna/index', $data);
    }
}

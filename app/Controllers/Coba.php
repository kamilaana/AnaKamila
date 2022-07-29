<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'Ini controller Coba method index';
    }

    public function about($nama = 'Ana', $umur = 17)
    {
        echo "Halo, nama saya $nama, saya berumur $umur tahun.";
    }
}
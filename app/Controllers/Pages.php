<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | WebProgram',
            'tes' => ['satu', 'dua', 'tiga']
        ];
       
        return view('pages/home',$data);

    }

    public function about()
    { 
        $data = [
            'tittle' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Kp.kalapasewu',
                    'kota' => 'Tasikmalaya'
                ]
            ]
        ];
        return view('pages/contact',$data);
    }
}
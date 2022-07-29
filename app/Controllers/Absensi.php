<?php

namespace App\Controllers;

use App\Models\AbsModel;

class Absensi extends BaseController
{
    protected $AbsModel;

    public function __construct()
    {
        $AbsModel = new AbsModel();
    }

    public function index()
    {
        $abs = new AbsModel();
        $absensi = $abs->findAll();

        $data = [
            'tittle' => 'Absensi',
            'absensi' => $absensi
        ];

        return view('absensi/index', $data);
    }

    public function create()
    {
        $data = [
            'tittle' => 'Form Tambah Data Absensi'
        ];

        return view('absensi/create', $data);
    }

    public function save()
    {
        $abs = new AbsModel();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jam_masuk' => $this->request->getVar('jam_masuk'),
            'jam_keluar' => $this->request->getVar('jam_keluar'),
            'keterangan' => $this->request->getVar('keterangan'),
        ];
        $abs->insert($data);

        session()->setFlashdata('pesan', 'Data absensi berhasil disimpan.');

        return redirect()->to(base_url('/absensi/index'));
    }
}

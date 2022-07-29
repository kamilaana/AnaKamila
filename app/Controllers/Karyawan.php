<?php

namespace App\Controllers;
use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    protected $KaryawanModel;

    public function __construct()
    {
        $KaryawanModel = new KaryawanModel();
    }
    
    public function index()
    {

        $karyawan = $this->KaryawanModel->findAll();

        $data = [
            'tittle' => 'Daftar Karyawan',
            'karyawan' =>  $karyawan
        ];

       // $KaryawanModel = new \App\Models\KaryawanModel();
       // $KaryawanModel = new KaryawanModel();
       

        return view('Karyawan/index', $data);
    }

    public function create()
    {
        $data = [
            'tittle' => 'Form Tambah Data Karyawan'
        ];

        return view('karyawan/create', $data);
    }

    public function save()
    {
        $this->KaryawanModel->insert([
            'nama' => $this->request->getVar('nama'),
            'jk' => $this->request->getVar('jk'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'jabatan' => $this->request->getVar('jabatan'),
        ]);

        session()->setFlashdata('pesan','Data berhasil ditambahkan.');

        return redirect()->to(base_url('/Karyawan'));
    }

    public function delete($id)
    {
        $this->KaryawanModel->delete($id);
        session()->setFlashdata('pesan','Data berhasil dihapus.');
        return redirect()->to('/Karyawan');
    }

    public function edit($id)
    {
        
        $data = [
            'tittle' => 'Ubah Data Karyawan',
            'validation' => \Config\Services::validation(),
            'karyawan' => $this->KaryawanModel->getKaryawan($id)
        ];

        return view('karyawan/edit', $data);
    }

    public function update($id)
    {
        $this->KaryawanModel->update($id,[
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'jk' => $this->request->getVar('jk'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'jabatan' => $this->request->getVar('jabatan')
        ]);

        session()->setFlashdata('pesan','Data berhasil diubah.');

        return redirect()->to(base_url('/Karyawan'));
    }
}
<?php

namespace App\Controllers;

use App\Models\KaryawanModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function proseslogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $this->KaryawanModel->where('username', $username)->first();
        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'jabatan' => $user['jabatan']
                ];
                session()->set($data);
                if ($user['jabatan'] == 'admin') {

                    return redirect()->to('/home');
                } else {
                    return redirect()->to('Umum/index');
                }
            } else {
                return redirect()->to('/');
            }
        } else {
            return redirect()->to('/');
        }
    }

    public function prosesregister()
    {
        $KaryawanModel = new KaryawanModel();
        $this->KaryawanModel->insert([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('pasword')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/');
    }
}

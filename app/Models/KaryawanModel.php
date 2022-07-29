<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawan';
    protected $primarykey = 'id';
    protected $allowedFields = ['id','nama','jk','no_hp','alamat','jabatan'];

    public function getKaryawan($id)
    {
       if ($id==false){
        return $this->findAll();
       }
        return $this->where(['id'=>$id])->first();
    }
}
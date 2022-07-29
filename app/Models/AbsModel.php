<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsModel extends Model
{
    protected $table = 'absensi';
    protected $primarykey = 'nik';
    protected $allowedFields = ['nama', 'tanggal', 'jam_masuk', 'jam_keluar', 'keterangan'];

    public function getAbsensi($nik)
    {
        if ($nik == false) {
            return $this->findAll();
        }
        return $this->where(['nik' => $nik])->first();
    }
}

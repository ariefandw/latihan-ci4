<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table            = 'pegawai';
    protected $primaryKey       = 'nip';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['nip', 'nama', 'tgl_lahir', 'alamat'];
    protected $useTimestamps    = true;
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoKeuanganModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'info_keuangan';
    protected $primaryKey       = 'id_keuangan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'id_pinjaman','tipe','nama_badan','jenis','bidang','alamat','kel','rtrw','kec','kab','telp','npwp','siup','lama','omset','laba'
    ];
}

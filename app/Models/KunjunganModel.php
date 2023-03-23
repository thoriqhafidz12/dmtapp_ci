<?php

namespace App\Models;

use CodeIgniter\Model;

class KunjunganModel extends Model
{
    protected $table            = 'kunker';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'id_petugas','tanggal_bertamu','nama_petugas','nama_debitur','alamat','tujuan','hasil','gamlap'
    ];
    protected $returnType = 'App\Entities\Kunjungan';
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PemohonModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pemohon';
    protected $primaryKey       = 'id_pemohon';
    protected $allowedFields    = [
        'id_pinjaman','nama_ktp','jenis1','nama_panggil','ttl1','no_ktp1','nama_ibu','pend_ter1','profesi1','usaha1','status','jumlah_tangg','no_telp1','nama_pas','jenis2','status_pas','ttl2','no_ktp2','pend_ter2','profesi2','usaha2','no_telp2'
    ];
}

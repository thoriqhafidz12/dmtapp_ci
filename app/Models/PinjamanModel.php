<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pinjaman';
    protected $primaryKey       = 'id_pinjaman';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'produk','plafon','jangka','id_petugas','nama_petugas','proses','status'
    ];
}

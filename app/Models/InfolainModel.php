<?php

namespace App\Models;

use CodeIgniter\Model;

class InfolainModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'info_lain';
    protected $primaryKey       = 'id_lain';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'id_pinjaman','tujuan','angsuran','takover','bank','ttd'
    ];
}

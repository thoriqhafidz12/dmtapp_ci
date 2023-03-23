<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoAgunanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'info_agunan';
    protected $primaryKey       = 'id_agunan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'id_pinjaman','informasi'
    ];
}

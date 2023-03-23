<?php

namespace App\Models;

use CodeIgniter\Model;

class KttModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ktt_pemohon';
    protected $primaryKey       = 'id_ktt';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'id_peminjam','jl1','rtrw1','kec1','kab1','telp1','kopos1','hp','status','lama','jl2','rtrw2','kec2','kab2','telp2','kopos2'
    ];

}

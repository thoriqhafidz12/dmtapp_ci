<?php

namespace App\Models;

use CodeIgniter\Model;

class KreditModel extends Model
{
    protected $table            = 'kredit';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'produk','plafon','jangka','id_petugas','stts_pnd','tgl_daftar','tgl_survey','tgl_komite','tgl_realisasi','nama_petugas','proses','status','nama_pem','jenis_pem','nama_pang','ttl1','no_ktp','nama_ibu','pend_ter','profesi','usaha','status_kaw','jumlah_tang','no_telp','nama_pas','jenis_pas','status_pas','ttl_pas','no_ktp2','masa_ber2','pend_ter2','profesi2','usaha2','no_telp2','jl','rtrw','kec','kab','no_telp3','kopos','hp','status_ting','lama','jl2','rtrw2','kec2','kab2','no_telp4','kopos2','tipe','nama_badan','jenis_keg','bidang','alamat','kel','rtrw3','kec3','kab3','no_telp5','npwp','siup','lama2','omset','laba','informasi','tujuan','angsuran','takover','bank','ttd_daftar','ttd_petugas','ttd_slick'
    ];
    protected $returnType = 'App\Entities\Kredit';
    
}

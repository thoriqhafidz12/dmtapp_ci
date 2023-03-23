<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\KunjunganModel;
use CodeIgniter\Exception\PageNotFoundException;

class Kredit extends BaseController
{
    protected $db, $builder;

    public function __construct()
	{ 
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('pinjaman');
	}
    public function index()
	{
        $data['title'] = 'Hasil Pendaftaran Kredit';

        $this->builder->select('pinjaman.id_pinjaman as pinjamanid,nama_petugas,produk, nama_ktp, jl1, plafon,tipe,nama_badan,angsuran,informasi');
        $this->builder->join('info_agunan', 'info_agunan.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->join('info_lain', 'info_lain.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->join('info_keuangan', 'info_keuangan.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->join('pemohon', 'pemohon.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->join('ktt_pemohon', 'ktt_pemohon.id_pinjaman = pinjaman.id_pinjaman');
        $query = $this->builder->get();
        

        $data['pinjamans'] = $query->getResult();

        return view('kredit/index' , $data);
    }
   
    

    public function detail($id)
	{
		$data['title'] = 'Kredit Detail';

        $this->builder->select('pinjaman.id_pinjaman as pinjamanid,nama_petugas,produk, nama_ktp, jl1, plafon,tipe,nama_badan,angsuran,informasi');
        $this->builder->join('info_agunan', 'info_agunan.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->join('info_lain', 'info_lain.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->join('info_keuangan', 'info_keuangan.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->join('pemohon', 'pemohon.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->join('ktt_pemohon', 'ktt_pemohon.id_pinjaman = pinjaman.id_pinjaman');
        $this->builder->where('pinjaman.id_pinjaman',$id);
        $query = $this->builder->get();

        $data['pinjaman'] = $query->getRow();

        

        return view('kredit/detail' , $data);
    }

    //--------------------------------------------------------------------------
    
    public function create()
    {
        $data['title'] = 'Masukkan Kunjungan';
        // lakukan validasi
        // $validation =  \Config\Services::validation();
        // $validation->setRules([
        //     'nama_debitur' => 'required',
        //     'gamlap' => [
        //         'uploaded[gamlap]',
        //         'mime_in[gamlap,image/jpeg,image/png,image/gif]',
        //         'max_size[gamlap,255]',
        //     ],
        // ]);
        // $isDataValid = $validation->withRequest($this->request)->run();

        // // jika data valid, simpan ke database
        // if($isDataValid){
        //     $kunjungans = new KunjunganModel();
        //     // $file = $this->request->getFile('gamlap');
        //     // $newName = $file->getRandomName();
        //     // $file->move(WRITEPATH.'uploads', $newName);
        //     $kunjungans->insert([
        //         "id_petugas" => $this->request->getPost('id_petugas'),
        //         "tanggal_bertamu" => $this->request->getPost('tanggal_bertamu'),
        //         "nama_petugas" => $this->request->getPost('nama_petugas'),
        //         "nama_debitur" => $this->request->getPost('nama_debitur'),
        //         "alamat" => $this->request->getPost('alamat'),
        //         "tujuan" => $this->request->getPost('tujuan'),
        //         "hasil" => $this->request->getPost('hasil'),
        //         "gamlap" => $this->request->getFile('gamlap')
                
        //     ]);
            
        //     return redirect('user');
        // }
		
        // tampilkan form create
        return view('kredit/new',$data);
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        $data['title'] = 'Edit Kunjungan';
        
        // ambil artikel yang akan diedit
        $kunjungan = new KunjunganModel();
        $data['kunjungan'] = $kunjungan->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama_petugas' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $kunjungan->update($id, [
                "tanggal_bertamu" => $this->request->getPost('tanggal_bertamu'),
                "nama_petugas" => $this->request->getPost('nama_petugas'),
                "nama_debitur" => $this->request->getPost('nama_debitur'),
                "alamat" => $this->request->getPost('alamat'),
                "tujuan" => $this->request->getPost('tujuan'),
                "hasil" => $this->request->getPost('hasil'),
                "gamlap" => $this->request->getPost('gamlap')
            ]);
            return redirect('kunjungan/index');
        }

        // tampilkan form edit
        return view('kunjungan/edit', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $kunjungans = new KunjunganModel();
        $kunjungans->delete($id);
        return redirect('kunjungan');
    }

}

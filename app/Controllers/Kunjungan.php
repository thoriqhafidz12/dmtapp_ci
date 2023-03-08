<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KunjunganModel;
use CodeIgniter\Exception\PageNotFoundException;

class Kunjungan extends BaseController
{
    protected $db, $builder;

    public function __construct()
	{ 
		$this->kunjungan = new KunjunganModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('kunker');

	}
    public function index()
	{
        // $kunjungan = new KunjunganModel();
        // $data['kunker'] = $kunjungan->findAll();
		// echo view('', $data);
        $data['title'] = 'Kunjungan';
        $data['kunker'] = $this->kunjungan->orderBy('id', 'DESC')->findAll();

        return view('kunjungan/index' , $data);
    }
   
    

    public function preview($id)
	{
		$kunjungans = new KunjunganModel();
		$data['kunjungans'] = $kunjungans->where('id', $id)->first();
		
		if(!$data['kunjungans']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('kunjungan_detail', $data);
    }

    //--------------------------------------------------------------------------
    
    public function create()
    {
        $data['title'] = 'Masukkan Kunjungan';
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama_debitur' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $kunjungans = new KunjunganModel();
            $kunjungans->insert([
                "tanggal_bertamu" => $this->request->getPost('tanggal_bertamu'),
                "nama_petugas" => $this->request->getPost('nama_petugas'),
                "nama_debitur" => $this->request->getPost('nama_debitur'),
                "alamat" => $this->request->getPost('alamat'),
                "tujuan" => $this->request->getPost('tujuan'),
                "hasil" => $this->request->getPost('hasil'),
                "gamlap" => $this->request->getPost('gamlap')
            ]);
            return redirect('user');
        }
		
        // tampilkan form create
        return view('kunjungan/new',$data);
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

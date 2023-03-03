<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KunjunganModel;
use CodeIgniter\Exception\PageNotFoundException;

class Kunjungan extends BaseController
{
    public function __construct()
	{ 
        helper('form');
		$this->validation = \Config\Services::validation();
		$this->kunjungan = new KunjunganModel();

	}
    public function index()
	{
        // $kunjungan = new KunjunganModel();
        // $data['kunker'] = $kunjungan->findAll();
		// echo view('', $data);
        $data['title'] = 'Kunjungan';
        $kunjungan = new KunjunganModel();
        $data['kunker'] = $kunjungan->orderBy('id', 'DESC')->findAll();

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
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama_petugas' => 'required']);
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
            return redirect('kunjungan');
        }
		
        // tampilkan form create
        echo view('kunjungan/index');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $kunjungans = new KunjunganModel();
        $data['kunjungans'] = $kunjungans->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama_petugas' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $kunjungans->update($id, [
                "tanggal_bertamu" => $this->request->getPost('tanggal_bertamu'),
                "nama_petugas" => $this->request->getPost('nama_petugas'),
                "nama_debitur" => $this->request->getPost('nama_debitur'),
                "alamat" => $this->request->getPost('alamat'),
                "tujuan" => $this->request->getPost('tujuan'),
                "hasil" => $this->request->getPost('hasil'),
                "gamlap" => $this->request->getPost('gamlap')
            ]);
            return redirect('kunjungan/edit');
        }

        // tampilkan form edit
        echo view('kunjungan/edit', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $kunjungans = new KunjunganModel();
        $kunjungans->delete($id);
        return redirect('kunjungan');
    }

}

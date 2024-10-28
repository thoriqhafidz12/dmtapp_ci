<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KunjunganModel;
use CodeIgniter\Files\File;
use CodeIgniter\Images\Image;
use CodeIgniter\Exception\PageNotFoundException;

class Kunjungan extends BaseController
{

    public function __construct()
	{ 
		$this->kunjungan = new KunjunganModel();

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
   
    

    // public function preview($id)
	// {
	// 	$kunjungans = new KunjunganModel();
	// 	$data['kunjungans'] = $kunjungans->where('id', $id)->first();
		
	// 	if(!$data['kunjungans']){
	// 		throw PageNotFoundException::forPageNotFound();
	// 	}
	// 	echo view('kunjungan_detail', $data);
    // }

    //--------------------------------------------------------------------------
    
    public function create()
    {
        $data['title'] = 'Masukkan Kunjungan';
        return view('kunjungan/new',$data);
    }
    //-------simpan kunjungan-----
    public function save()
	{
        $data['title'] = 'Masukkan Kunjungan';

        if (!$this->validate([
            'gamlap' => [
                'rules' => 'uploaded[gamlap]|mime_in[gamlap,image/jpg,image/jpeg,image/gif,image/png,image/heic,image/heif]|max_size[gamlap,4048]',
                'errors' => [
                    'uploaded' => 'Harus Ada Foto yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran Foto Maksimal 4 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        
        $datagamlap = $this->request->getFile('gamlap');
        
        // Mendapatkan tipe MIME
        $mimeType = $datagamlap->getMimeType();
        
        // Membaca konten file gambar
        $imageData = file_get_contents($datagamlap->getTempName());
        
        // Mengonversi ke Base64
        $base64Image = base64_encode($imageData);
        
        // Membuat string data URI
        $dataUri = "data:{$mimeType};base64,{$base64Image}";
        
        // Menyimpan data ke database
        $data = $this->kunjungan->insert([
            "id_petugas" => $this->request->getPost('id_petugas'),
            "tanggal_bertamu" => $this->request->getPost('tanggal_bertamu'),
            "nama_petugas" => $this->request->getPost('nama_petugas'),
            "nama_debitur" => $this->request->getPost('nama_debitur'),
            "alamat" => $this->request->getPost('alamat'),
            "tujuan" => $this->request->getPost('tujuan'),
            "hasil" => $this->request->getPost('hasil'),
            'gamlap' => $dataUri // Simpan string data URI ke dalam kolom 'gamlap'
        ]);
        // var_dump($dataUri);
        session()->setFlashdata('success', 'Terimakasih Telah Mengisi daftar kunjungan');
        return redirect()->to(base_url('kunjungan/new'));
        
        
	}

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        $data['title'] = 'Edit Kunjungan';
        
        // ambil artikel yang akan diedit
        $data['kunker'] = $this->kunjungan->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_debitur' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $this->kunjungan->update($id, [
                
                "nama_debitur" => $this->request->getPost('nama_debitur'),
                "alamat" => $this->request->getPost('alamat'),
                "tujuan" => $this->request->getPost('tujuan'),
                "hasil" => $this->request->getPost('hasil'),
                "gamlap" => $this->request->getPost('gamlap')
            ]);
            return redirect('kunjungan');
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

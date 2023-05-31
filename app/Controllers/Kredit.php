<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KreditModel;
use App\Libraries\PDF;
use CodeIgniter\Exception\PageNotFoundException;

class Kredit extends BaseController
{


    public function __construct()
	{ 
        $this->kredit = new KreditModel();
	}

    public function index()
	{
        $data['title'] = 'Hasil Pendaftaran Kredit';
        $data['kredits'] = $this->kredit->orderBy('id', 'DESC')->findAll();
        $data['hasil']='Data Pendaftaran Kredit';
        return view('kredit/index' , $data);
    }
    public function registrasi()
	{
        $data['title'] = 'Hasil Pendaftaran Kredit';
        $data['hasil']='Data Registrasi';
        $data['kredits'] = $this->kredit->where('stts_pnd','Pemberkasan dan Registrasi')->orderBy('id', 'ASC')->findAll();
        return view('kredit/index' , $data);
    }
    public function survey()
	{
        $data['title'] = 'Hasil Pendaftaran Kredit';
        // $data['kredits'] = $this->kredit->orderBy('id', 'DESC')->findAll();
        $data['hasil']="Data Proses Survey";
        $data['kredits'] = $this->kredit->where('stts_pnd','Survey')->findAll();
        return view('kredit/index' , $data);
    }
    public function analisa()
	{
        $data['title'] = 'Hasil Pendaftaran Kredit';
        // $data['kredits'] = $this->kredit->orderBy('id', 'DESC')->findAll();
        $data['hasil']="Data Proses Analisa";
        $data['kredits'] = $this->kredit->where('stts_pnd','Analisa')->findAll();
        return view('kredit/index' , $data);
    }
    public function komite()
	{
        $data['title'] = 'Hasil Pendaftaran Kredit';
        // $data['kredits'] = $this->kredit->orderBy('id', 'DESC')->findAll();
        $data['hasil']="Data Proses Komite";
        $data['kredits'] = $this->kredit->where('stts_pnd','Komite')->findAll();
        return view('kredit/index' , $data);
    }
    public function realisasi()
	{
        $data['title'] = 'Hasil Pendaftaran Kredit';
        // $data['kredits'] = $this->kredit->orderBy('id', 'DESC')->findAll();
        $data['hasil']="Hasil Realisasi";
        $data['kredits'] = $this->kredit->where('stts_pnd','Realisasi')->findAll();
        return view('kredit/index' , $data);
    }

    public function detail($id)
	{
		$data['title'] = 'Kredit Detail';
		$data['kredit'] = $this->kredit->where('id', $id)->first();
		
		if(!$data['kredit']){
			throw PageNotFoundException::forPageNotFound();
		}

        return view('kredit/detail' , $data);
    }

    //--------------------------------------------------------------------------
    public function viewCreate()
    {
        $data['title'] = 'Pendaftaran Baru';
        return view('kredit/new',$data);
    }
    public function create()
    {
        $data['title'] = 'Memproses Pendaftaran';
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'produk' => 'required',
            'jangka' => 'required',
            'ttd_daftar' => [
				'rules' => 'uploaded[ttd_daftar]|mime_in[ttd_daftar,image/jpg,image/jpeg,image/gif,image/png]|max_size[ttd_daftar,4048]',
				'errors' => [
					'uploaded' => 'Harus Ada Foto yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran Foto Maksimal 4 MB'
				]
            ],
            'ttd_slick' => [
				'rules' => 'uploaded[ttd_slick]|mime_in[ttd_slick,image/jpg,image/jpeg,image/gif,image/png]|max_size[ttd_slick,4048]',
				'errors' => [
					'uploaded' => 'Harus Ada Foto yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran Foto Maksimal 4 MB'
				]
            ],
            'ttd_petugas' => [
				'rules' => 'uploaded[ttd_petugas]|mime_in[ttd_petugas,image/jpg,image/jpeg,image/gif,image/png]|max_size[ttd_petugas,4048]',
				'errors' => [
					'uploaded' => 'Harus Ada Foto yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran Foto Maksimal 4 MB'
				]
			]
        ]);
        
        $ttd_petugas = $this->request->getFile('ttd_petugas');
        $ttd_slick = $this->request->getFile('ttd_slick');
        $ttd_daftar = $this->request->getFile('ttd_daftar');

        $daftar=$ttd_daftar->getRandomName();
        $petugas=$ttd_petugas->getRandomName();
        $slick=$ttd_slick->getRandomName();

        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $this->kredit->insert([
                "produk" => $this->request->getPost('produk'),
                "id_petugas" => $this->request->getPost('id_petugas'),
                "nama_petugas" => $this->request->getPost('nama_petugas'),
                "tgl_daftar" => $this->request->getPost('tgl_daftar'),
                "jangka" => $this->request->getPost('jangka'),
                "proses" => $this->request->getPost('proses'),
                "stts_pnd" => $this->request->getPost('stts_pnd'),
                "plafon" => $this->request->getPost('plafon'),
                "status" => $this->request->getPost('status'),
                "nama_pem" => $this->request->getPost('nama_pem'),
                "jenis_pem" => $this->request->getPost('jenis_pem'),
                "nama_pang" => $this->request->getPost('nama_pang'),
                "ttl1" => $this->request->getPost('ttl1'),
                "no_ktp" => $this->request->getPost('no_ktp'),
                "nama_ibu" => $this->request->getPost('nama_ibu'),
                "pend_ter" => $this->request->getPost('pend_ter'),
                "profesi" => $this->request->getPost('profesi'),
                "usaha" => $this->request->getPost('usaha'),
                "status_kaw" => $this->request->getPost('status_kaw'),
                "jumlah_tang" => $this->request->getPost('jumlah_tang'),
                "no_telp" => $this->request->getPost('no_telp'),
                "nama_pas" => $this->request->getPost('nama_pas'),
                "jenis_pas" => $this->request->getPost('jenis_pas'),
                "status_pas" => $this->request->getPost('status_pas'),
                "ttl_pas" => $this->request->getPost('ttl_pas'),
                "no_ktp2" => $this->request->getPost('no_ktp2'),
                "pend_ter2" => $this->request->getPost('pend_ter2'),
                "profesi2" => $this->request->getPost('profesi2'),
                "usaha2" => $this->request->getPost('usaha2'),
                "no_telp2" => $this->request->getPost('no_telp2'),
                "jl" => $this->request->getPost('jl'),
                "rtrw" => $this->request->getPost('rtrw'),
                "kec" => $this->request->getPost('kec'),
                "kab" => $this->request->getPost('kab'),
                "no_telp3" => $this->request->getPost('no_telp3'),
                "kopos" => $this->request->getPost('kopos'),
                "hp" => $this->request->getPost('hp'),
                "status_ting" => $this->request->getPost('status_ting'),
                "lama" => $this->request->getPost('lama'),
                "jl2" => $this->request->getPost('jl2'),
                "rtrw2" => $this->request->getPost('rtrw2'),
                "kec2" => $this->request->getPost('kec2'),
                "kab2" => $this->request->getPost('kab2'),
                "no_telp4" => $this->request->getPost('no_telp4'),
                "kopos2" => $this->request->getPost('kopos2'),
                "tipe" => $this->request->getPost('tipe'),
                "nama_badan" => $this->request->getPost('nama_badan'),
                "jenis_keg" => $this->request->getPost('jenis_keg'),
                "bidang" => $this->request->getPost('bidang'),
                "alamat" => $this->request->getPost('alamat'),
                "kel" => $this->request->getPost('kel'),
                "rtrw3" => $this->request->getPost('rtrw3'),
                "kec3" => $this->request->getPost('kec3'),
                "kab3" => $this->request->getPost('kab3'),
                "no_telp5" => $this->request->getPost('no_telp5'),
                "npwp" => $this->request->getPost('npwp'),
                "siup" => $this->request->getPost('siup'),
                "lama2" => $this->request->getPost('lama2'),
                "omset" => $this->request->getPost('omset'),
                "laba" => $this->request->getPost('laba'),
                "informasi" => $this->request->getPost('informasi'),
                "tujuan" => $this->request->getPost('tujuan'),
                "angsuran" => $this->request->getPost('angsuran'),
                "takover" => $this->request->getPost('takover'),
                "bank" => $this->request->getPost('bank'),
                "ttd_daftar" => $daftar,
                "ttd_petugas" => $petugas,
                "ttd_slick" => $slick 
            ]);
            $image = \Config\Services::image()
                ->withFile($ttd_daftar)
                ->convert(IMAGETYPE_PNG)
                ->resize(200, 100, true, 'width')
                ->save(FCPATH .'/img/ttd/daftar/'. $daftar,100);
            $image1 = \Config\Services::image()
                ->withFile($ttd_petugas)
                ->resize(200, 100, true, 'width')
                ->convert(IMAGETYPE_PNG)
                ->save(FCPATH .'/img/ttd/petugas/'. $petugas,100);
            $image2 = \Config\Services::image()
                ->withFile($ttd_slick)
                ->convert(IMAGETYPE_PNG)
                ->resize(200, 100, true, 'width')
                ->save(FCPATH .'/img/ttd/slick/'. $slick,100);
                // Redirect View
            return redirect('kredit/pendaftaran');
        }

    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        $data['title'] = 'Edit Pengajuan Kredit';
        
        // ambil artikel yang akan diedit
        $data['kredit'] = $this->kredit->where('id', $id)->first();
        
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_pem' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $this->kredit->update($id,[
                "produk" => $this->request->getPost('produk'),
                // "id_petugas" => $this->request->getPost('id_petugas'),
                // "nama_petugas" => $this->request->getPost('nama_petugas'),
                // "tgl_daftar" => $this->request->getPost('tgl_daftar'),
                "jangka" => $this->request->getPost('jangka'),
                "stts_pnd" => $this->request->getPost('stts_pnd'),
                "proses" => $this->request->getPost('proses'),
                "plafon" => $this->request->getPost('plafon'),
                "status" => $this->request->getPost('status'),
                "nama_pem" => $this->request->getPost('nama_pem'),
                "jenis_pem" => $this->request->getPost('jenis_pem'),
                "nama_pang" => $this->request->getPost('nama_pang'),
                "ttl1" => $this->request->getPost('ttl1'),
                "no_ktp" => $this->request->getPost('no_ktp'),
                "nama_ibu" => $this->request->getPost('nama_ibu'),
                "pend_ter" => $this->request->getPost('pend_ter'),
                "profesi" => $this->request->getPost('profesi'),
                "usaha" => $this->request->getPost('usaha'),
                "status_kaw" => $this->request->getPost('status_kaw'),
                "jumlah_tang" => $this->request->getPost('jumlah_tang'),
                "no_telp" => $this->request->getPost('no_telp'),
                "nama_pas" => $this->request->getPost('nama_pas'),
                "jenis_pas" => $this->request->getPost('jenis_pas'),
                "status_pas" => $this->request->getPost('status_pas'),
                "ttl_pas" => $this->request->getPost('ttl_pas'),
                "no_ktp2" => $this->request->getPost('no_ktp2'),
                "pend_ter2" => $this->request->getPost('pend_ter2'),
                "profesi2" => $this->request->getPost('profesi2'),
                "usaha2" => $this->request->getPost('usaha2'),
                "no_telp2" => $this->request->getPost('no_telp2'),
                "jl" => $this->request->getPost('jl'),
                "rtrw" => $this->request->getPost('rtrw'),
                "kec" => $this->request->getPost('kec'),
                "kab" => $this->request->getPost('kab'),
                "no_telp3" => $this->request->getPost('no_telp3'),
                "kopos" => $this->request->getPost('kopos'),
                "hp" => $this->request->getPost('hp'),
                "status_ting" => $this->request->getPost('status_ting'),
                "lama" => $this->request->getPost('lama'),
                "jl2" => $this->request->getPost('jl2'),
                "rtrw2" => $this->request->getPost('rtrw2'),
                "kec2" => $this->request->getPost('kec2'),
                "kab2" => $this->request->getPost('kab2'),
                "no_telp4" => $this->request->getPost('no_telp4'),
                "kopos2" => $this->request->getPost('kopos2'),
                "tipe" => $this->request->getPost('tipe'),
                "nama_badan" => $this->request->getPost('nama_badan'),
                "jenis_keg" => $this->request->getPost('jenis_keg'),
                "bidang" => $this->request->getPost('bidang'),
                "alamat" => $this->request->getPost('alamat'),
                "kel" => $this->request->getPost('kel'),
                "rtrw3" => $this->request->getPost('rtrw3'),
                "kec3" => $this->request->getPost('kec3'),
                "kab3" => $this->request->getPost('kab3'),
                "no_telp5" => $this->request->getPost('no_telp5'),
                "npwp" => $this->request->getPost('npwp'),
                "siup" => $this->request->getPost('siup'),
                "lama2" => $this->request->getPost('lama2'),
                "omset" => $this->request->getPost('omset'),
                "laba" => $this->request->getPost('laba'),
                "informasi" => $this->request->getPost('informasi'),
                "tujuan" => $this->request->getPost('tujuan'),
                "angsuran" => $this->request->getPost('angsuran'),
                "takover" => $this->request->getPost('takover'),
                "bank" => $this->request->getPost('bank'),
                "ttd_daftar" => $this->request->getPost('ttd_daftar'),
                "ttd_petugas" => $this->request->getPost('ttd_petugas'),
                "ttd_slick" => $this->request->getPost('ttd_slick')
            ]);
            return redirect('kredit');
        }

        // tampilkan form edit
        return view('kredit/edit', $data);
    }

    public function nxtSurvey($id)
    {
        $data['title'] = 'Survey Pengajuan Kredit';
        
        // ambil artikel yang akan diedit
        $data['kredit'] = $this->kredit->where('id', $id)->first();
        $data['hasil']="Data Proses Survey";
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_pem' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $this->kredit->update($id,[
                "produk" => $this->request->getPost('produk'),
                // "id_petugas" => $this->request->getPost('id_petugas'),
                // "nama_petugas" => $this->request->getPost('nama_petugas'),
                // "tgl_daftar" => $this->request->getPost('tgl_daftar'),
                "tgl_survey" => $this->request->getPost('tgl_survey'),
                "jangka" => $this->request->getPost('jangka'),
                "stts_pnd" => 'Survey',
                "proses" => $this->request->getPost('proses'),
                "plafon" => $this->request->getPost('plafon'),
                "status" => $this->request->getPost('status'),
                "nama_pem" => $this->request->getPost('nama_pem'),
                "jenis_pem" => $this->request->getPost('jenis_pem'),
                "nama_pang" => $this->request->getPost('nama_pang'),
                "ttl1" => $this->request->getPost('ttl1'),
                "no_ktp" => $this->request->getPost('no_ktp'),
                "nama_ibu" => $this->request->getPost('nama_ibu'),
                "pend_ter" => $this->request->getPost('pend_ter'),
                "profesi" => $this->request->getPost('profesi'),
                "usaha" => $this->request->getPost('usaha'),
                "status_kaw" => $this->request->getPost('status_kaw'),
                "jumlah_tang" => $this->request->getPost('jumlah_tang'),
                "no_telp" => $this->request->getPost('no_telp'),
                "nama_pas" => $this->request->getPost('nama_pas'),
                "jenis_pas" => $this->request->getPost('jenis_pas'),
                "status_pas" => $this->request->getPost('status_pas'),
                "ttl_pas" => $this->request->getPost('ttl_pas'),
                "no_ktp2" => $this->request->getPost('no_ktp2'),
                "pend_ter2" => $this->request->getPost('pend_ter2'),
                "profesi2" => $this->request->getPost('profesi2'),
                "usaha2" => $this->request->getPost('usaha2'),
                "no_telp2" => $this->request->getPost('no_telp2'),
                "jl" => $this->request->getPost('jl'),
                "rtrw" => $this->request->getPost('rtrw'),
                "kec" => $this->request->getPost('kec'),
                "kab" => $this->request->getPost('kab'),
                "no_telp3" => $this->request->getPost('no_telp3'),
                "kopos" => $this->request->getPost('kopos'),
                "hp" => $this->request->getPost('hp'),
                "status_ting" => $this->request->getPost('status_ting'),
                "lama" => $this->request->getPost('lama'),
                "jl2" => $this->request->getPost('jl2'),
                "rtrw2" => $this->request->getPost('rtrw2'),
                "kec2" => $this->request->getPost('kec2'),
                "kab2" => $this->request->getPost('kab2'),
                "no_telp4" => $this->request->getPost('no_telp4'),
                "kopos2" => $this->request->getPost('kopos2'),
                "tipe" => $this->request->getPost('tipe'),
                "nama_badan" => $this->request->getPost('nama_badan'),
                "jenis_keg" => $this->request->getPost('jenis_keg'),
                "bidang" => $this->request->getPost('bidang'),
                "alamat" => $this->request->getPost('alamat'),
                "kel" => $this->request->getPost('kel'),
                "rtrw3" => $this->request->getPost('rtrw3'),
                "kec3" => $this->request->getPost('kec3'),
                "kab3" => $this->request->getPost('kab3'),
                "no_telp5" => $this->request->getPost('no_telp5'),
                "npwp" => $this->request->getPost('npwp'),
                "siup" => $this->request->getPost('siup'),
                "lama2" => $this->request->getPost('lama2'),
                "omset" => $this->request->getPost('omset'),
                "laba" => $this->request->getPost('laba'),
                "informasi" => $this->request->getPost('informasi'),
                "tujuan" => $this->request->getPost('tujuan'),
                "angsuran" => $this->request->getPost('angsuran'),
                "takover" => $this->request->getPost('takover'),
                "bank" => $this->request->getPost('bank'),
                "ttd_daftar" => $this->request->getPost('ttd_daftar'),
                "ttd_petugas" => $this->request->getPost('ttd_petugas'),
                "ttd_slick" => $this->request->getPost('ttd_slick')
            ]);
            return redirect('kredit');
        }

        // // tampilkan form edit
        return view('kredit/edit', $data);
    }
    public function nxtAnalisa($id)
    {
        $data['title'] = 'Analisa Pengajuan Kredit';
        
        // ambil artikel yang akan diedit
        $data['kredit'] = $this->kredit->where('id', $id)->first();
        $data['hasil']="Data Proses Analisa";
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_pem' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $this->kredit->update($id,[
                "produk" => $this->request->getPost('produk'),
                // "id_petugas" => $this->request->getPost('id_petugas'),
                // "nama_petugas" => $this->request->getPost('nama_petugas'),
                // "tgl_daftar" => $this->request->getPost('tgl_daftar'),
                "tgl_survey" => $this->request->getPost('tgl_survey'),
                "jangka" => $this->request->getPost('jangka'),
                "stts_pnd" => 'Analisa',
                "proses" => $this->request->getPost('proses'),
                "plafon" => $this->request->getPost('plafon'),
                "status" => $this->request->getPost('status'),
                "nama_pem" => $this->request->getPost('nama_pem'),
                "jenis_pem" => $this->request->getPost('jenis_pem'),
                "nama_pang" => $this->request->getPost('nama_pang'),
                "ttl1" => $this->request->getPost('ttl1'),
                "no_ktp" => $this->request->getPost('no_ktp'),
                "nama_ibu" => $this->request->getPost('nama_ibu'),
                "pend_ter" => $this->request->getPost('pend_ter'),
                "profesi" => $this->request->getPost('profesi'),
                "usaha" => $this->request->getPost('usaha'),
                "status_kaw" => $this->request->getPost('status_kaw'),
                "jumlah_tang" => $this->request->getPost('jumlah_tang'),
                "no_telp" => $this->request->getPost('no_telp'),
                "nama_pas" => $this->request->getPost('nama_pas'),
                "jenis_pas" => $this->request->getPost('jenis_pas'),
                "status_pas" => $this->request->getPost('status_pas'),
                "ttl_pas" => $this->request->getPost('ttl_pas'),
                "no_ktp2" => $this->request->getPost('no_ktp2'),
                "pend_ter2" => $this->request->getPost('pend_ter2'),
                "profesi2" => $this->request->getPost('profesi2'),
                "usaha2" => $this->request->getPost('usaha2'),
                "no_telp2" => $this->request->getPost('no_telp2'),
                "jl" => $this->request->getPost('jl'),
                "rtrw" => $this->request->getPost('rtrw'),
                "kec" => $this->request->getPost('kec'),
                "kab" => $this->request->getPost('kab'),
                "no_telp3" => $this->request->getPost('no_telp3'),
                "kopos" => $this->request->getPost('kopos'),
                "hp" => $this->request->getPost('hp'),
                "status_ting" => $this->request->getPost('status_ting'),
                "lama" => $this->request->getPost('lama'),
                "jl2" => $this->request->getPost('jl2'),
                "rtrw2" => $this->request->getPost('rtrw2'),
                "kec2" => $this->request->getPost('kec2'),
                "kab2" => $this->request->getPost('kab2'),
                "no_telp4" => $this->request->getPost('no_telp4'),
                "kopos2" => $this->request->getPost('kopos2'),
                "tipe" => $this->request->getPost('tipe'),
                "nama_badan" => $this->request->getPost('nama_badan'),
                "jenis_keg" => $this->request->getPost('jenis_keg'),
                "bidang" => $this->request->getPost('bidang'),
                "alamat" => $this->request->getPost('alamat'),
                "kel" => $this->request->getPost('kel'),
                "rtrw3" => $this->request->getPost('rtrw3'),
                "kec3" => $this->request->getPost('kec3'),
                "kab3" => $this->request->getPost('kab3'),
                "no_telp5" => $this->request->getPost('no_telp5'),
                "npwp" => $this->request->getPost('npwp'),
                "siup" => $this->request->getPost('siup'),
                "lama2" => $this->request->getPost('lama2'),
                "omset" => $this->request->getPost('omset'),
                "laba" => $this->request->getPost('laba'),
                "informasi" => $this->request->getPost('informasi'),
                "tujuan" => $this->request->getPost('tujuan'),
                "angsuran" => $this->request->getPost('angsuran'),
                "takover" => $this->request->getPost('takover'),
                "bank" => $this->request->getPost('bank'),
                "ttd_daftar" => $this->request->getPost('ttd_daftar'),
                "ttd_petugas" => $this->request->getPost('ttd_petugas'),
                "ttd_slick" => $this->request->getPost('ttd_slick')
            ]);
            return redirect('kredit');
        }

        // // tampilkan form edit
        return view('kredit/edit', $data);
    }
    public function nxtKomite($id)
    {
        $data['title'] = 'Komite Pengajuan Kredit';
        
        // ambil artikel yang akan diedit
        $data['kredit'] = $this->kredit->where('id', $id)->first();
        $data['hasil']="Data Proses Komite";
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_pem' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $this->kredit->update($id,[
                "produk" => $this->request->getPost('produk'),
                // "id_petugas" => $this->request->getPost('id_petugas'),
                // "nama_petugas" => $this->request->getPost('nama_petugas'),
                // "tgl_daftar" => $this->request->getPost('tgl_daftar'),
                "tgl_survey" => $this->request->getPost('tgl_survey'),
                "tgl_komite" => $this->request->getPost('tgl_komite'),
                "jangka" => $this->request->getPost('jangka'),
                "stts_pnd" => 'Komite',
                "proses" => $this->request->getPost('proses'),
                "plafon" => $this->request->getPost('plafon'),
                "status" => $this->request->getPost('status'),
                "nama_pem" => $this->request->getPost('nama_pem'),
                "jenis_pem" => $this->request->getPost('jenis_pem'),
                "nama_pang" => $this->request->getPost('nama_pang'),
                "ttl1" => $this->request->getPost('ttl1'),
                "no_ktp" => $this->request->getPost('no_ktp'),
                "nama_ibu" => $this->request->getPost('nama_ibu'),
                "pend_ter" => $this->request->getPost('pend_ter'),
                "profesi" => $this->request->getPost('profesi'),
                "usaha" => $this->request->getPost('usaha'),
                "status_kaw" => $this->request->getPost('status_kaw'),
                "jumlah_tang" => $this->request->getPost('jumlah_tang'),
                "no_telp" => $this->request->getPost('no_telp'),
                "nama_pas" => $this->request->getPost('nama_pas'),
                "jenis_pas" => $this->request->getPost('jenis_pas'),
                "status_pas" => $this->request->getPost('status_pas'),
                "ttl_pas" => $this->request->getPost('ttl_pas'),
                "no_ktp2" => $this->request->getPost('no_ktp2'),
                "pend_ter2" => $this->request->getPost('pend_ter2'),
                "profesi2" => $this->request->getPost('profesi2'),
                "usaha2" => $this->request->getPost('usaha2'),
                "no_telp2" => $this->request->getPost('no_telp2'),
                "jl" => $this->request->getPost('jl'),
                "rtrw" => $this->request->getPost('rtrw'),
                "kec" => $this->request->getPost('kec'),
                "kab" => $this->request->getPost('kab'),
                "no_telp3" => $this->request->getPost('no_telp3'),
                "kopos" => $this->request->getPost('kopos'),
                "hp" => $this->request->getPost('hp'),
                "status_ting" => $this->request->getPost('status_ting'),
                "lama" => $this->request->getPost('lama'),
                "jl2" => $this->request->getPost('jl2'),
                "rtrw2" => $this->request->getPost('rtrw2'),
                "kec2" => $this->request->getPost('kec2'),
                "kab2" => $this->request->getPost('kab2'),
                "no_telp4" => $this->request->getPost('no_telp4'),
                "kopos2" => $this->request->getPost('kopos2'),
                "tipe" => $this->request->getPost('tipe'),
                "nama_badan" => $this->request->getPost('nama_badan'),
                "jenis_keg" => $this->request->getPost('jenis_keg'),
                "bidang" => $this->request->getPost('bidang'),
                "alamat" => $this->request->getPost('alamat'),
                "kel" => $this->request->getPost('kel'),
                "rtrw3" => $this->request->getPost('rtrw3'),
                "kec3" => $this->request->getPost('kec3'),
                "kab3" => $this->request->getPost('kab3'),
                "no_telp5" => $this->request->getPost('no_telp5'),
                "npwp" => $this->request->getPost('npwp'),
                "siup" => $this->request->getPost('siup'),
                "lama2" => $this->request->getPost('lama2'),
                "omset" => $this->request->getPost('omset'),
                "laba" => $this->request->getPost('laba'),
                "informasi" => $this->request->getPost('informasi'),
                "tujuan" => $this->request->getPost('tujuan'),
                "angsuran" => $this->request->getPost('angsuran'),
                "takover" => $this->request->getPost('takover'),
                "bank" => $this->request->getPost('bank'),
                "ttd_daftar" => $this->request->getPost('ttd_daftar'),
                "ttd_petugas" => $this->request->getPost('ttd_petugas'),
                "ttd_slick" => $this->request->getPost('ttd_slick')
            ]);
            return redirect('kredit');
        }

        // // tampilkan form edit
        return view('kredit/edit', $data);
    }
    public function nxtRealisasi($id)
    {
        $data['title'] = 'Realisasi Pengajuan Kredit';
        
        // ambil artikel yang akan diedit
        $data['kredit'] = $this->kredit->where('id', $id)->first();
        $data['hasil']="Data Proses Realisasi";
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_pem' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $this->kredit->update($id,[
                "produk" => $this->request->getPost('produk'),
                // "id_petugas" => $this->request->getPost('id_petugas'),
                // "nama_petugas" => $this->request->getPost('nama_petugas'),
                // "tgl_daftar" => $this->request->getPost('tgl_daftar'),
                "tgl_survey" => $this->request->getPost('tgl_survey'),
                "tgl_komite" => $this->request->getPost('tgl_komite'),
                "tgl_realisasi" => $this->request->getPost('tgl_realisasi'),
                "jangka" => $this->request->getPost('jangka'),
                "stts_pnd" => 'Realisasi',
                "proses" => $this->request->getPost('proses'),
                "plafon" => $this->request->getPost('plafon'),
                "status" => $this->request->getPost('status'),
                "nama_pem" => $this->request->getPost('nama_pem'),
                "jenis_pem" => $this->request->getPost('jenis_pem'),
                "nama_pang" => $this->request->getPost('nama_pang'),
                "ttl1" => $this->request->getPost('ttl1'),
                "no_ktp" => $this->request->getPost('no_ktp'),
                "nama_ibu" => $this->request->getPost('nama_ibu'),
                "pend_ter" => $this->request->getPost('pend_ter'),
                "profesi" => $this->request->getPost('profesi'),
                "usaha" => $this->request->getPost('usaha'),
                "status_kaw" => $this->request->getPost('status_kaw'),
                "jumlah_tang" => $this->request->getPost('jumlah_tang'),
                "no_telp" => $this->request->getPost('no_telp'),
                "nama_pas" => $this->request->getPost('nama_pas'),
                "jenis_pas" => $this->request->getPost('jenis_pas'),
                "status_pas" => $this->request->getPost('status_pas'),
                "ttl_pas" => $this->request->getPost('ttl_pas'),
                "no_ktp2" => $this->request->getPost('no_ktp2'),
                "pend_ter2" => $this->request->getPost('pend_ter2'),
                "profesi2" => $this->request->getPost('profesi2'),
                "usaha2" => $this->request->getPost('usaha2'),
                "no_telp2" => $this->request->getPost('no_telp2'),
                "jl" => $this->request->getPost('jl'),
                "rtrw" => $this->request->getPost('rtrw'),
                "kec" => $this->request->getPost('kec'),
                "kab" => $this->request->getPost('kab'),
                "no_telp3" => $this->request->getPost('no_telp3'),
                "kopos" => $this->request->getPost('kopos'),
                "hp" => $this->request->getPost('hp'),
                "status_ting" => $this->request->getPost('status_ting'),
                "lama" => $this->request->getPost('lama'),
                "jl2" => $this->request->getPost('jl2'),
                "rtrw2" => $this->request->getPost('rtrw2'),
                "kec2" => $this->request->getPost('kec2'),
                "kab2" => $this->request->getPost('kab2'),
                "no_telp4" => $this->request->getPost('no_telp4'),
                "kopos2" => $this->request->getPost('kopos2'),
                "tipe" => $this->request->getPost('tipe'),
                "nama_badan" => $this->request->getPost('nama_badan'),
                "jenis_keg" => $this->request->getPost('jenis_keg'),
                "bidang" => $this->request->getPost('bidang'),
                "alamat" => $this->request->getPost('alamat'),
                "kel" => $this->request->getPost('kel'),
                "rtrw3" => $this->request->getPost('rtrw3'),
                "kec3" => $this->request->getPost('kec3'),
                "kab3" => $this->request->getPost('kab3'),
                "no_telp5" => $this->request->getPost('no_telp5'),
                "npwp" => $this->request->getPost('npwp'),
                "siup" => $this->request->getPost('siup'),
                "lama2" => $this->request->getPost('lama2'),
                "omset" => $this->request->getPost('omset'),
                "laba" => $this->request->getPost('laba'),
                "informasi" => $this->request->getPost('informasi'),
                "tujuan" => $this->request->getPost('tujuan'),
                "angsuran" => $this->request->getPost('angsuran'),
                "takover" => $this->request->getPost('takover'),
                "bank" => $this->request->getPost('bank'),
                "ttd_daftar" => $this->request->getPost('ttd_daftar'),
                "ttd_petugas" => $this->request->getPost('ttd_petugas'),
                "ttd_slick" => $this->request->getPost('ttd_slick')
            ]);
            return redirect('kredit');
        }

        // // tampilkan form edit
        return view('kredit/edit', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $this->kredit->delete($id);
        return redirect('kredit');
    }

    public function cetak($id)
    {
        $data['title'] = 'Kredit Detail';
		$data['kredit'] = $this->kredit->where('id', $id)->first();
        $pdf = new PDF();
        $pdf->load_view('kredit/pdf_template',$data);
    }

}

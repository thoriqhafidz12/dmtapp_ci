<?php

namespace App\Controllers;
use App\Models\UsersModel;
class User extends BaseController
{
    public function __construct()
	{ 
		$this->user = new UsersModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');

	}
    public function index()
    {
        $data['title'] = 'My Profile';
        return view('user/index', $data);
    }
    public function edit($id){
		$user = new UsersModel();
        $data['title'] = 'Edit profile';

        return view('user/edit', $data);
    }

    public function save()
	{
        $this->builder = $this->db->table('users');
        $data['title'] = 'Edit Profile';
		if (!$this->validate([
			'user_image' => [
				'rules' => 'uploaded[user_image]|mime_in[user_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[user_image,4048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 4 MB'
				]

			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

		$fotouser = new UsersModel();
		$datafoto = $this->request->getFile('user_image');
        
		$fileName = $datafoto->getRandomName();
		$fotouser->update('id',[
            "username" => $this->request->getPost('username'),
            "fullname" => $this->request->getPost('fullname'),
			"user_image" => $fileName
		]);
		$image = \Config\Services::image()
            ->withFile($datafoto)
            ->convert(IMAGETYPE_PNG)
            // ->resize(400, 200, true, 'height')
            ->save(FCPATH .'/uploads/foto/'. $fileName,100);
		session()->setFlashdata('success', 'FOTO Berhasil diupload');
		return redirect()->to(base_url('user',$data));
	}
}

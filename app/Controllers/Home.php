<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Register',
            'config' => config('Auth'),
        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        return view('auth/register');
    }
    public function user()
    {
        return view('user/index');
    }

}

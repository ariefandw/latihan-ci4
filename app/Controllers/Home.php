<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function welcome($pesan = 'Selamat datang', $nama = '')
    {
        $data = [
            'pesan' => $pesan,
            'nama' => $nama,
        ];

        return view('selamat_datang', $data);
    }
}

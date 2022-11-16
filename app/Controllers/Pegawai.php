<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index()
    {
        $pegawai_model = new PegawaiModel();
        $pegawais = $pegawai_model->findAll();
        $data = [
            'pegawais' => $pegawais,
        ];
        return view('pegawai/index', $data);
    }

    public function create()
    {
        $pegawai = new PegawaiModel();
        $data = [
            'action' => site_url('pegawai/store'),
            'pegawai' => $pegawai,
        ];
        return view('pegawai/form', $data);
    }

    public function edit($nip)
    {
        $pegawai_model = new PegawaiModel();
        $pegawai = $pegawai_model->find($nip);
        $data = [
            'action' => site_url('pegawai/update/' . $nip),
            'pegawai' => $pegawai,
        ];
        return view('pegawai/form', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        $pegawai_model = new PegawaiModel();
        $pegawai_model->insert($data);
        $this->response->redirect(site_url('pegawai'));
    }

    public function update()
    {
    }
}

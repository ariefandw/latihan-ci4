<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index()
    {
        $data = $this->request->getGet();
        $q = empty($data['q']) ? '' : $data['q'];
        $pegawai_model = new PegawaiModel();
        $pegawais = $pegawai_model
            ->where("CONCAT(nip, nama) LIKE '%$q%'")
            ->findAll();
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

    public function update($nip)
    {
        $data = $this->request->getPost();
        $pegawai_model = new PegawaiModel();
        $pegawai_model->update($nip, $data);
        $this->response->redirect(site_url('pegawai'));
    }

    public function delete($nip)
    {
        $pegawai_model = new PegawaiModel();
        $pegawai_model->delete($nip);
        $this->response->redirect(site_url('pegawai'));
    }
}

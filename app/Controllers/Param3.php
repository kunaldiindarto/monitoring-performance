<?php

namespace App\Controllers;

use App\Models\Lifetime3Model;
use App\Models\Oee3Model;

class Param3 extends BaseController
{
    protected $oeeModel;
    public function __construct()
    {
        $this->oeeModel = new Oee3Model();
        $this->lifetimeModel = new Lifetime3Model();
    }

    public function index()
    {
        $oee = $this->oeeModel->findAll();

        $builder = $this->db->table('quality3');
        $query   = $builder->get()->getResult();
        $builder2 = $this->db->table('performance3');
        $query2 = $builder2->get()->getResult();

        $lifeTime = $this->lifetimeModel->getLifetime();

        $data = [
            'title' => 'Daftar OEE',
            'oee' => $oee,
            'quality' => $query,
            'performance' => $query2,
            'lifetime'  => $lifeTime
        ];

        return view('param3/index', $data);
    }

    public function edit($id)
    {
        $oeeModel = new Oee3Model();
        $data = [

            'title' => 'Form Ubah data OEE',

            'validation' => \Config\Services::validation(),
            'oee' => $oeeModel->find($id)
        ];

        return view('param3/edit', $data);
    }

    public function update($id)
    {
        //cek nilai oee apakah ada yang lama
        $total_avLama = $this->oeeModel->find($id);

        if ($total_avLama['total_av'] == $this->oeeModel->find(['total_av'])) {
            $rule_total_av = 'required';
        } else {
            $rule_total_av = 'required|is_natural_no_zero';
        }

        helper(['form', 'url']);

        //define validation
        $validation = $this->validate([
            'total_av' => [
                'rules' => $rule_total_av,
                'errors' => [
                    'required' => '{field} total harus diisi.'
                ]
            ]
        ]);

        if (!$validation) {

            //model initialize


            //render view with error validation message
            return view('/param3/edit', [
                'oee' => $this->oeeModel->find($id),
                'validation' => $this->validator
            ]);
        } else {

            //insert data into database
            $this->oeeModel->save([
                'id' => $id,
                'total_av' => $this->request->getVar('total_av'),
                //'slug' => $slug
                'pldt' => $this->request->getVar('pldt'),
                'setup_loss' => $this->request->getVar('setup_loss'),
                'set_adjustment' => $this->request->getVar('set_adjustment'),
                'shutdown_loss' => $this->request->getVar('shutdown_loss')
            ]);

            //flash message
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');

            return redirect()->to('/param3');
        }
    }

    public function save()
    {

        if (!$this->validate([
            'total_av' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} total harus diisi.'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            $data['validation'] = $validation;
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            return view('/param3/create', $data);
        }
        //$slug = url_title($this->request->getVar('judul', '-', true));
        $this->oeeModel->save([
            'total_av' => $this->request->getVar('total_av'),
            //'slug' => $slug
            'pldt' => $this->request->getVar('pldt'),
            'setup_loss' => $this->request->getVar('setup_loss'),
            'set_adjustment' => $this->request->getVar('set_adjustment'),
            'shutdown_loss' => $this->request->getVar('shutdown_loss')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/param3');
    }
}

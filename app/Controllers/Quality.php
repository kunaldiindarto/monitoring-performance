<?php

namespace App\Controllers;

use App\Models\QualityModel;

class Quality extends BaseController
{
    protected $qualityModel;
    public function __construct()
    {
        $this->qualityModel = new QualityModel();
    }

    public function edit()
    {
        session();
        $builder = $this->db->table('quality');
        $query   = $builder->get()->getResult();
        // $data['quality'] = $query;

        $data = [
            'title' => 'Form ubah data defect',
            'validation' => \Config\Services::validation(),
            'quality' => $query
        ];


        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
        // $builder->where($array);
        return view('quality/edit', $data);
    }
    public function qupdate($id)
    {
        ////////////////////////////////////////////////////////////
        $validation = $this->validate([
            'defect' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_natural_no_zero' => '{field} tidak boleh 0'
                ]
            ]
        ]);

        if (!$validation) {
            $builder = $this->db->table('quality');
            $query   = $builder->get()->getResult();
            $data = [
                'title' => 'Form ubah data defect',
                'validation' => \Config\Services::validation(),
                'quality' => $query
            ];

            return view('/quality/edit', $data);
        } else {
            $builder = $this->db->table('quality');

            $data = [
                'id'    => $id,
                'defect' => $this->request->getVar('defect'),
            ];

            $builder->replace($data);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/dashboard');
        }
    }

    public function edit2()
    {
        session();
        $builder = $this->db->table('quality2');
        $query   = $builder->get()->getResult();
        // $data['quality'] = $query;

        $data = [
            'title' => 'Form ubah data defect',
            'validation' => \Config\Services::validation(),
            'quality' => $query
        ];


        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
        // $builder->where($array);
        return view('quality/edit2', $data);
    }
    public function edit3()
    {
        session();
        $builder = $this->db->table('quality3');
        $query   = $builder->get()->getResult();
        // $data['quality'] = $query;

        $data = [
            'title' => 'Form ubah data defect',
            'validation' => \Config\Services::validation(),
            'quality' => $query
        ];


        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
        // $builder->where($array);
        return view('quality/edit3', $data);
    }
    public function edit4()
    {
        session();
        $builder = $this->db->table('quality4');
        $query   = $builder->get()->getResult();
        // $data['quality'] = $query;

        $data = [
            'title' => 'Form ubah data defect',
            'validation' => \Config\Services::validation(),
            'quality' => $query
        ];


        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
        // $builder->where($array);
        return view('quality/edit4', $data);
    }

    public function qupdate2($id)
    {
        ////////////////////////////////////////////////////////////
        $validation = $this->validate([
            'defect' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_natural_no_zero' => '{field} tidak boleh 0'
                ]
            ]
        ]);

        if (!$validation) {
            $builder = $this->db->table('quality2');
            $query   = $builder->get()->getResult();
            $data = [
                'title' => 'Form ubah data defect',
                'validation' => \Config\Services::validation(),
                'quality' => $query
            ];

            return view('/quality/edit2', $data);
        } else {
            $builder = $this->db->table('quality2');

            $data = [
                'id'    => $id,
                'defect' => $this->request->getVar('defect'),
            ];

            $builder->replace($data);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/param2');
        }
    }
    public function qupdate3($id)
    {
        ////////////////////////////////////////////////////////////
        $validation = $this->validate([
            'defect' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_natural_no_zero' => '{field} tidak boleh 0'
                ]
            ]
        ]);

        if (!$validation) {
            $builder = $this->db->table('quality3');
            $query   = $builder->get()->getResult();
            $data = [
                'title' => 'Form ubah data defect',
                'validation' => \Config\Services::validation(),
                'quality' => $query
            ];

            return view('/quality/edit3', $data);
        } else {
            $builder = $this->db->table('quality3');

            $data = [
                'id'    => $id,
                'defect' => $this->request->getVar('defect'),
            ];

            $builder->replace($data);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/param3');
        }
    }
    public function qupdate4($id)
    {
        ////////////////////////////////////////////////////////////
        $validation = $this->validate([
            'defect' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_natural_no_zero' => '{field} tidak boleh 0'
                ]
            ]
        ]);

        if (!$validation) {
            $builder = $this->db->table('quality4');
            $query   = $builder->get()->getResult();
            $data = [
                'title' => 'Form ubah data defect',
                'validation' => \Config\Services::validation(),
                'quality' => $query
            ];

            return view('/quality/edit4', $data);
        } else {
            $builder = $this->db->table('quality4');

            $data = [
                'id'    => $id,
                'defect' => $this->request->getVar('defect'),
            ];

            $builder->replace($data);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/param4');
        }
    }
}

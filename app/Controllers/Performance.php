<?php

namespace App\Controllers;

class Performance extends BaseController
{

    public function edit()
    {
        session();
        $builder = $this->db->table('performance');
        $query   = $builder->get()->getResult();
        // $data['quality'] = $query;

        $data = [
            'title' => 'Form ubah data ideal cycle time',
            'validation' => \Config\Services::validation(),
            'performance' => $query
        ];


        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
        // $builder->where($array);
        return view('performance/edit', $data);
    }
    public function pupdate($id)
    {
        ////////////////////////////////////////////////////////////
        $validation = $this->validate([
            'ideal_ct' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_natural_no_zero' => '{field} tidak boleh 0'
                ]
            ]
        ]);

        if (!$validation) {
            $builder = $this->db->table('performance');
            $query   = $builder->get()->getResult();
            $data = [
                'title' => 'Form ubah data ideal cycle time',
                'validation' => \Config\Services::validation(),
                'performance' => $query
            ];

            return view('/performance/edit', $data);
        } else {
            $builder = $this->db->table('performance');

            $data = [
                'id'    => $id,
                'ideal_ct' => $this->request->getVar('ideal_ct'),
            ];

            $builder->replace($data);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/dashboard');
        }
    }

    public function edit2()
    {
        session();
        $builder = $this->db->table('performance2');
        $query   = $builder->get()->getResult();
        // $data['quality'] = $query;

        $data = [
            'title' => 'Form ubah data ideal cycle time',
            'validation' => \Config\Services::validation(),
            'performance' => $query
        ];


        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
        // $builder->where($array);
        return view('performance/edit2', $data);
    }
    public function edit3()
    {
        session();
        $builder = $this->db->table('performance3');
        $query   = $builder->get()->getResult();
        // $data['quality'] = $query;

        $data = [
            'title' => 'Form ubah data ideal cycle time',
            'validation' => \Config\Services::validation(),
            'performance' => $query
        ];


        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
        // $builder->where($array);
        return view('performance/edit3', $data);
    }
    public function edit4()
    {
        session();
        $builder = $this->db->table('performance4');
        $query   = $builder->get()->getResult();
        // $data['quality'] = $query;

        $data = [
            'title' => 'Form ubah data ideal cycle time',
            'validation' => \Config\Services::validation(),
            'performance' => $query
        ];


        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
        // $builder->where($array);
        return view('performance/edit4', $data);
    }

    public function pupdate2($id)
    {
        ////////////////////////////////////////////////////////////
        $validation = $this->validate([
            'ideal_ct' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_natural_no_zero' => '{field} tidak boleh 0'
                ]
            ]
        ]);

        if (!$validation) {
            $builder = $this->db->table('performance2');
            $query   = $builder->get()->getResult();
            $data = [
                'title' => 'Form ubah data ideal cycle time',
                'validation' => \Config\Services::validation(),
                'performance' => $query
            ];

            return view('/performance/edit2', $data);
        } else {
            $builder = $this->db->table('performance2');

            $data = [
                'id'    => $id,
                'ideal_ct' => $this->request->getVar('ideal_ct'),
            ];

            $builder->replace($data);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/param2');
        }
    }
    public function pupdate3($id)
    {
        ////////////////////////////////////////////////////////////
        $validation = $this->validate([
            'ideal_ct' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_natural_no_zero' => '{field} tidak boleh 0'
                ]
            ]
        ]);

        if (!$validation) {
            $builder = $this->db->table('performance3');
            $query   = $builder->get()->getResult();
            $data = [
                'title' => 'Form ubah data ideal cycle time',
                'validation' => \Config\Services::validation(),
                'performance' => $query
            ];

            return view('/performance/edit3', $data);
        } else {
            $builder = $this->db->table('performance3');

            $data = [
                'id'    => $id,
                'ideal_ct' => $this->request->getVar('ideal_ct'),
            ];

            $builder->replace($data);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/param3');
        }
    }

    public function pupdate4($id)
    {
        ////////////////////////////////////////////////////////////
        $validation = $this->validate([
            'ideal_ct' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_natural_no_zero' => '{field} tidak boleh 0'
                ]
            ]
        ]);

        if (!$validation) {
            $builder = $this->db->table('performance4');
            $query   = $builder->get()->getResult();
            $data = [
                'title' => 'Form ubah data ideal cycle time',
                'validation' => \Config\Services::validation(),
                'performance' => $query
            ];

            return view('/performance/edit4', $data);
        } else {
            $builder = $this->db->table('performance4');

            $data = [
                'id'    => $id,
                'ideal_ct' => $this->request->getVar('ideal_ct'),
            ];

            $builder->replace($data);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/param4');
        }
    }
}

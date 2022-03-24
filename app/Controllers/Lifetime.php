<?php

namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */


use App\Models\Lifetime2Model;
use App\Models\Lifetime3Model;
use App\Models\Lifetime4Model;
use App\Models\LifetimeModel;
use App\Models\TujuanLife2Model;
use App\Models\TujuanLife3Model;
use App\Models\TujuanLife4Model;
use App\Models\TujuanLifeModel;
use CodeIgniter\I18n\Time;

class Lifetime extends BaseController
{
    protected $lifetimeModel;
    public function __construct()
    {
        $this->lifetimeModel = new LifetimeModel();
        $this->tujuanLifeModel = new TujuanLifeModel();

        $this->lifetime2Model = new Lifetime2Model();
        $this->lifetime3Model = new Lifetime3Model();
        $this->lifetime4Model = new Lifetime4Model();

        $this->tujuanLife2Model = new TujuanLife2Model();
        $this->tujuanLife3Model = new TujuanLife3Model();
        $this->tujuanLife4Model = new TujuanLife4Model();
    }

    public function edit()
    {
        session();
        $lifetime = $this->lifetimeModel->getLifetime();
        $data = [
            'title' => 'form ubah data lifetime',
            'validation' => \Config\Services::validation(),
            'lifetime' => $lifetime
        ];

        return view('lifetime/edit', $data);
    }

    public function edit2()
    {
        session();
        $lifetime = $this->lifetime2Model->getLifetime();
        $data = [
            'title' => 'form ubah data lifetime',
            'validation' => \Config\Services::validation(),
            'lifetime' => $lifetime
        ];

        return view('lifetime/edit2', $data);
    }
    public function edit3()
    {
        session();
        $lifetime = $this->lifetime3Model->getLifetime();
        $data = [
            'title' => 'form ubah data lifetime',
            'validation' => \Config\Services::validation(),
            'lifetime' => $lifetime
        ];

        return view('lifetime/edit3', $data);
    }
    public function edit4()
    {
        session();
        $lifetime = $this->lifetime4Model->getLifetime();
        $data = [
            'title' => 'form ubah data lifetime',
            'validation' => \Config\Services::validation(),
            'lifetime' => $lifetime
        ];
        dd($data);

        return view('lifetime/edit4', $data);
    }

    public function ltupdate($id)
    {
        $validation = $this->validate([
            'hari' => [
                'rules' => 'required|hari',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'hari'  =>  'maintenance terlalu lama jika melebihi 365 hari'
                ]
            ],
            'jam' => [
                'rules' => 'required|jam',
                'errors' => [
                    'required'  => '{field} harus diisi, , jika tidak ada masukan 0',
                    'jam'       => 'melebihi 24 jam. masukan ke hari'
                ]
            ],
            'menit' => [
                'rules' => 'required|menit',
                'errors' => [
                    'required'  => '{field} harus diisi, jika tidak ada masukan 0',
                    'menit'       => 'melebihi 60 menit. masukan ke jam'
                ]
            ],
        ]);

        if (!$validation) {
            $lifetime = $this->lifetimeModel->getLifetime();
            $data = [
                'title' => 'form ubah data lifetime',
                'validation' => \Config\Services::validation(),
                'lifetime' => $lifetime
            ];

            return view('lifetime/edit', $data);
        } else {

            $myTime = Time::now('Asia/Jakarta', 'en_US');

            $hari = $this->request->getVar('hari');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');

            $myTime3 = $myTime->addDays($hari)->addHours($jam)->addMinutes($menit);
            $hasil = $myTime3->toDateTimeString();

            $data = [
                'hari'    => $hari,
                'jam' => $jam,
                'menit' => $menit
            ];
            $dataTujuan = [
                'tujuan'    => $hasil,
            ];

            $this->lifetimeModel->insert($data);
            $this->tujuanLifeModel->insert($dataTujuan);
            //     $builder->replace($data);

            session()->setFlashdata('pesan', 'Data setting life time Berhasil Ditambahkan.');

            return redirect()->to('/dashboard');
        }
    }
    public function ltupdate2($id)
    {
        $validation = $this->validate([
            'hari' => [
                'rules' => 'required|hari',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'hari'  =>  'maintenance terlalu lama jika melebihi 365 hari'
                ]
            ],
            'jam' => [
                'rules' => 'required|jam',
                'errors' => [
                    'required'  => '{field} harus diisi, , jika tidak ada masukan 0',
                    'jam'       => 'melebihi 24 jam. masukan ke hari'
                ]
            ],
            'menit' => [
                'rules' => 'required|menit',
                'errors' => [
                    'required'  => '{field} harus diisi, jika tidak ada masukan 0',
                    'menit'       => 'melebihi 60 menit. masukan ke jam'
                ]
            ],
        ]);

        if (!$validation) {
            $lifetime = $this->lifetime2Model->getLifetime();
            $data = [
                'title' => 'form ubah data lifetime',
                'validation' => \Config\Services::validation(),
                'lifetime' => $lifetime
            ];

            return view('lifetime/edit2', $data);
        } else {

            $myTime = Time::now('Asia/Jakarta', 'en_US');

            $hari = $this->request->getVar('hari');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');

            $myTime3 = $myTime->addDays($hari)->addHours($jam)->addMinutes($menit);
            $hasil = $myTime3->toDateTimeString();

            $data = [
                'hari'    => $hari,
                'jam' => $jam,
                'menit' => $menit
            ];
            $dataTujuan = [
                'tujuan'    => $hasil,
            ];

            $this->lifetime2Model->insert($data);
            $this->tujuanLife2Model->insert($dataTujuan);
            //     $builder->replace($data);

            session()->setFlashdata('pesan', 'Data setting life time Berhasil Ditambahkan.');

            return redirect()->to('/param2');
        }
    }
    public function ltupdate3($id)
    {
        $validation = $this->validate([
            'hari' => [
                'rules' => 'required|hari',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'hari'  =>  'maintenance terlalu lama jika melebihi 365 hari'
                ]
            ],
            'jam' => [
                'rules' => 'required|jam',
                'errors' => [
                    'required'  => '{field} harus diisi, , jika tidak ada masukan 0',
                    'jam'       => 'melebihi 24 jam. masukan ke hari'
                ]
            ],
            'menit' => [
                'rules' => 'required|menit',
                'errors' => [
                    'required'  => '{field} harus diisi, jika tidak ada masukan 0',
                    'menit'       => 'melebihi 60 menit. masukan ke jam'
                ]
            ],
        ]);

        if (!$validation) {
            $lifetime = $this->lifetime3Model->getLifetime();
            $data = [
                'title' => 'form ubah data lifetime',
                'validation' => \Config\Services::validation(),
                'lifetime' => $lifetime
            ];

            return view('lifetime/edit3', $data);
        } else {

            $myTime = Time::now('Asia/Jakarta', 'en_US');

            $hari = $this->request->getVar('hari');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');

            $myTime3 = $myTime->addDays($hari)->addHours($jam)->addMinutes($menit);
            $hasil = $myTime3->toDateTimeString();

            $data = [
                'hari'    => $hari,
                'jam' => $jam,
                'menit' => $menit
            ];
            $dataTujuan = [
                'tujuan'    => $hasil,
            ];

            $this->lifetime3Model->insert($data);
            $this->tujuanLife3Model->insert($dataTujuan);
            //     $builder->replace($data);

            session()->setFlashdata('pesan', 'Data setting life time Berhasil Ditambahkan.');

            return redirect()->to('/param3');
        }
    }
    public function ltupdate4($id)
    {
        $validation = $this->validate([
            'hari' => [
                'rules' => 'required|hari',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'hari'  =>  'maintenance terlalu lama jika melebihi 365 hari'
                ]
            ],
            'jam' => [
                'rules' => 'required|jam',
                'errors' => [
                    'required'  => '{field} harus diisi, , jika tidak ada masukan 0',
                    'jam'       => 'melebihi 24 jam. masukan ke hari'
                ]
            ],
            'menit' => [
                'rules' => 'required|menit',
                'errors' => [
                    'required'  => '{field} harus diisi, jika tidak ada masukan 0',
                    'menit'       => 'melebihi 60 menit. masukan ke jam'
                ]
            ],
        ]);

        if (!$validation) {
            $lifetime = $this->lifetime4Model->getLifetime();
            $data = [
                'title' => 'form ubah data lifetime',
                'validation' => \Config\Services::validation(),
                'lifetime' => $lifetime
            ];

            return view('lifetime/edit4', $data);
        } else {

            $myTime = Time::now('Asia/Jakarta', 'en_US');

            $hari = $this->request->getVar('hari');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');

            $myTime3 = $myTime->addDays($hari)->addHours($jam)->addMinutes($menit);
            $hasil = $myTime3->toDateTimeString();

            $data = [
                'hari'    => $hari,
                'jam' => $jam,
                'menit' => $menit
            ];
            $dataTujuan = [
                'tujuan'    => $hasil,
            ];

            $this->lifetime4Model->insert($data);
            $this->tujuanLife4Model->insert($dataTujuan);
            //     $builder->replace($data);

            session()->setFlashdata('pesan', 'Data setting life time Berhasil Ditambahkan.');

            return redirect()->to('/param4');
        }
    }

    public function getSelisihLife()
    {
        $selisihLifeTime = $this->lifetimeModel->getLifetime();
        $tujuanLife = $this->tujuanLifeModel->getTujuan();

        $data = [
            'selisih'   => $selisihLifeTime,
            'tujuan'    => $tujuanLife
        ];

        return json_encode($data);
    }

    public function getSelisihLife2()
    {
        $selisihLifeTime = $this->lifetime2Model->getLifetime();
        $tujuanLife = $this->tujuanLife2Model->getTujuan();

        $data = [
            'selisih'   => $selisihLifeTime,
            'tujuan'    => $tujuanLife
        ];

        return json_encode($data);
    }

    public function getSelisihLife3()
    {
        $selisihLifeTime = $this->lifetime3Model->getLifetime();
        $tujuanLife = $this->tujuanLife3Model->getTujuan();

        $data = [
            'selisih'   => $selisihLifeTime,
            'tujuan'    => $tujuanLife
        ];

        return json_encode($data);
    }

    public function getSelisihLife4()
    {
        $selisihLifeTime = $this->lifetime4Model->getLifetime();
        $tujuanLife = $this->tujuanLife4Model->getTujuan();

        $data = [
            'selisih'   => $selisihLifeTime,
            'tujuan'    => $tujuanLife
        ];

        return json_encode($data);
    }

    public function postsisaSelisih()
    {
        if ($this->request->isAJAX()) {

            $hari = $this->request->getVar('hari');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');

            $data = [
                'hari'    => $hari,
                'jam' => $jam,
                'menit' => $menit
            ];

            $this->lifetimeModel->insert($data);

            return json_encode([
                'success'   => 'post sisa lifetime berhasil',
                'hari'      => $hari,
                'jam'       => $jam,
                'menit'     => $menit
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function postsisaSelisih2()
    {
        if ($this->request->isAJAX()) {

            $hari = $this->request->getVar('hari');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');

            $data = [
                'hari'    => $hari,
                'jam' => $jam,
                'menit' => $menit
            ];

            $this->lifetime2Model->insert($data);

            return json_encode([
                'success'   => 'post sisa lifetime 2 berhasil',
                'hari'      => $hari,
                'jam'       => $jam,
                'menit'     => $menit
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function postsisaSelisih3()
    {
        if ($this->request->isAJAX()) {

            $hari = $this->request->getVar('hari');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');

            $data = [
                'hari'    => $hari,
                'jam' => $jam,
                'menit' => $menit
            ];

            $this->lifetime3Model->insert($data);

            return json_encode([
                'success'   => 'post sisa lifetime 3 berhasil',
                'hari'      => $hari,
                'jam'       => $jam,
                'menit'     => $menit
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function postsisaSelisih4()
    {
        if ($this->request->isAJAX()) {

            $hari = $this->request->getVar('hari');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');

            $data = [
                'hari'    => $hari,
                'jam' => $jam,
                'menit' => $menit
            ];

            $this->lifetime4Model->insert($data);

            return json_encode([
                'success'   => 'post sisa lifetime 4 berhasil',
                'hari'      => $hari,
                'jam'       => $jam,
                'menit'     => $menit
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
}

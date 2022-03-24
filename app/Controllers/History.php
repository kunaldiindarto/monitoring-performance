<?php

namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */

use App\Models\Failure2Model;
use App\Models\Failure3Model;
use App\Models\Failure4Model;
use App\Models\FailureModel;
use App\Models\Minorstop2Model;
use App\Models\Minorstop3Model;
use App\Models\Minorstop4Model;
use App\Models\MinorstopModel;
use App\Models\Otherloss2Model;
use App\Models\Otherloss3Model;
use App\Models\Otherloss4Model;
use App\Models\OtherlossModel;

class History extends BaseController
{
    public function __construct()
    {
        $this->otherLoss = new OtherlossModel();
        $this->minorStop = new MinorstopModel();
        $this->failure = new FailureModel();

        $this->otherLoss2 = new Otherloss2Model();
        $this->minorStop2 = new Minorstop2Model();
        $this->failure2 = new Failure2Model();

        $this->otherLoss3 = new Otherloss3Model();
        $this->minorStop3 = new Minorstop3Model();
        $this->failure3 = new Failure3Model();

        $this->otherLoss4 = new Otherloss4Model();
        $this->minorStop4 = new Minorstop4Model();
        $this->failure4 = new Failure4Model();
    }

    public function index()
    {
        return view('history/index');
    }
    public function data()
    {
        $otherLoss = $this->otherLoss->getOtherloss();
        $minorStop = $this->minorStop->getMinorstop();
        $failure = $this->failure->getFailure();

        $otherLoss2 = $this->otherLoss2->getOtherloss();
        $minorStop2 = $this->minorStop2->getMinorstop();
        $failure2 = $this->failure2->getFailure();

        $otherLoss3 = $this->otherLoss3->getOtherloss();
        $minorStop3 = $this->minorStop3->getMinorstop();
        $failure3 = $this->failure3->getFailure();

        $otherloss4 = $this->otherLoss4->getOtherloss();
        $minorStop4 = $this->minorStop4->getMinorstop();
        $failure4 = $this->failure4->getFailure();
        $data = [
            'otherloss' => $otherLoss,
            'minorstop' => $minorStop,
            'failure'    => $failure,

            'otherloss2' => $otherLoss2,
            'minorstop2' => $minorStop2,
            'failure2'    => $failure2,

            'otherloss3' => $otherLoss3,
            'minorstop3' => $minorStop3,
            'failure3'    => $failure3,

            'otherloss4' => $otherloss4,
            'minorstop4' => $minorStop4,
            'failure4'    => $failure4
        ];

        return json_encode($data);
    }

    public function delete($table, $id)
    {
        $tabelTarget = $table;
        if ($tabelTarget == "otherloss") {
            $model = $this->otherLoss;
        } else if ($tabelTarget == "minorstop") {
            $model = $this->minorStop;
        } else if ($tabelTarget == "failure") {
            $model = $this->failure;
        } else if ($tabelTarget == "otherloss2") {
            $model = $this->otherLoss2;
        } else if ($tabelTarget == "minorstop2") {
            $model = $this->minorStop2;
        } else if ($tabelTarget == "failure2") {
            $model = $this->failure2;
        } else if ($tabelTarget == "otherloss3") {
            $model = $this->otherLoss3;
        } else if ($tabelTarget == "minorstop3") {
            $model = $this->minorStop3;
        } else if ($tabelTarget == "failure3") {
            $model = $this->failure3;
        } else if ($tabelTarget == "otherloss4") {
            $model = $this->otherLoss4;
        } else if ($tabelTarget == "minorstop4") {
            $model = $this->minorStop4;
        } else if ($tabelTarget == "failure4") {
            $model = $this->failure4;
        } else {
            $model = "";
        }

        $model->delete($id);
        session()->setFlashdata('pesan', 'Data ' . $tabelTarget . ' Berhasil  Dihapus.');
        return redirect()->to('/history');
    }

    public function create()
    {
        // $session = \Config\Services::session();
        session();
        //dd($session);
        $data = [
            'title' => 'Form tambah data Downtime',
            'validation' => \Config\Services::validation()
        ];

        return view('history/create', $data);
    }

    public function save()
    {

        $validation = $this->validate([
            'mesin' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus dipilih',
                ]
            ],
            'downtime' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus dipilih',
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
            'detik' => [
                'rules' => 'required|detik',
                'errors' => [
                    'required'  => '{field} harus diisi, jika tidak ada masukan 0',
                    'detik'       => 'melebihi 60 detik. masukan ke jam'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus diplih',
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->to('create')->withInput()->with('validation', $validation);
        } else {
            $mesin = $this->request->getVar('mesin');
            $downtime = $this->request->getVar('downtime');
            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');
            $detik = $this->request->getVar('detik');
            $deskripsi = $this->request->getVar('deskripsi');

            if ($mesin == "Mesin 1" and $downtime == "Failure") {
                $model = $this->failure;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
            } else if ($mesin == "Mesin 1" and $downtime == "Other Loss") {
                $model = $this->otherLoss;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
            } else if ($mesin == "Mesin 1" and $downtime == "Minor Stop") {
                $model = $this->minorStop;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
                // !akhir mesin 1
            } else if ($mesin == "Mesin 2" and $downtime == "Failure") {
                $model = $this->failure2;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
            } else if ($mesin == "Mesin 2" and $downtime == "Other Loss") {
                $model = $this->otherLoss2;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
            } else if ($mesin == "Mesin 2" and $downtime == "Minor Stop") {
                $model = $this->minorStop2;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
                // ? akhir mesin 2
            } else if ($mesin == "Mesin 3" and $downtime == "Failure") {
                $model = $this->failure3;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
            } else if ($mesin == "Mesin 3" and $downtime == "Other Loss") {
                $model = $this->otherLoss3;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
            } else if ($mesin == "Mesin 3" and $downtime == "Minor Stop") {
                $model = $this->minorStop3;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
                // todo akhir mesin 3
            } else if ($mesin == "Mesin 4" and $downtime == "Failure") {
                $model = $this->failure4;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
            } else if ($mesin == "Mesin 4" and $downtime == "Other Loss") {
                $model = $this->otherLoss4;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
            } else if ($mesin == "Mesin 4" and $downtime == "Minor Stop") {
                $model = $this->minorStop4;

                $data = [
                    'jam' => $jam,
                    'menit' => $menit,
                    'detik' => $detik,
                    'deskripsi' => $deskripsi,

                ];
                $model->insert($data);
                // ? akhir mesin 2
            }

            session()->setFlashdata('pesan', 'Data ' . $mesin . ' ' . $downtime .  ' Berhasil Ditambahkan.');

            return redirect()->to('/history');
        }
    }

    public function edit($table, $id)
    {
        $tabelTarget = $table;
        if ($tabelTarget == "otherloss") {
            $model = $this->otherLoss;
        } else if ($tabelTarget == "minorstop") {
            $model = $this->minorStop;
        } else if ($tabelTarget == "failure") {
            $model = $this->failure;
        } else if ($tabelTarget == "otherloss2") {
            $model = $this->otherLoss2;
        } else if ($tabelTarget == "minorstop2") {
            $model = $this->minorStop2;
        } else if ($tabelTarget == "failure2") {
            $model = $this->failure2;
        } else if ($tabelTarget == "otherloss3") {
            $model = $this->otherLoss3;
        } else if ($tabelTarget == "minorstop3") {
            $model = $this->minorStop3;
        } else if ($tabelTarget == "failure3") {
            $model = $this->failure3;
        } else if ($tabelTarget == "otherloss4") {
            $model = $this->otherLoss4;
        } else if ($tabelTarget == "minorstop4") {
            $model = $this->minorStop4;
        } else if ($tabelTarget == "failure4") {
            $model = $this->failure4;
        } else {
            $model = "";
        }

        $data = [

            'title' => 'Form Ubah data downtime',
            'tabel' => $tabelTarget,
            'validation' => \Config\Services::validation(),
            'parameter' => $model->find($id),
        ];

        // dd($data);

        return view('history/edit', $data);
    }

    public function update($tabel, $id)
    {

        if ($tabel == "otherloss") {
            $model = $this->otherLoss;
        } else if ($tabel == "minorstop") {
            $model = $this->minorStop;
        } else if ($tabel == "failure") {
            $model = $this->failure;
        } else if ($tabel == "otherloss2") {
            $model = $this->otherLoss2;
        } else if ($tabel == "minorstop2") {
            $model = $this->minorStop2;
        } else if ($tabel == "failure2") {
            $model = $this->failure2;
        } else if ($tabel == "otherloss3") {
            $model = $this->otherLoss3;
        } else if ($tabel == "minorstop3") {
            $model = $this->minorStop3;
        } else if ($tabel == "failure3") {
            $model = $this->failure3;
        } else if ($tabel == "otherloss4") {
            $model = $this->otherLoss4;
        } else if ($tabel == "minorstop4") {
            $model = $this->minorStop4;
        } else if ($tabel == "failure4") {
            $model = $this->failure4;
        } else {
            $model = "";
        }

        $validation = $this->validate([
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
            'detik' => [
                'rules' => 'required|detik',
                'errors' => [
                    'required'  => '{field} harus diisi, jika tidak ada masukan 0',
                    'detik'       => 'melebihi 60 detik. masukan ke jam'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus diisi',
                ]
            ],
        ]);

        if (!$validation) {
            // $url = '/history/edit/' . $tabel . '/' . $id;
            return redirect()->to('/history/edit/' . $tabel . '/' . $id)->withInput()->with('validation', $validation);
        } else {

            $jam = $this->request->getVar('jam');
            $menit = $this->request->getVar('menit');
            $detik = $this->request->getVar('detik');
            $deskripsi = $this->request->getVar('deskripsi');

            $data = [
                'id'  => $id,
                'jam' => $jam,
                'menit' => $menit,
                'detik' => $detik,
                'deskripsi' => $deskripsi,

            ];

            $model->save($data);

            session()->setFlashdata('pesan', 'Data ' . $tabel . ' ID ' . $id . ' Berhasil Diubah.');

            return redirect()->to('/history');
        }
    }
}

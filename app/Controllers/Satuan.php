<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSatuan;

class Satuan extends BaseController
    {
        public function __construct() {
            $this->ModelSatuan = new ModelSatuan();
        }
        public function index()
        {
            $data = [
            'judul'=> 'Master Data',
            'subjudul'=> 'Satuan',
            'menu'=> 'MasterData',
            'submenu'=> 'satuan',
            'page' =>'v_admin',
             'page' => 'v_satuan',
             'satuan' => $this->ModelSatuan->AllData(),
            ];
            return view('v_template', $data);
        }

        public function InsertData()
        {
            $data =['nama_satuan' => $this->request->getPost('nama_satuan')];
$this->ModelSatuan->InsertData($data);
session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!');
            return redirect()->to('satuan');
        }

        public function UpdateData($id_satuan)
        {
            $data =[
                'id_satuan' => $id_satuan,
                'nama_satuan' => $this->request->getPost('nama_satuan')];
$this->ModelSatuan->UpdateData($data);
session()->setFlashdata('pesan', 'Data Berhasil DiUpdate !!');
            return redirect()->to('satuan');
        }


    public function DeleteData($id_satuan)
    {
        $data =[
            'id_satuan' => $id_satuan,
        ];
$this->ModelSatuan->DeleteData($data);
session()->setFlashdata('pesan', 'Data Berhasil Dihapus !!');
        return redirect()->to('satuan');
    }
}



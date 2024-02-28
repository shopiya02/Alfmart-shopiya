<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;


class Admin extends BaseController
{
    public function __construct()

{
    $this->ModelAdmin = new ModelAdmin();
}
    
        public function index()
        {
            $data = [
                'judul'=> 'Dashboard',
                'subjudul'=> '',
                'menu'=> 'Dashboard',
                'submenu'=> '',
                'page' =>'v_admin',
                'grafik' => $this->ModelAdmin->Grafik(),
                'p_hari_ini' => $this->ModelAdmin->PendapatanHariIni(),
                'p_bulan_ini' => $this->ModelAdmin->PendapatanBulanIni(),
                'p_tahun_ini' => $this->ModelAdmin->PendapatanTahunIni(),
                'jml_produk' => $this->ModelAdmin->JumlahProduk(),
                'jml_kategori' => $this->ModelAdmin->JumlahKategori(),
                'jml_satuan' => $this->ModelAdmin->JumlahSatuan(),
                'jml_user' => $this->ModelAdmin->JumlahUser(),
            ];
            return view('v_template', $data);
        }

        public function Cek()
        {
            echo dd($this->ModelAdmin->PendapatanTahunIni());
        }
    }
    
    
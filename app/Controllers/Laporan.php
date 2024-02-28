<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelProduk;
use App\Models\ModelLaporan;

class Laporan extends BaseController
{
    public function __construct() 
    {
        $this->ModelProduk = new ModelProduk();
        $this->ModelLaporan = new ModelLaporan();

    }
 public function PrintDataProduk()
 {
    $data = [
        'judul' => 'Laporan Data Produk',
        'produk' => $this->ModelProduk->AllData(),
        'page' => 'laporan/v_print_lap_produk',
         ];
         return view('laporan/v_template_print_laporan', $data);
     }

     public function LaporanHarian()
     {
        $data = [
            'judul'=> 'Laporan',
             'subjudul'=> 'Laporan Harian',
             'menu'=> 'laporan',
             'submenu'=> 'laporan-harian',
             'page' =>'laporan/v_laporan_harian',
             ];
             return view('v_template', $data);
     }

     public function ViewLaporanHarian()
     {
        $tgl = $this->request->getPost('tgl');
        $data = [
            'judul' =>'Laporan Harian Penjualan',
            'dataharian' => $this->ModelLaporan->DataHarian($tgl),
            'tgl' => $tgl,
        ];
         
       $response = [
        'data' => view('laporan/v_tabel_laporan_harian', $data)
       ];

       echo json_encode($response);
      // echo dd($this->ModelLaporan->DataHarian($tgl));
     }
   public function PrintLaporanHarian($tgl)
   {
    $data = [
        'judul' => 'Laporan Harian Penjualan',
        'page' => 'laporan/v_print_lap_harian',
        'dataharian' => $this->ModelLaporan->DataHarian($tgl),
         ];
         return view('laporan/v_template_print_laporan', $data);
   }

   public function LaporanBulanan()
   {
       $data = [
           'judul' => 'Laporan',
           'subjudul' => 'Laporan Bulanan',
          
           'menu' => 'laporan',
           'submenu' => 'laporan-bulanan',
           'page' => 'laporan/v_laporan_bulanan',
       ];
       return view('v_template', $data);
   }

   public function ViewLaporanBulanan()
   {
       $bulan = $this->request->getPost('bulan');
       $tahun = $this->request->getPost('tahun');
       $data = [
           'judul' => 'Laporan Penjualan Bulanan',
           'databulanan' => $this->ModelLaporan->DataBulanan($bulan, $tahun),
           'bulan' => $bulan,
           'tahun' => $tahun,
       ];

       $response = [
           'data' => view('laporan/v_tbl_laporan_bulanan', $data)
       ];

       echo json_encode($response);
       // echo dd($this->laporan->DataTahunan($bulan, $tahun));
   }

   public function PrintLaporanBulanan($bulan, $tahun)
   {
       $data = [
           'judul' => 'Laporan Penjualan Bulanan',
           'page' => 'laporan/v_print_laporan_bulanan',
           'databulanan' => $this->ModelLaporan->DataBulanan($bulan, $tahun),
           'bulan' => $bulan,
           'tahun' => $tahun,
       ];
       return view('laporan/v_template_print_laporan', $data);
   }
   // LAPORAN BULANAN /-->


   // LAPORAN TAHUNAN -->
   public function LaporanTahunan()
   {
       $data = [
           'judul' => 'Laporan',
           'subjudul' => 'Laporan Tahunan',
          
           'menu' => 'laporan',
           'submenu' => 'laporan-tahunan',
           'page' => 'laporan/v_laporan_tahunan',
       ];
       return view('v_template', $data);
   }

   public function ViewLaporanTahunan()
   {
       $tahun = $this->request->getPost('tahun');
       $data = [
           'judul' => 'Laporan Penjualan Tahunan',
           'datatahunan' => $this->ModelLaporan->DataTahunan($tahun),
           'tahun' => $tahun,
       ];

       $response = [
           'data' => view('laporan/v_tbl_laporan_tahunan', $data)
       ];

       echo json_encode($response);
       //echo dd($this->laporan->DataTahunan(2024));
   }

   public function PrintLaporanTahunan($tahun)
   {
       $data = [
           'judul' => 'Laporan Penjualan Tahunan',
           'page' => 'laporan/v_print_laporan_tahunan',
           'datatahunan' => $this->ModelLaporan->DataTahunan($tahun),
           'tahun' => $tahun,
       ];
       return view('laporan/v_template_print_laporan', $data);
   }

 }


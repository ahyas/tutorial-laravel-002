<?php

namespace App\Http\Controllers\kepegawaian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF; //include package DOMPDF

class KepegawaianController extends Controller
{
    public function index(){
        //menampilakan halaman awal saat mengakses aplikasi
        //Menampilkan tabel data pegawai
        $table=DB::table("tb_employee")->get();
        
        return view("kepegawaian/index", compact("table"));
    }
    
    public function cetak_pdf(){
        $table=DB::table("tb_employee")->get();
        $pdf = PDF::loadView('kepegawaian/cetak_pdf', ['table'=>$table])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream("file.pdf");
    }
}

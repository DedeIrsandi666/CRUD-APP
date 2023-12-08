<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
     public function index()
    {
        
       $pesans = Pemesanan::all();
       $pesan = 0;
    
            // $sums = DB::table('pemesanan')
            //     ->select(DB::raw("SUM(total) AS total_all"))
            //     ->select(DB::raw("MONTHNAME(created_at) AS bulan"))
            //     ->get();
           
                $query = "SELECT MONTHNAME(created_at) as bulan, YEAR(created_at) as tahun, SUM(total) AS total from pemesanan GROUP BY MONTH(created_at)";
                $keuangan = DB::select(DB::raw($query));

                // dd($keuangan);
                
        return view('keuangan.index', compact('pesans','pesan','keuangan'))->with('i', (request()->input('page',1)-1) * 20);

    }
}

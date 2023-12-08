<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pemesanan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PemesananRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PemesananController extends Controller
{
    public function index()
    {
        
       $pesans = Pemesanan::all();
       $pesan = 0;
       $menus = DB::table('menu')
            ->join('pemesanan', 'menu.id', '=', 'pemesanan.id_menu')
            ->get();
    
        return view('pemesanan.index', compact('pesans','pesan','menus'))->with('i', (request()->input('page',1)-1) * 20);

        // $sums = DB::table('menu')
        //     ->select(DB::raw("SUM(harga) AS total_all"))
        //     ->get();
    }

    public function create()
    {
        $pesans = Pemesanan::all();
        return view('pemesanan.create',compact('pesans'));
    }

    public function store(PemesananRequest $request)
    {
        //$validated = $request->validate([]);
        // $request->validate([
        //     'nm_pelanggan' => 'required|max:50',
        //     'id_menu' => 'required',
        //     'jumlah' => 'required|numeric|min:0|not_in:0|max:3',
        //     'kursi' => 'required',
        //     'ket' => 'required|max:200',
           
        // ]);
        //ambil data menu berdasarkan id menu
        $menu = Menu::where('id','=',$request->id_menu)->first();
        $jumlah = $request->jumlah;
        $total =  $jumlah * $menu->harga;

        // dd($total);
        Pemesanan::create([
            'nm_pelanggan' => $request->nm_pelanggan,
            'id_menu' => $request->id_menu,
            'jumlah' => $request->jumlah,
            'kursi' => $request->kursi,
            'ket' => $request->ket,
            'total' => $total,
        ]);

        // DB::table('produk')->where('id',$request->produk)->update([
        //     'stok' => $sisa ]);

        // return redirect()->route('peminjaman.index')
        //     ->with('success', 'Data berhasil disimpan.');

        //Pemesanan::create($request->all());
        return redirect()->route('pemesanan.index')
            ->with('success', 'Pesanan Berhasil Di pesan!');
    
    }

    public function destroy(Pemesanan $pemesanan)
    {
        $pemesanan->delete();
        return redirect()->route('pemesanan.index')
        ->with('success','Data berhasil dihapus');
    }
}

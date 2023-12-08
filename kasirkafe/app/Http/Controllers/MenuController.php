<?php

namespace App\Http\Controllers;                  
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
   
    {
        
    //     $pemesanans = DB::table('pemesanan')
    //     ->join('menu', 'menu.id', '=', 'pemesanan.menu')
    //     ->get();
    $menus = Menu::latest() ->paginate(20);
    return view('menu.index', compact('menus'))->with('i', (request()->input('page',1)-1) * 20);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $menus = Menu::latest() 
        ->where('nama_menu', 'LIKE', '%'.$cari.'%')
        ->orWhere('harga', 'LIKE', '%'.$cari.'%')->paginate(20);
        
    return view('menu.index', compact('menus'))->with('i', (request()->input('page',1)-1) * 20);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_menu' => 'required',
            'harga' => 'required',
            'ket' => 'required' ,
            'foto' => 'required' ,
            
        ]); 
        $file = $request->file('foto');
        $nama_file = time()."_". $file->getClientOriginalName();

        $tujuan_upload = 'data_img';
        $file->move($tujuan_upload,$nama_file);

    Menu::create([
        'nama_menu' => $request->nama_menu,
        'harga' => $request->harga,
        'ket' => $request->ket ,
        'foto' => $nama_file,
    ]);

    return redirect()->route('menu.index')
    ->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        $menus = Menu::all();
        return view('pemesanan.mesan', compact('menus','menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $this->validate($request,[
            'nama_menu' => 'required',
            'harga' => 'required' ,
            'ket' => 'required' ,
            
        ]);
        $menu->update($request->all());
        return redirect()->route('menu.index')
        ->with('success', 'Data Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')
        ->with('success','Data berhasil dihapus');
    }
}

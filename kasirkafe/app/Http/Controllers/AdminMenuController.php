<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Adminmenu;
use Illuminate\Http\Request;
use App\Http\Requests\AdminmenuRequest;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   
    {
    $menus = Adminmenu::latest()->paginate(20);
    return view('adminmenu.index', compact('menus'))->with('i', (request()->input('page',1)-1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminmenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminmenuRequest $request)
    {
        // $this->validate($request,[
        //     'nama_menu' => 'required|max:50',
        //     'harga' => 'required|numeric|min:0|not_in:0',
        //     'ket' => 'required|max:200' ,
        //     'foto' => 'required' ,
            
        // ]); 

        $file = $request->file('foto');
        $nama_file = time()."_". $file->getClientOriginalName();

        $tujuan_upload = 'data_img';
        $file->move($tujuan_upload,$nama_file);

        Adminmenu::create([
        'nama_menu' => $request->nama_menu,
        'harga' => $request->harga,
        'ket' => $request->ket ,
        'foto' => $nama_file,
    ]);

    return redirect()->route('adminmenu.index')
    ->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminmenu $adminmenu)
    {
        return view('adminmenu.edit',compact('adminmenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminmenu $adminmenu)
    {
        $this->validate($request,[
            'nama_menu' => 'required',
            'harga' => 'required' ,
            'ket' => 'required' ,
            
        ]);
        $adminmenu->update($request->all());
        return redirect()->route('adminmenu.index')
        ->with('success', 'Data Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminmenu $adminmenu)
    {
        $adminmenu->delete();
        return redirect()->route('adminmenu.index')
        ->with('success','Data berhasil dihapus');
    }
}

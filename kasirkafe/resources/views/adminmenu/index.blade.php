
@extends('layout')
@section('title', 'Halaman Pengelolaan Menu')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Daftar Menu</h1>
<div class="card mb-4">
    <div class="card-header"><i class="ti-agenda mr-1"></i> Daftar Menu</div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($massage = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $massage }}</p>
        </div>
@endif
<a  class="btn btn-success" href="{{ route('adminmenu.create') }} "><i class="ti-pencil"></i> Tambah Daftar Menu</a><p></p>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                           
                            @foreach ($menus as $menu)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $menu->nama_menu }}</td>
                                <td>Rp. {{ $menu->harga}}</td>
                                <td>{{ $menu->ket}}</td>
                                <td>
                                    <img width="150px" align="center" src="{{ url('/data_img/'.$menu->foto) }}">
                                </td>
                                <td>
                                    <form action="{{ route('adminmenu.destroy',$menu->id) }}"  method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-warning" href="{{ route('adminmenu.edit',$menu->id) }}">Ubah</a><br>
                                        <button type = "submit" class="btn btn-danger" onclick="javascript: 
                                        return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>                                                                                                     

                                    </form>                                                                                                                                                                                                                                                                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


               
                    


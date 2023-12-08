
@extends('layout')
@section('title', 'Halaman Daftar Pemesanan')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Daftar Pemesanan</h1>
<div class="card mb-4">
    <div class="card-header"><i class="ti-clipboard mr-1"></i> Daftar Pemesanan</div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($massage = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $massage }}</p>
        </div>
@endif

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Menu</th>
                            <th>Nama Pelanggan</th>
                            <th>Jumlah Pemesanan</th>
                            <th>Nomor Kursi</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                            <th>Total Pembayaran</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                           
                            @foreach ($menus as $pes)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $pes->created_at}}</td>
                                <td>{{ $pes->nama_menu }}</td>
                                <td>{{ $pes->nm_pelanggan}}</td>
                                <td><strong>{{ $pes->jumlah}}</strong></td>
                                <td>{{ $pes->kursi}}</td>
                                <td>{{ $pes->ket}}</td>
                                <td><strong>Rp. {{ number_format($pes->harga)}}</strong></td>
                                <td><strong>Rp. {{ number_format($pes->total)}}</strong></td>
                                
                                <td>
                                    <form action="{{ route('pemesanan.destroy',$pes->id) }}"  method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type = "submit" class="btn btn-danger" onclick="javascript: 
                                        return confirm('Apakah Anda yakin ingin membatalkan pemesanan ini?')"><i class="ti-close"></i> Batalkan</button>                                                                                                     

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


               
                    


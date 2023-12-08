
@extends('layout')
@section('title', 'Halaman Keuangan')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Pengelolaan Keuangan</h1>
<div class="card mb-4">
    <div class="card-header"><i class="ti-money mr-1"></i> Pengolahan Keuangan</div>
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
                            <th>Bulan Transaksi</th>
                            <th>Total Rekap Bulanan</th>
                            </tr>
                    </thead>
                    <tbody>
                           @php
                            $total_semua = 0;
                           @endphp
                            @foreach ($keuangan as $pes)
                            @php
                                $total_semua = $total_semua + $pes->total;
                            @endphp
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $pes->bulan }} {{$pes->tahun }}</td>
                                <td><strong>Rp. {{ number_format($pes->total)}}</strong></td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                           <tr >
                                <th class="text-right" colspan="2">Total Rekap Bulanan</th>
                                <th>Rp. {{ number_format($total_semua) }}</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


               
                    


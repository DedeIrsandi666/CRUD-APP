
@extends('layout')
@section('title', 'Halaman Daftar Menu')

@section('content')
<div class="container-fluid">
  <h1 class="mt-4">Daftar Menu Kopi</h1><br>

    <form action="/cari" method="GET">
    @csrf
      <div class="form-row">
        <div class="col-md-3">
          <div class="form-group">
              <input type="text" name="cari" placeholder="Tuliskan menu yang anda cari" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
              <i class="ti-search"></i> <input type="submit" class="btn btn-primary" value="Cari Menu">
            </div>
          </div>
      </form>

<div class="card mb-4">
            <div class="card-header"><i class="ti-book mr-1"></i> Aneka Minuman Kopi</div>

            <div class="card-body">
                <div class="table-responsive">
                @if ($massage = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $massage }}</p>
                    </div>
                @endif

    

             <strong><p align="center">jika ingin memesan minuman yang ada di menu klik tombol keranjang warna hijau!</p></strong><br>

  {{-- <div class="container">
    <div class="card-deck">
      @foreach ($menus as $menu)
        <div class="card">
          <img src="{{ url('/data_img/'.$menu->foto) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $menu->nama_menu }}</h5>
            <strong><p class="card-text">Rp. {{ number_format($menu->harga) }}</p></strong>
            <p class="card-text"><small class="text-muted">{{ $menu->ket}}</small></p>
            <a href="{{ route('menu.show',$menu->id) }}"class="btn btn-md btn-success"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
          </div>
        </div>
      @endforeach
    </div>
  </div> --}}

  <div class="card-group">
	<div class="row no-gutters">
    @foreach ($menus as $menu)
		<div class="col-md-4 mb-3">
			<img src="{{ url('/data_img/'.$menu->foto) }}" class="card-img-top" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
        <h5 class="card-title">{{ $menu->nama_menu }}</h5>
            <strong><p class="card-text"> Rp. {{ number_format($menu->harga) }}</p></strong><br>
            <p class="card-text"><small class="text-muted">{{ $menu->ket}}</small></p>
            <a href="{{ route('menu.show',$menu->id) }}"class="btn btn-md btn-success btn-lg"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
			</div>
		</div>
    @endforeach
	</div>
</div>
</div>

{{-- <div class="row">
  @foreach ($menus as $menu)
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Jumlah Mobil</div>
                  <div class="col-md-4">
                    <img src="{{ url('/data_img/'.$menu->foto) }}" width="100%" class="card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $menu->nama_menu }}</h5>
                          <p class="card-text"> Rp. {{ number_format($menu->harga) }}</p>
                          <p class="card-text"><small class="text-muted">{{ $menu->ket}}</small></p>
                          <a href="{{ route('menu.show',$menu->id) }}"class="btn btn-md btn-success"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  
                  <div class="card-body"><canvas id="jumlah_mobil" width="100%" height="40"></canvas></div>
                </div>
              </div>
              @endforeach
            </div> --}}
@endsection


               
                    


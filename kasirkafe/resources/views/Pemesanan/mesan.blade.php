@extends('layout')

@section('title', 'Halaman Pemesanan')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Form Pemesanan</h1>
<div class="card mb-4">
    <div class="card-header"><i class="ti-write mr-1"></i> Pemesanan</div>

@if ($errors-> any())
<div class= "alert alert-danger">
    <strong> Whoops </strong> there were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
     </ul>
</div>
@endif

<form action="{{ route('pemesanan.store') }}" method ="POST" enctype="multipart/form-data">
    @csrf 
    @method('POST')
    <div class="form-row">
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Nama Pelanggan:</strong>
            <input type="text" name="nm_pelanggan" class="form-control" placeholder="Isikan Nama Anda">
         </div> 
        </div>
        
        {{-- <div class= "col-md-12">
         <div class="form-group">
           <strong for="">Nama Kopi:</strong>
           <select class="form-control" name="id_menu" id="">
            @foreach ($menus as $m )
                
            <option value="{{ $m->id}}" {{$m->id==$menu->id?'selected':''}}>{{ $m->nama_menu}}</option>
            @endforeach
           </select>
         </div>
        </div> --}}

        <div class="col-md-12">
            <div class="form-group">
                <strong>Nama Kopi:</strong>
                <select class="form-control" name="id_menu" id="id_menu" onchange="changeValue(this.value)">
                    <option>~Pilih Menu~</option>

					<?php
                    $jsArray = "var prdName = new Array();\n";
                    ?>

                     @foreach ($menus as $mn)
                    <option value="{{ $mn->id }}" {{$mn->id==$menu->id?'selected':''}}>{{ $mn->nama_menu }}</option>
                    <?php
                    $jsArray .= "prdName['". $mn->id ."'] = {
                    harga:'".addslashes( $mn->harga )."'};\n";
                     ?>

                    @endforeach
                    
                </select>
            </div>
        </div>
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Jumlah Pemesanan:</strong>
            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah yang anda pesan">
         </div> 
        </div>
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Nomor Kursi:</strong><br>
            <select name="kursi" id="kursi" class="form-control">
               <option value="">~Pilih Nomor Kursi Yang Tersedia~</option disable>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
            </select>
            {{-- <input type="number" min="1" name="kursi" class="form-control" placeholder="Isikan nomor kursi anda"> --}}
         </div> 
        </div>
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Keterangan:</strong>
            <textarea class="form-control" style="height:150px" name="ket" placeholder="Keterangan"></textarea>
            {{-- <input type="text" name="ket" class="form-control" placeholder="keterangan"> --}}
         </div> 
        </div>

        <div class= "col-xs-12 col-sm-12 col-md-12 text-centre mt-13">
            <button type="submit" class="btn btn-success"><i class="ti-check-box"></i> Pesan</button>
            <a class="btn btn-primary" href="{{ route('menu.index') }}"><i class="ti-back-left"></i> Kembali</a>
        </div>
     </div>
</form>
<script type="text/javascript">
  <?php echo $jsArray; ?>
  function changeValue(x){
    document.getElementById('harga').value = prdName[x].harga;
  }
</script>
</div>
</div>
    
@endsection




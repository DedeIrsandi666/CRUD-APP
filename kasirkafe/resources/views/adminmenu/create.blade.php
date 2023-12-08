@extends('layout')
@section('title', 'Halaman Penambahan Menu Baru')

@section('content')
<div class="container-fluid">
   <h1 class="mt-4">Form Penambahan Daftar Menu</h1>
                        
      <div class="card mb-4">
         <div class="card-header"><i class="ti-pencil-alt mr-1"></i> Form Penambahan Daftar Menu</div>
            <div class="card-body">
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
               <form action="{{ route('adminmenu.store') }}" method ="POST" enctype="multipart/form-data">
                  @csrf 
                  <div class="form-row">
                     <div class= "col-md-12">
                        <div class= "form-group">
                           <strong>Nama Menu:</strong>
                           <input type="text" name="nama_menu" class="form-control" placeholder="Nama Menu">
                        </div> 
                     </div>
                     
                     <div class= "col-md-12">
                        <div class= "form-group">
                           <strong>Harga:</strong>
                           <input type="text" name="harga" class="form-control" placeholder="Harga">
                        </div> 
                     </div>
                     
                     <div class= "col-md-12">
                        <div class= "form-group">
                           <strong>Keterangan:</strong>
                           <textarea class="form-control" style="height:150px" name="ket" placeholder="Keterangan"></textarea>
                           {{-- <input type="text" name="ket" class="form-control" placeholder="Keterangan"> --}}
                        </div> 
                     </div>



                     <div class= "col-md-12">
                        <div class= "form-group">
                           <strong>Foto:</strong>
                           <input type="file" name="foto">
                        </div> 
                     </div>

                     
                           
                     <div class= "col-xs-12 col-sm-12 col-md-12 text-centre mt-13">
                           <button type="submit" class="btn btn-success"><i class="ti-check-box"></i> Buat</button>
                           <a class="btn btn-primary" href="{{ route('adminmenu.index') }}"><i class="ti-back-left"></i> Kembali</a>
                     </div>
                  </div>
               </form>
@endsection
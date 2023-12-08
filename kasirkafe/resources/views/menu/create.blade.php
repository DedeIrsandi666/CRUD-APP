@extends('layout')
@section('content')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Daftar Menu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Menu</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-edit mr-1"></i>Daftar Menu</div>
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
<form action="{{ route('menu.store') }}" method ="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-row">
        <div class= "col-md-12">
         <div class= "form-group">
            <label>Nama Menu:</label>
            <input type="text" name="nama_menu" class="form-control" placeholder="Nama Menu">
         </div> 
        </div>
        
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Harga:</strong>
            <input type="number" name="harga" class="form-control" placeholder="Harga">
         </div> 
        </div>
        
        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Keterangan:</strong>
            <input type="text" name="ket" class="form-control" placeholder="Keterangan">
         </div> 
        </div>



        <div class= "col-md-12">
         <div class= "form-group">
            <strong>Foto:</strong>
            <input type="file" name="foto">
         </div> 
        </div>

        
            
        <div class= "col-xs-12 col-sm-12 col-md-12 text-centre mt-13">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-primary" href="{{ route('menu.index') }}">Back</a>
        </div>
     </div>
</form>
@endsection
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
<div class="content-wrapper">
<h3>PEMINJAMAN</h3>
<form method="post" action="{{ route('update') }}">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$barang->id}}">

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Nama Barang</label> 
<input type="text" name="namabarang" value="{{$barang->namabarang}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Kode Barang</label> 
<input type="text" name="kodebarang" value="{{$barang->kodebarang}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Jumlah Barang</label> 
<input type="text" name="jumlahbarang" value="{{$barang->jumlahbarang}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Status Barang</label> 
<input type="text" name="status" value="{{$barang->status}}">
</div>
</div>



<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-danger">masukan data</button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>

</body>
</html>
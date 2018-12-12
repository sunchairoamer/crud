<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Barang</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
<div class="content-wrapper">
<h3>PINJAM BARANG</h3>
<form method="post" action="{{url('Barang/save')}}">

{{ csrf_field() }}

<form method="post" action="{{url('Pinjam/save')}}">

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="namabarang">Nama Barang</label> 
<input id="namabarang" class="form-control" type="text" name="namabarang">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="kodebarang">Kode Barang</label> 
<input id="kodebarang" class="form-control" type="text" name="kodebarang">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="jumlahbarang">Jumlah Barang</label> 
<input id="jumlahbarang" class="form-control" type="text" name="jumlahbarang">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="status">Status</label> 
<input id="status" class="form-control" type="text" name="status">
</div>
</div>



<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success">masukan data</button>
</div>
</div>



</div>
</div>
</form>
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pinjam</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
<div class="content-wrapper">
<h3>PINJAM BARANG</h3>
<form method="post" action="{{url('Pinjam/save')}}">

{{ csrf_field() }}
<input type="hidden" name="id" value="{{$barang->id}}">

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="namabarang">Nama Barang</label> 
<input id="namabarang" class="form-control" type="text" name="namabarang" value="{{$barang->namabarang}}" readonly>
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="kodebarang">Kode Barang</label> 
<input id="kodebarang" class="form-control" type="text" name="kodebarang" value="{{$barang->kodebarang}}" readonly>
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="jumlah">Jumlah Barang</label> 
<input type="text" name="jumlahbarang" value="{{$barang->jumlahbarang}}" readonly>
<input id="jumlah" class="form-control" type="text" name="jumlah" max="{{$barang->jumlahbarang}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="namapeminjam">Nama Peminjam</label> 
<input id="namapeminjam" class="form-control" type="text" name="namapeminjam">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="kelas">Kelas</label> 
<input id="kelas" class="form-control" type="text" name="kelas">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="waktu">Waktu</label> 
<input id="waktu" class="form-control" type="text" name="waktu">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success" style="margin: 40px">Pinjam</button>
</div>
</div>
</form>
</div>
</div>
</body>
</html>
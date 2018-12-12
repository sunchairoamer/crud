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
<h3>MUTASI</h3>
<form method="post" action="{{ route('update') }}">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$mutasi->id}}">

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">ID Barang</label> 
<input type="text" name="id_barang" value="{{$mutasi->id_barang}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Jumlah Barang</label> 
<input type="text" name="jumlahbarang" value="{{$mutasi->jumlahbarang}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Status</label> 
<input type="text" name="status" value="{{$mutasi->status}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Pengirim</label> 
<input type="text" name="pengirim" value="{{$mutasi->pengirim}}">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Penerima</label> 
<input type="text" name="penerima" value="{{$mutasi->penerima}}">
</div>
</div>



<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit">masukan data</button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>

</body>
</html>
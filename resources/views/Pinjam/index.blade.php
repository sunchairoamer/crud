<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{('css/app.css')}}">
</head>
<body>

<div class="container">
<div class="content-wrapper">
<style>
	table{
		font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}

	td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
<section class="content">
<div class="box">
<div class="box-header">
<h2>data</h2>

<table class="table table-stripped">
 		<tr>
			<th>nama barang</th>
			<th>kode barang</th>
			<th>nama peminjam</th>
			<th>jumlah</th>	
			<th>kelas</th>		
			<th>waktu</th>
			<th>Aksi</th>
		</tr>
	
	<tbody>
		@foreach($pinjam as $key)
		<tr>
			<td>{{$key->Barang->namabarang}}</td>
			<td>{{$key->Barang->kodebarang}}</td>
			<td>{{$key->namapeminjam}}</td>
			<td>{{$key->jumlah}}</td>
			<td>{{$key->kelas}}</td>
			<td>{{$key->waktu}}</td>
			<td><a href="{{url('Pengembalian/create/'.$key->id)}}"><button type="button" class="btn btn-warning"><i class="fa fa-print"></i>Balik</button></a></td>
			
		</tr>
		@endforeach
	</tbody>
	

</table>
</div>
<a href="{{url('Barang')}}"><button class="btn btn-primary">Pinjam Barang</button></a>

	</div>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mutasi</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="content-wrapper">
<div class="container">
<style>
	table{
		font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}

	table,td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
<section class="content">
<div class="box">
<div class="box-header">
<h3 class="box-tittle">Daftar Barang Mutasi</h3>



<table class="table table-stripped">

	<thead>
 		<tr>
			<th>id_barang</th>
			<th>Nama Barang </th>
			<th>jumlah mutasi</th>
			<th>namainstansi</th>
			<th>keterangan</th>
			
		</tr>
		</thead>
		@foreach($mutasi as $key)
	<tbody>
		<tr>
			<td>{{$key->id_barang}}</td>
			<td>{{$key->namabarang}}</td>
			<td>{{$key->jumlahmutasi}}</td>
			<td>{{$key->namainstansi}}</td>
			<td>{{$key->keterangan}}</td>
		
			<td>
			 	

				@if(Auth::user()->role == "1")
				<a href="{{route('delete',[$key->id])}}" onclick="return confirm('hapus?')"><button>delete</button>
				<span class="sr-only">(current)</span>
				</a>
				@endif
				
			</td>
		</tr>
			@endforeach
	</tbody>
</table>
	</div>
	@if(Auth::user()->role == "1")
	<a href="{{url('Mutasi/create')}}"><button>tambah</button>
	<span class="sr-only">(current)</span>
	</a>
	@endif
<a href="{{url('Mutasi')}}"><button>Report Mutasi</button></a>
<a href="{{url('home')}}"><button>Home</button></a>
	</div>
	</section>
	</div>

	</div>

</body>
</html>
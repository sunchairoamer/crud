<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Barang</title>
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
<h3 class="box-tittle">Daftar Barang</h3>



<table class="table table-stripped">

	<thead>
 		<tr>
			<th>namabarang</th>
			<th>kodebarang</th>
			<th>jumlahbarang</th>
			<th>status</th>
			<th>Aksi</th>
		</tr>
		</thead>
		@foreach($barang as $key)
	<tbody>
		<tr>
			<td>{{$key->namabarang}}</td>
			<td>{{$key->kodebarang}}</td>
			<td>{{$key->jumlahbarang}}</td>
			<td>{{$key->status}}</td>
			<td>
			 	@if(Auth::user()->role == "1")
				<a href="{{route('editBarang',[$key->id])}}"><button>edit</button>
				<span class="sr-only">(current)</span>
				</a>
				@endif

				@if(Auth::user()->role == "1")
				<a href="{{route('deleteBarang',[$key->id])}}" onclick="return confirm('hapus?')"><button>delete</button>
				<span class="sr-only">(current)</span>
				</a>
				@endif
				<a href="{{url('Pinjam/create/'.$key->id)}}"><button>pinjam</button></a>

				@if(Auth::user()->role == "1")
	<!-- <a href="{{url('Mutasi/create/'.$key->id)}}"><button>mutasi</button>
	<span class="sr-only">(current)</span>
	</a> -->
	@endif
			</td>
		</tr>
			@endforeach
	</tbody>
</table>
	</div>
	@if(Auth::user()->role == "1")
	<a href="{{url('Barang/create')}}"><button type="button" class="btn btn-primary">Tambah</button>
	<span class="sr-only">(current)</span>
	</a>
	@endif
	
<a href="{{url('Pinjam')}}"><button class="btn btn-primary">Report Pinjam</button></a>
<a href="{{url('home')}}"><button class="btn btn-primary">Home</button></a>
	</div>
	</section>
	</div>

	</div>

</body>
</html>
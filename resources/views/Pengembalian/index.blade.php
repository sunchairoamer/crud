@extends('layouts.app')

@section('title')
Pengembalian
@endsection

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Data Pengembalian</h3>
<div class="box-tools">
</div>

    </div>

	<div class="box-body table-responsive no-padding">
<table class="table table-hover">

		<thead>
		<tr>
			<th>Tanggal Pengembalian</th>
			<th>ID Peminjam</th>
			<th>Nama Peminjam</th>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Jumlah Barang</th>
			<th>Status</th>
			</tr>
		</thead>

		<tbody>
			@foreach($pengembalian as $key)
				<tr>
					<td>{{$key->created_at}}</td>
					<td>{{$key->id_pengembalian}}</td>
					<td>{{$key->namapengembalian}}</td>
					<td>{{$key->id_barang}}</td>
					<td>{{$key->namabarang}}</td>
					<td>{{$key->jumlahbarang}}</td>
					<td><b style="color:green;">{{$key->keterangan}}</b></td>
					<td>
					@if($key->keterangan == 'unreturned')
					<a href="{{url('kembalikan/',$pengembalian->id_barang)}}" class="btn btn-danger">kembalikan</a>
					@elseif($key->keterangan == 'returned')
					sudah dikembalikan
					@endif
						
					</td>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>
<div class="row">
		<div class="col-md-4"></div>
		<div class="form-group col-md-4">
			
			<a href="{{ route('pdfall',[$key->id])}}" style="margin-left:700px"><button class="btn btn-success">Print</button></a>
		</div>
	</div>
</div>
</div>
</section>
</div>
@endsection
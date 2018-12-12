@extends('layouts.app')

@section('title')
Create Data Pengembalian
@endsection

@section('content')
<div class="content-wrapper">
<section class="content">
<div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Create Data Pengembalian</h3>
      </div>

<form method="POST" action="{{url('Pengembalian/save')}}">
<div class="box-body">
            <div class="col-sm-12">
	{{ csrf_field() }}
	<input type="hidden" name="id">

	<div class="form-group">
	<label for="name">ID Pengembalian</label>
	<input id="id_pengembalian" class="form-control" type="text" value="{{$data_pengembalian->id}}" name="id_pengembalian" placeholder="ID Pengembalian" readonly>
	</div>

	<div class="form-group">
	<label for="name">Nama Pengembali</label>
	<input id="namapengembalian" class="form-control" type="text" value="{{$data_pengembalian->name}}" name="namapengembalian" placeholder="Nama Pengembalian" readonly>
	</div>

	<div class="form-group">
	<label for="name">ID Barang</label>
	<input id="id_barang" class="form-control" type="text" value="{{$pinjam->id_barang}}" name="id_barang" placeholder="ID Barang" readonly>
	</div>

	<div class="form-group">
	<label for="namabarang">Nama Barang</label>
	<input id="namabarang" class="form-control" type="text" value="{{$barang->namabarang}}" name="namabarang" readonly>
	</div>

	<div class="form-group">
	<label for="name">Jumlah Barang</label>
	<!-- <input id="jumlah" type="text" name="jumlah" class="form-control" value="{{$pinjam->jumlah}}" readonly > -->
	<input id="jumlahbarang" class="form-control" type="text" value="{{$pinjam->jumlah_barang}}" name="jumlahbarang">
	</div>

	

	<center>
    <button style="width: 200px;" type="submit" class="btn btn-success pull-right">Masukan Data</button>
    <br>
    <br>
    </center>
    </div>
    </div>
</form>
<br>
 </div>
 </div>
 </section>
 </div>
 @endsection
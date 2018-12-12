@extends('layouts.app')

@section('title')
Edit Data Pengembalian
@endsection

@section('content')
<div class="content-wrapper">
<section class="content">
<div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Data Pengembalian</h3>
      </div>

<form method="POST" action="{{url('pengembalian/update')}}">
<div class="box-body">
            <div class="col-sm-12">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{$pengembalian->id}}">

	<div class="form-group">
	<label for="name">ID Pengembalian</label>
	<input id="id_pengembalian" class="form-control" type="text" name="id_pengembalian" placeholder="ID Pengembalian" value="{{$pengembalian->id_pengembalian}}">
	</div>

	<div class="form-group">
	<label for="name">Nama Pengembalian</label>
	<input id="namapengembalian" class="form-control" type="text" name="namapengembalian" placeholder="Nama Pengembalian" value="{{$pengembalian->namapengembalian}}">
	</div>

	<div class="form-group">
	<label for="name">ID Barang</label>
	<input id="id_barang" class="form-control" type="text" name="id_barang" placeholder="ID Barang" value="{{$pengembalian->id_barang}}">
	</div>

	<div class="form-group">
	<label for="name">Nama Barang</label>
	<input id="namabarang" class="form-control" type="text" name="namabarang" placeholder="Nama Barang" value="{{$pengembalian->namabarang}}">
	</div>

	<div class="form-group">
	<label for="name">Jumlah Barang</label>
	<input id="jumlahbarang" class="form-control" type="text" name="jumlahbarang" placeholder="Jumlah Barang" value="{{$pengembalian->jumlahbarang}}">
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
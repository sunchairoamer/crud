@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{url('Barang')}}"><button class="btn btn-success btn-lg btn-block">Barang</button></a>
           <br>
            <a href="{{url('Pinjam')}}"><button class="btn btn-success btn-lg btn-block">Pinjam</button></a>
            <br>
            <a href="{{url('Pengembalian')}}"><button class="btn btn-success btn-lg btn-block">Pengembalian</button></a>
            <!-- <a href="{{url('Mutasi')}}"><button class="btn btn-success btn-lg btn-block">Mutasi</button></a> -->
        </div>
    </div>
</div>
@endsection

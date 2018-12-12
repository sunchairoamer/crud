<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Barang;
use \App\Pinjam;
use \App\Pengembalian;
use Auth;
use PDF;


class PengembalianController extends Controller
{
	 public function indexpengembalian()
    {
    	$data['pengembalian'] = \App\Pengembalian::all();
    	// dd($data);
    	return view('Pengembalian.index',$data);
    }

    public function createpengembalian($id)
    {
        $data['pinjam'] = Pinjam::where('id',$id)->first();
        $data['barang'] = Barang::where('id',$id)->first();
        $data['data_pengembalian'] = Auth::user();
    	return view('Pengembalian.create',$data);
    }

    public function savepengembalian(Request $r)
    {
        $update = Barang::where('id',$r->input('id_barang'))->first();
        $update->jumlahbarang += $r->input('jumlahbarang');
        $update->update();

    	$pengembalian = new Pengembalian;

    	$pengembalian->id_pengembalian = $r->input('id_pengembalian');
    	$pengembalian->namapengembalian = $r->input('namapengembalian');
    	$pengembalian->id_barang = $r->input('id_barang');
    	$pengembalian->namabarang = $r->input('namabarang');
    	$pengembalian->jumlahbarang = $r->input('jumlahbarang');
        $pengembalian->keterangan = "Sudah Dikembalikan";

    	$pengembalian->save();

    	return redirect(url('Pengembalian'));
    }


    public function pdfall(Request $r)
    {
    	$pinjam = Pinjam::find($r->input('id'));
        $data['pengembalian'] = Pengembalian::all();
        $pdf = PDF::loadview('Pengembalian.pdfall',$data);
        return $pdf->download('DataPengembalian.pdf');
    }

    // public function pdfall()
    // {
    //     $data['pengembalian'] = Pengembalian::all();
    //     $data['pinjam'] = Pinjam::all();
    //     $pdf = PDF::loadview('Pengembalian.pdfall',$data);
    //     return $pdf->download('DataPengembalian.pdf');
    // }

    public function create($id)
    {
    	$pinjam = Pinjam::find($id);
    	$pinjam->status = 'returned';
    	$barang = Barang::find($pinjam->id_barang);
    	$barang->count += $pinjam->count;
    	$barang->save();
    	$pinjam->save();
    	return redirect(url('request/datapinjam'));
    }
}

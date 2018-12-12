<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutasi;
use App\Barang;

class MutasiController extends Controller
{
     public function indexmutasi()
    {
    	$data['mutasi'] = \App\Mutasi::all();
    	return view('Mutasi.index')->with($data);

    }

    public function createmutasi($id)
    {
    	
    	$data['barang'] = Barang::where('id',$id)->first();
    	return view('Mutasi.create',$data);
    }

    public function savemutasi(Request $r)
    {
    	  $update = Barang::where('id',$r->input('id'))->first();
       $update->jumlahbarang -= $r->input('jumlahmutasi');
       $update->update();

        // dd($r->input());
    	$mutasi = new Mutasi;
    	$mutasi->id_barang = $r->input('id');
    	$mutasi->namabarang = $r->input('namabarang');
    	$mutasi->jumlahmutasi = $r->input('jumlahmutasi');
    	$mutasi->namainstansi = $r->input('namainstansi');
        $mutasi->keterangan = $r->input('keterangan');
    	$mutasi->save();

    	return redirect(url('Mutasi'));
    }

    public function editmutasi($id)
    {
    	$data['mutasi'] = Mutasi::find($id);
    	return view('Mutasi.edit', $data);
    }

    public function updatemutasi(Request $r)
    {
    	$edit = Mutasi::find($r->input('id'));
    	$edit->id_barang = $r->input('id_barang');
    	$edit->namabarang = $r->input('namabarang');
    	$edit->jumlahbarang = $r->input('jumlahbarang');
        $edit->status = $r->input('status');
    	$edit->pengirim = $r->input('pengirim');
    	$edit->penerima = $r->input('penerima');
    	$edit->save();

    	return redirect(url('/Mutasi'));
    }

    public function deletemutasi($id)
    {
    	Mutasi::whereId($id)->delete();

    	return redirect(url('/Mutasi'));

    }
}

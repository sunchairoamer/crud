<?php

namespace App\Http\Controllers;

use App\Pinjam as Pinjam;
use App\Barang as Barang;
use Illuminate\Http\Request;
use PDF;


class PinjamController extends Controller
{

    public function indexpinjam()
    {
    	$data['pinjam'] = Pinjam::all();
    	return view('Pinjam.index',$data);
    }

    public function createpinjam($id)
    {
    	$data['barang'] = Barang::where('id',$id)->first();
    	return view('Pinjam.create',$data);
    }

    public function savepinjam(Request $r)
    {
       $update = Barang::where('id',$r->input('id'))->first();
       $update->jumlahbarang -= $r->input('jumlah');
       $update->update();

    	$pinjam = new Pinjam;
        $pinjam->id_barang = $r->input('id');
        $pinjam->namapeminjam = $r->input('namapeminjam');
        $pinjam->namabarang = $r->input('namabarang');
        $pinjam->jumlah = $r->input('jumlah');
    	$pinjam->waktu = $r->input('waktu');
    	$pinjam->kelas = $r->input('kelas');
    	
    	$pinjam->save();

    	return redirect('Pinjam');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function indexbarang()
    {
    	$data['barang'] = \App\Barang::all();
    	return view('Barang.index')->with($data);

    }

    public function createbarang()
    {
    	
    	$data['barang'] = \App\Barang::all();
    	return view('Barang.create');
    }

    public function savebarang(Request $r)
    {
        // dd($r->input());
    	$barang = new Barang;
    	$barang->namabarang = $r->input('namabarang');
    	$barang->kodebarang = $r->input('kodebarang');
        $barang->jumlahbarang = $r->input('jumlahbarang');
    	$barang->status = $r->input('status');
    	$barang->save();

    	return redirect(url('/Barang'));
    }

    public function editbarang($id)
    {
    	$data['barang'] = Barang::find($id);
    	return view('Barang.edit', $data);
    }

    public function updatebarang(Request $r)
    {
    	$edit = Barang::find($r->input('id'));
    	$edit->namabarang = $r->input('namabarang');
    	$edit->kodebarang = $r->input('kodebarang');
        $edit->jumlahbarang = $r->input('jumlahbarang');
    	$edit->status = $r->input('status');
    	$edit->save();

    	return redirect(url('/Barang'));
    }

    public function deletebarang($id)
    {
    	Barang::whereId($id)->delete();

    	return redirect(url('/Barang'));

    }
}

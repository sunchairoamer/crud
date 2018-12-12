<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    public function Pinjam()
    {
    	return $this->belongsTo('App\Pinjam', 'id_peminjam', 'id');
    }
}

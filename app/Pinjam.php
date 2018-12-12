<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class Pinjam extends Model
{
 	public function Barang()
 	{
 		return $this->belongsTo('App\Barang', 'id_barang', 'id');
 	}
}

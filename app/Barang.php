<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class Barang extends Model
{
    use Notifiable;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $table = 'barangs';
    protected $fillable = [
    		'id', 'namabarang', 'kodebarang', 'jumlahbarang', 'status',
    ]; 
}

<?php

namespace App;

use App\Ruangan;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['ruangan_id', 'name', 'total', 'broken', 'created_by', 'updated_by'];

    public function ruangan()
    {
    	return $this->belongsTo(Ruangan::class, 'ruangan_id');
    }
}

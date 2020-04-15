<?php

namespace App;

use App\Ruangan;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['ruangan_id', 'name', 'total', 'broken', 'created_by', 'updated_by'];

    public function ruangan()
    {
    	return $this->belongsTo(Ruangan::class, 'ruangan_id');
    }
    public function create_by()
    {
    	return $this->belongsTo(User::class, 'created_by', 'id');
    }
    public function update_by()
    {
    	return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}

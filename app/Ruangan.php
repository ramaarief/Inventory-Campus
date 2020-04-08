<?php

namespace App;

use App\Jurusan;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $fillable = ['jurusan_id', 'name'];

    public function jurusan()
    {
    	return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}

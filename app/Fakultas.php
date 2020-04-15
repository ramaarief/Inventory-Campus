<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jurusan;

class Fakultas extends Model
{
    protected $table = 'fakultas';
    protected $fillable = ['name'];

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'name', 'fakultas_id');
    }
}

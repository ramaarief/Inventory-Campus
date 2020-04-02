<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fakultas;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $fillable = ['nama_jurusan', 'fakultas_id'];

    public function fakultas()
    {
        return $this->hasMany('App\Fakultas', 'fakultas_id', 'name');
    }
}

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
        return $this->belongsTo(Fakultas::class, 'fakultas_id', 'name');
    }
}

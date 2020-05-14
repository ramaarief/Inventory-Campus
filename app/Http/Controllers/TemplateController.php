<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;
use App\Jurusan;
use App\Ruangan;
use App\Barang;

class TemplateController extends Controller
{
    public function index(Request $request)
    {
        $fakultas = Fakultas::count();
        $jurusan = Jurusan::count();
        $ruangan = Ruangan::count();
        $barang = Barang::count();
        $total = Barang::sum('total');
        $broken = Barang::sum('broken');

        $filkom = Fakultas::where('id', '1')->get();
        $hukum = Fakultas::where('id', '3')->get();
        $fia = Fakultas::where('id', '4')->get();
        $teknik = Fakultas::where('id', '7')->get();
        $fk = Fakultas::where('id', '8')->get();
        $fisip = Fakultas::where('id', '12')->get();

        $jurusanFilkom = Jurusan::where('fakultas_id', '1')->count();
        $jurusanHukum = Jurusan::where('fakultas_id', '3')->count();
        $jurusanFia = Jurusan::where('fakultas_id', '4')->count();
        $jurusanTeknik = Jurusan::where('fakultas_id', '7')->count();
        $jurusanFk = Jurusan::where('fakultas_id', '8')->count();
        $jurusanFisip = Jurusan::where('fakultas_id', '12')->count();

        $inventory = Barang::when($request->search, function($query) use($request){
            $query->where('nama_barang', 'LIKE', '%'.$request->search.'%')
                ->orWhere('nama_ruangan', 'LIKE', "%{$request->search}%")
                ->orWhere('nama_jurusan', 'LIKE', "%{$request->search}%")
                ->orWhere('nama_fakultas', 'LIKE', "%{$request->search}%");
        })
        ->join('ruangan', 'ruangan.id', '=', 'barang.ruangan_id')
        ->join('jurusan', 'jurusan.id', '=', 'ruangan.jurusan_id')
        ->join('fakultas', 'fakultas.id', '=', 'jurusan.fakultas_id')
        ->select('ruangan.name AS nama_ruangan', 'jurusan.nama_jurusan AS nama_jurusan', 'fakultas.name AS nama_fakultas', 'barang.name AS nama_barang', 'barang.*')
        ->orderBy('nama_fakultas')->paginate(5);

        return view('template.index', compact('fakultas','jurusan','ruangan','barang', 'total', 'broken','filkom','hukum','fia','teknik','fk','fisip','jurusanFilkom','jurusanHukum','jurusanFia','jurusanTeknik','jurusanFk','jurusanFisip', 'inventory'));
    }
}

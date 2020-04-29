<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use App\Jurusan;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jurusan = Jurusan::all();

        $ruangan = Ruangan::when($request->search, function($query) use($request){
            $query->join('jurusan', 'ruangan.jurusan_id', '=', 'jurusan.id')
                  ->where('jurusan.nama_jurusan', 'LIKE', '%'.$request->search.'%')
                  ->orwhere('ruangan.name', 'LIKE', '%'.$request->search.'%')
                  ->select('ruangan.*', 'jurusan.nama_jurusan AS jurusan_nama');
        })->paginate(4);

        return view('ruangan.index', compact('ruangan', 'jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('ruangan.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jurusan_id' => 'required|max:20',
            'name' => 'required|max:255'
        ]);

        Ruangan::create([
            'jurusan_id' => $request->jurusan_id,
            'name' => $request->name
        ]);
        
        return redirect()->route('ruangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::all();
        $ruangan = Ruangan::find($id);

        return view('ruangan.edit', compact('ruangan', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jurusan_id' => 'required|max:20',
            'name' => 'required|max:255'
        ]);
        
        Ruangan::whereId($id)->update([
            'jurusan_id' => $request->jurusan_id,
            'name' => $request->name
        ]);

        return redirect()->route('ruangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ruangan::whereId($id)->delete();
        return redirect()->route('ruangan.index');
    }
}

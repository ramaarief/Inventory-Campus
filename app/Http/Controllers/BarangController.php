<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Ruangan;
use App\User;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ruangan = Ruangan::all();
        $user = User::all();

        $barang = Barang::when($request->search, function($query) use($request){
            $query->where('name', 'LIKE', '%'.$request->search);
        })->paginate(4);

        return view('barang.index', compact('barang', 'ruangan', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangan = Ruangan::all();
        return view('barang.create', compact('ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'ruangan_id' => $request->ruangan_id,
            'name' => $request->name,
            'total' => $request->total,
            'broken' => $request->broken,
            'created_by' => $request->created_by
        ]);
        
        return redirect()->route('barang.index');
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
        $ruangan = Ruangan::all();
        $barang = Barang::find($id);

        return view('barang.edit', compact('barang', 'ruangan'));
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
        Barang::whereId($id)->update([
            'ruangan_id' => $request->ruangan_id,
            'name' => $request->name,
            'total' => $request->total,
            'broken' => $request->broken,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by
        ]);

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::whereId($id)->delete();
        return redirect()->route('barang.index');
    }
}

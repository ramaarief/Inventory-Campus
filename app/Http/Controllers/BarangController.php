<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Ruangan;
use App\User;

use App\Exports\BarangExport;
use Maatwebsite\Excel\Facades\Excel;

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
            $query->join('ruangan', 'barang.ruangan_id', '=', 'ruangan.id')
                  ->where('ruangan.name', 'LIKE', '%'.$request->search.'%')
                  ->orwhere('barang.name', 'LIKE', '%'.$request->search.'%')
                  ->select('barang.*', 'ruangan.name AS ruangan_name');
        })->paginate(5);

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
        $validatedData = $request->validate([
            'ruangan_id' => 'required|max:20',
            'name' => 'required|max:255',
            'total' => 'required|integer|min:1',
            'broken' => 'required|integer|min:0',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $photoName = 'barang-'.date('Ymdhis').'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move('images', $photoName);

        Barang::create([
            'ruangan_id' => $request->ruangan_id,
            'name' => $request->name,
            'total' => $request->total,
            'broken' => $request->broken,
            'photo' => $photoName,
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
        $validatedData = $request->validate([
            'ruangan_id' => 'required|max:20',
            'name' => 'required|max:255',
            'total' => 'required|integer|min:1',
            'broken' => 'required|integer|min:0',
            'photo' => 'image|mimes:jpeg,png,jpg|max:4096',
        ]);
        
        $barang = Barang::find($id);
        $barang->ruangan_id = $request['ruangan_id'];
        $barang->name = $request['name'];
        $barang->total = $request['total'];
        $barang->broken = $request['broken'];

        if( $request->photo){
            $photoName = 'barang-'.date('Ymdhis').'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move('images', $photoName);
            $barang->photo = $photoName;
        }

        $barang->created_by = $request['created_by'];
        $barang->updated_by = $request['updated_by'];
        
        $barang->update();

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

    public function export_excel(Request $request)
    {
        return Excel::download(new BarangExport, 'barang-'.date("Y-m-d").'.xlsx');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('home.barang.index', compact(['barang']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.barang.tambah'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'nama' =>$request->nama,
            'jenis_barang' =>$request->jenis_barang,
            'jumlah_barang' =>$request->jumlah_barang,
            $request->except(['_token']),
        ]);
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::find($id);
        return view('home.barang.edit',compact(['barang']));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::find($id);
        $barang->update([
            'nama'=>$request->nama,
            'jenis_barang' => $request->jenis_barang,
            'jumlah_barang' => $request->jumlah_barang,
            $request->except(['_token']),
        ]);
    

    
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);
        $barang -> delete();
        return redirect('/barang');
    }
}

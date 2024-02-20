<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;
use App\Models\Supplier;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->User()->level == 'admin'){
            $sepatu = Sepatu::all();
        return view('home.sepatu.index', compact(['sepatu']));
        }elseif(auth()->User()->level == null ){
            return redirect('/login')->with('error', 'Maaf, anda tidak memiliki akses. Silahkan login kembali !');
        }else{
            return redirect('/login')->with('error', 'Maaf, anda tidak memiliki akses. Silahkan login kembali !');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('home.sepatu.tambah', compact(['supplier']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $sepatu= Sepatu::create($request->all());
        return redirect('/sepatu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Supplier::all();
        $sepatu = Sepatu::find($id);
        return view('home.sepatu.edit', compact(['sepatu'], 'supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $sepatu = Sepatu::find($id);
        $sepatu->update(($request->all()));
        return redirect('/sepatu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::all();
        $sepatu = Sepatu::find($id);
        $sepatu->delete();
        return redirect('/sepatu');
    }
}

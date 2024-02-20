<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Member;
use App\Models\User;
use App\Models\Sepatu;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(auth()->User()->level == 'admin'){
            $penjualan = Penjualan::all();
            return view('home.penjualan.index', compact(['penjualan']));
        // }elseif(auth()->User()->level == 'kasir' ){
        //     $penjualan = Penjualan::all();
        //     return view('home.penjualan.index', compact(['penjualan']));
        // }else{
        //     return redirect('/login')->with('error', 'Maaf, anda tidak memiliki akses. Silahkan login kembali !');
        // }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Member::all();
        $user = User::all();
        $sepatu = Sepatu::all();
        return view('home.penjualan.tambah', compact(['member','user','sepatu']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penjualan= Penjualan::create($request->all());
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::all();
        $user = User::all();
        $sepatu = Sepatu::all();
        $penjualan = Penjualan::find($id);
        return view('home.penjualan.edit', compact(['penjualan'],'member','user','sepatu'));
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
        $penjualan = Penjualan::find($id);
        $penjualan->update(($request->all()));
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::all();
        $user = User::all();
        $sepatu = Sepatu::all();
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }

    public function cetak(){
        $penjualan = Penjualan::all();
        return view('home.penjualan.cetak', compact(['penjualan']));
    }
    public function struk(Request $request, $id){
        $penjualan = Penjualan::find($id);
        return view('home.penjualan.struk', compact(['penjualan']));
    }
}

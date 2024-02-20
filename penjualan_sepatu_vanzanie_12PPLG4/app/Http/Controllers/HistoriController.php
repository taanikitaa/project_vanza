<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('histori.index');
    }

    public function hasil(Request $request){
        $ids = $request->id;
        $penjualan = Penjualan::where('id_member', '=', $ids)->get();
        return view('histori.hasil', compact('penjualan'));
    }
}

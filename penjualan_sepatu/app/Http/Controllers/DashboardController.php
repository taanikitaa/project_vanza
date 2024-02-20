<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Sepatu;
use App\Models\Penjualan;
use Carbon\Carbon;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_member = Member::count();
        $jumlah_sepatu = Sepatu::count();
        $penjualan = Penjualan::select()->orderBy('tgl_bayar','desc')
        ->limit(5)
        ->get();

        $today = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
        $total_penjualan = Penjualan::select(Penjualan::raw('SUM(jumlah_bayar)as total_price'))
        ->whereBetween('tgl_bayar',[$today,$endDate])->first();
        return view('home.dashboard', compact('penjualan','jumlah_sepatu','jumlah_member','total_penjualan'),['total_penjualan'=>$total_penjualan]);
    }

    
}

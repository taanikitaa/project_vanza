<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_kasir',
        'id_member',
        'tgl_bayar',
        'id_sepatu',
        'jumlah_bayar',
    ];
public function User(){
        return $this->belongsTo(User::class, 'id_kasir', 'id');
}
public function Member(){
    return $this->belongsTo(Member::class, 'id_member', 'id');
}
public function Sepatu(){
    return $this->belongsTo(Sepatu::class, 'id_sepatu', 'id');
}

public function Penjualan(){
    return $this->hasMany(Penjualan::class,'id_kasir','id_member','id_sepatu','id');
}
}

@extends('layouts.master')
@section('title','Data Penjualan')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <center>
                                <h4>Data Penjualan</h4>
                                <a href="/penjualan/tambah" class="btn btn-primary">Tambah Data</a>
                                <a href="/penjualan/cetak" target="_blank" class="btn btn-secondary"><span class="fa fa-print"></span>Cetak Laporan</a>
                            </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-primary" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Kasir</th>
                                                <th scope="col">Member</th>
                                                <th scope="col">Tanggal Bayar</th>
                                                <th scope="col">Sepatu</th>
                                                <th scope="col">Jumlah Bayar</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($penjualan as $p)
                                            <tr class="">
                                                <td scope="row">{{$p->id}}</td>
                                                <td>{{$p->id_kasir}}-{{$p->user->nama_kasir}}</td>
                                                <td>{{$p->id_member}}-{{$p->member->nama}}</td>
                                                <td>{{$p->tgl_bayar}}</td>
                                                <td>{{$p->sepatu->nama_sepatu}}</td>
                                                <td>Rp. {{number_format($p->jumlah_bayar)}}</td>
                                                <td>
                                                    <a href="/penjualan/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/penjualan/{{$p->id}}/hapus" class="btn btn-danger" onClick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Hapus</a>
                                                    <a href="/penjualan/{{$p->id}}/struk" class="btn btn-secondary" target="_blank"><span class="fa fa-print"></span>Struk</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
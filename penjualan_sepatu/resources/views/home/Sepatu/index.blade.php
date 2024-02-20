@extends('layouts.master')
@section('title','Data Sepatu')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <center>
                                <h4>Data Sepatu</h4>
                                <a href="/sepatu/tambah" class="btn btn-primary">Tambah Data</a>
                            </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-primary"  id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama Sepatu</th>
                                                <th scope="col">Merk</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Warna</th>
                                                <th scope="col">Supplier</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sepatu as $sep)
                                            <tr class="">
                                                <td scope="row">{{$sep->id}}</td>
                                                <td>{{$sep->nama_sepatu}}</td>
                                                <td>{{$sep->merk}}</td>
                                                <td>{{$sep->stok}}</td>
                                                <td>{{$sep->warna}}</td>
                                                <td>{{$sep->supplier->nama_supplier}}</td>
                                                <td>
                                                    <a href="/sepatu/{{$sep->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/sepatu/{{$sep->id}}/hapus" class="btn btn-danger" onClick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Hapus</a>
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
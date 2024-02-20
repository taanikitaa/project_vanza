@extends('layouts.master')
@section('title','Data Member')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <center>
                                <h4>Data Member</h4>
                                <a href="/member/tambah" class="btn btn-primary">Tambah Data</a>
                            </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-primary" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">No Telepon</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($member as $m)
                                            <tr class="">
                                                <td scope="row">{{$m->id}}</td>
                                                <td>{{$m->nama}}</td>
                                                <td>{{$m->no_telp}}</td>
                                                <td>{{$m->alamat}}</td>
                                                <td>
                                                    <a href="/member/{{$m->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/penjualan/{{$m->id}}/hapus" class="btn btn-danger" onClick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Hapus</a>
                                                    
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
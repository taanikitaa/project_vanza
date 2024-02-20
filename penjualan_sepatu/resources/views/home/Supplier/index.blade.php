@extends('layouts.master')
@section('title','Data Supplier')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <center>
                                <h4>Data Supplier</h4>
                                <a href="/supplier/tambah" class="btn btn-primary">Tambah Data</a>
                            </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-primary" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama Supplier</th>
                                                <th scope="col">Nama Perusahaan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Telepon</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($supplier as $sup)
                                            <tr class="">
                                                <td scope="row">{{$sup->id}}</td>
                                                <td>{{$sup->nama_supplier}}</td>
                                                <td>{{$sup->nama_perusahaan}}</td>
                                                <td>{{$sup->alamat}}</td>
                                                <td>{{$sup->no_telp}}</td>
                                                <td>
                                                    <a href="/supplier/{{$sup->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/supplier/{{$sup->id}}/hapus" class="btn btn-danger" onClick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Hapus</a>
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
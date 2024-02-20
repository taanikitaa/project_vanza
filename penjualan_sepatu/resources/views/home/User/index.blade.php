@extends('layouts.master')
@section('title','Data User')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <center>
                                <h4>Data User</h4>
                                <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
                            </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-primary" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $u)
                                            <tr class="">
                                                <td scope="row">{{$u->id}}</td>
                                                <td>{{$u->name}}</td>
                                                <td>{{$u->email}}</td>
                                                <td>
                                                    <a href="/user/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/user/{{$u->id}}/hapus" class="btn btn-danger" onClick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Hapus</a>
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
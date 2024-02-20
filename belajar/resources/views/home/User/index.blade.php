@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Kelola Data User </h4>
                            <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No / ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>
                                            <a href="/user/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/user/{{$u->id}}/hapus" class="btn btn-danger" onClick="return confirm('apakah anda yakin untuk menghapus?')">Hapus</a>
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
    </section>

</div>
@endsection
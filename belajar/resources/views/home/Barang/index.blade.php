@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Barang</h4>
                            <a href="/barang/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Jumlah Barang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barang as $b)
                                                <tr>
                                                    <td>{{$b->id}}</td>
                                                    <td>{{$b->nama}}</td>
                                                    <td>{{$b->jenis_barang}}</td>
                                                    <td>{{$b->jumlah_barang}}</td>
                                                    <td>

                                                    <a href="/barang/{{$b->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/barang/{{$b->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
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
@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Barang</h4>
                        </div>
                        <div class="card-body">
                            <form action="/barang/{{$barang->id}}/update" method="post">
                            @csrf


                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control" value="{{$barang->nama}}" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Barang</label>
                                <input type="text" class="form-control" value="{{$barang->jenis_barang}}" name="jenis_barang" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Barang</label>
                                <input type="number" class="form-control" value="{{$barang->jumlah_barang}}" name="jumlah_barang" required>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/barang" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
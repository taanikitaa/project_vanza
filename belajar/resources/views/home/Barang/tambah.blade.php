@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Barang</h4>
                        </div>
                        <div class="card-body">
                            <form action="/barang/simpan" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Barang</label>
                                <input type="text" class="form-control" name="jenis_barang" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Barang</label>
                                <input type="number" class="form-control" name="jumlah_barang" required>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@extends('layouts.master')
@section('title','Tambah Data Supplier')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center><h4>
                                Tambah Data Supplier
                            </h4></center>
                        </div>
                            <div class="card-body">
                            <form action="/supplier/simpan" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Supplier</label>
                                    <input type="text" class="form-control" name="nama_supplier" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" name="no_telp" placeholder="Masukkan Nomer Telepon" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-primary">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
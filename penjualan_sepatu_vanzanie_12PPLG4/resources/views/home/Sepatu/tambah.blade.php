@extends('layouts.master')
@section('title','Tambah Data Sepatu')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center><h4>
                                Tambah Data Sepatu
                            </h4></center>
                        </div>
                            <div class="card-body">
                            <form action="/sepatu/simpan" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Sepatu</label>
                                    <input type="text" class="form-control" name="nama_sepatu" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Merk</label>
                                    <input type="text" class="form-control" name="merk" placeholder="Masukkan Merk" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Stok</label>
                                    <input type="number" class="form-control" name="stok" placeholder="Masukkan Stok" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Warna</label>
                                    <input type="text" class="form-control" name="warna" placeholder="Masukkan Warna" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Supplier</label>
                                    <select name="id_supplier" class="form-control" id="">
                                        @foreach($supplier as $supplier)
                                        <option value="{{$supplier->id}}">{{$supplier->nama_supplier}}</option>
                                        @endforeach
                                    </select>
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
@extends('layouts.master')
@section('title','Edit Data Sepatu')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center><h4>
                                Edit Data Sepatu
                            </h4></center>
                        </div>
                            <div class="card-body">
                            <form action="/sepatu/{{$sepatu->id}}/update" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Sepatu</label>
                                    <input type="text" class="form-control" name="nama_sepatu" value="{{$sepatu->nama_sepatu}}" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Merk</label>
                                    <input type="text" class="form-control" name="merk" value="{{$sepatu->merk}}" placeholder="Masukkan Merk" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Stok</label>
                                    <input type="number" class="form-control" name="stok" value="{{$sepatu->stok}}" placeholder="Masukkan Stok" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Warna</label>
                                    <input type="text" class="form-control" name="warna" value="{{$sepatu->warna}}" placeholder="Masukkan Warna" required>
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
@extends('layouts.master')
@section('title','Edit Data Member')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center><h4>
                                Edit Data Member
                            </h4></center>
                        </div>
                            <div class="card-body">
                            <form action="/member/{{$member->id}}/update" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{$member->nama}}" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" name="no_telp" value="{{$member->no_telp}}" placeholder="Masukkan Nomer Telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="{{$member->alamat}}" placeholder="Masukkan Alamat" required>
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
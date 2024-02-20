@extends('layouts.master')
@section('title','Tambah Data User')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center><h4>
                                Tambah Data User
                            </h4></center>
                        </div>
                            <div class="card-body">
                            <form action="/user/simpan" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Masukkan Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Kasir</label>
                                    <input type="text" class="form-control" name="nama_kasir" placeholder="Masukkan Nama Kasir" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Level</label>
                                    <select name="level" id="" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="kasir">Kasir</option>
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
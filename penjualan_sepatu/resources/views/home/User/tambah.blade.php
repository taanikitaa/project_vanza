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
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Masukkan Password" required>
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
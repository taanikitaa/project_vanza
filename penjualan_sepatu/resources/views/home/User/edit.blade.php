@extends('layouts.master')
@section('title','Edit Data User')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center><h4>
                                Edit Data User
                            </h4></center>
                        </div>
                            <div class="card-body">
                            <form action="/user/{{$user->id}}/update" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="{{$user->username}}" required>
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
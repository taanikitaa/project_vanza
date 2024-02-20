@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Tambah Data User </h4>

                        </div>
                        <div class="card-body">
                            <form action="/user/{{$user->id}}/update" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control"
        name='name' value="{{$user->name}}" placeholder="Masukan Nama User" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control"
        name='email' value="{{$user->email}}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href='/user' class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
</div>

@endsection

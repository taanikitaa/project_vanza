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
                            <form action="/user/simpan" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control"
        name='name' id="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label></label>
                                    <input type="text" class="form-control"
        name='email' id=""  required>
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

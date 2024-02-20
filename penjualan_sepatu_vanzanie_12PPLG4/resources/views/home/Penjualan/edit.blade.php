@extends('layouts.master')
@section('title','Edit Data Penjualan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center><h4>
                                Edit Data Penjualan
                            </h4></center>
                        </div>
                            <div class="card-body">
                            <form action="/penjualan/{{$penjualan->id}}/update" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Kasir</label>
                                    <select name="id_kasir" class="form-control" id="">
                                        @foreach($user as $user)
                                        <option value="{{$user->id}}">{{$user->nama_kasir}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Member</label>
                                    <select name="id_member" class="form-control" id="">
                                        @foreach($member as $member)
                                        <option value="{{$member->id}}" >{{$member->nama}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tanggal Bayar</label>
                                        <input type="date" name="tgl_bayar" class="form-control" value="{{$penjualan->tgl_bayar}}" id="">
                                    </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Sepatu</label>
                                    <select name="id_sepatu" class="form-control" id="">
                                        @foreach($sepatu as $sepatu)
                                        <option value="{{$sepatu->id}}">{{$sepatu->nama_sepatu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Jumlah Bayar</label>
                                        <input type="number" value="{{$penjualan->jumlah_bayar}}" name="jumlah_bayar" class="form-control" id="">
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
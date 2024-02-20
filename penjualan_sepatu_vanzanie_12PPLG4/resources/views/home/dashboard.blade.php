@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlah_member}}</h3>

                <p>Member</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/member" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$jumlah_sepatu}}<sup style="font-size: 20px"></sup></h3>

                <p>Sepatu</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/sepatu" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
           <!-- small box -->
           <div class="small-box bg-warning">
              <div class="inner">
                <h3>@if($total_penjualan->total_price == null)
                  0
                  @else
                  Rp. {{number_format($total_penjualan->total_price)}}
                  @endif
                </h3>

                <p>Total Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/penjualan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

                
              
          <!-- ./col -->
        </div>
    </section>


    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>History</h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Kasir</th>
                                                <th scope="col">Member</th>
                                                <th scope="col">Tanggal Bayar</th>
                                                <th scope="col">Sepatu</th>
                                                <th scope="col">Jumlah Bayar</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($penjualan as $p)
                                            <tr class="">
                                                <td scope="row">{{$p->id}}</td>
                                                <td>{{$p->id_kasir}}-{{$p->user->nama_kasir}}</td>
                                                <td>{{$p->id_member}}-{{$p->member->nama}}</td>
                                                <td>{{$p->tgl_bayar}}</td>
                                                <td>{{$p->sepatu->nama_sepatu}}</td>
                                                <td>Rp.{{number_format($p->jumlah_bayar)}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </section>

  </div>
@endsection
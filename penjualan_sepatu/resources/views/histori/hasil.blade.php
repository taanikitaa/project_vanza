<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori</title>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
</head>
<body>
    <section class="content">
    <div class="row">
        <div class="col-3">
                <div class="card">
                    <div class="card-header"><h4>Cek Data Member</h4></div>
                    <div class="card-body">
                        <form action="/hasil" method="post">
                            <div class="mb-3">
                                <input type="text" name="id" class="form-control" placeholder="Masukkan ID Member">
                            </div>
                            <button type="submit" class="btn btn-primary">Cek Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>History</h4></div>
                <div class="card-body">
                <table class="table table-primary" id="example">
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
                                                <td>{{$p->user->nama_kasir}}</td>
                                                <td>{{$p->member->nama}}</td>
                                                <td>{{$p->tgl_bayar}}</td>
                                                <td>{{$p->sepatu->nama_sepatu}}</td>
                                                <td>Rp. {{number_format($p->jumlah_bayar)}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Transaksi</title>
</head>
<body onload = "window.print()">
<center>
    <h3>Laporan Transaksi</h3>

<table class="table table-primary" border="1">
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
                <td>{{$p->jumlah_bayar}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </center>
    <div class="kotak" <i class="fa fa-align-right" aria-hidden="true"></i>
        <p>Bandung,.......</p>
        <br>
        <br>
        <br>
        <p>Admin</p>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
</head>
<body onload="window.print()">
    <table>
        <tr align="center">
            <td colspan ="3"><b>Vanza's Shoes</b></td>
        </tr>
        <tr align="center">
            <td colspan ="3"><b>Bukti Pembayaran</b></td>
        </tr>
        <tr> 
            <td colspan = "3"><hr></td>
        </tr>
        <tr>
            <td>Petugas : {{Auth()->User()->name}}</td>
            <td>Tanggal : <?php echo date('y/m/d');?></td>
        </tr>
        <tr> 
            <td colspan = "3"><hr></td>
         </tr>
         <tr>
            <td>Kasir</td>
            <td align="left">:</td>
            <td>{{$penjualan->user->name}}</td>
         </tr>
         <tr>
            <td>Member</td>
            <td align="left">:</td>
            <td>{{$penjualan->member->nama}}</td>
         </tr>
         <tr>
            <td>Sepatu</td>
            <td align="left">:</td>
            <td>{{$penjualan->sepatu->nama_sepatu}}-{{$penjualan->sepatu->merk}}</td>
         </tr>
         <tr>
            <td>Jumlah Bayar</td>
            <td align ="left">:</td>
            <td>Rp. {{number_format($penjualan->jumlah_bayar,2,',','.')}}</td>
            <tr> 
            <td colspan = "3"><hr></td>
         </tr>
        <tr>
        <td colspan ="3">
        <b> Note:
        <br>
        <b>-Struk ini sebagai bukti pembayaran
        <br>
        <b>-Harap disimpan dengan baik
    
        </td>
        </tr>
            
        </td>
    </tr>
    </table>
</body>
</html>
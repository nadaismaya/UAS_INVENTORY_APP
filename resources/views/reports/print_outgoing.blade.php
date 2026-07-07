<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Laporan Barang Keluar</title>

<style>

body{

font-family:Arial;

font-size:12px;

}

h2{

text-align:center;

margin-bottom:20px;

}

table{

width:100%;

border-collapse:collapse;

}

table,th,td{

border:1px solid #000;

}

th,td{

padding:8px;

text-align:center;

}

th{

background:#eee;

}

</style>

</head>

<body onload="window.print()">

<h2>Laporan Barang Keluar</h2>

<table>

<thead>

<tr>

<th>No</th>
<th>Tanggal</th>
<th>Barang</th>
<th>Jumlah</th>
<th>User</th>
<th>Keterangan</th>

</tr>

</thead>

<tbody>

@foreach($outgoingItems as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->tanggal }}</td>

<td>{{ $item->item->nama_barang }}</td>

<td>{{ $item->jumlah }}</td>

<td>{{ $item->user->name }}</td>

<td>{{ $item->tujuan }}</td>

</tr>

@endforeach

</tbody>

</table>

</body>

</html>
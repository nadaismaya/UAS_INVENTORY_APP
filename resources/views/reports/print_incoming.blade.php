<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Laporan Barang Masuk</title>

<style>

body{

font-family:Arial;

font-size:12px;

}

table{

width:100%;

border-collapse:collapse;

}

table,th,td{

border:1px solid black;

}

th,td{

padding:8px;
text-align:center;
vertical-align:middle;


}

h2{

text-align:center;

}

</style>

</head>

<body onload="window.print()">

<h2>Laporan Barang Masuk</h2>

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

@foreach($incomingItems as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->tanggal }}</td>

<td>{{ $item->item->nama_barang }}</td>

<td>{{ $item->jumlah }}</td>

<td>{{ $item->user->name }}</td>

<td>{{ $item->keterangan }}</td>

</tr>

@endforeach

</tbody>

</table>

</body>

</html>
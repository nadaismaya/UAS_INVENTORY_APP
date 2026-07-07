<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Laporan Data Barang</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            font-size:12px;
            margin:30px;
        }

        h2{
            text-align:center;
            margin-bottom:5px;
        }

        p{
            text-align:center;
            margin-top:0;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th,
        table td{
            border:1px solid #000;
            padding:8px;
        }

        table th{
            background:#e9ecef;
            text-align:center;
        }

        table td{
            text-align:center;
        }

    </style>

</head>

<body onload="window.print()">

<h2>LAPORAN DATA BARANG</h2>

<p>Sistem Inventaris Barang</p>

<table>

    <thead>

        <tr>

            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Supplier</th>
            <th>Satuan</th>
            <th>Stok</th>

        </tr>

    </thead>

    <tbody>

        @forelse($items as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->kode_barang }}</td>

            <td>{{ $item->nama_barang }}</td>

            <td>
                {{ $item->category->nama ?? '-' }}
            </td>

            <td>

                @if($item->suppliers->count())

                    {{ $item->suppliers->pluck('nama')->implode(', ') }}

                @else

                    -

                @endif

            </td>

            <td>
                {{ $item->unit->nama ?? '-' }}
            </td>

            <td>{{ $item->stok }}</td>

        </tr>

        @empty

        <tr>

            <td colspan="7">

                Tidak ada data.

            </td>

        </tr>

        @endforelse

    </tbody>

</table>

</body>

</html>
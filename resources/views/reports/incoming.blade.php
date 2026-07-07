@extends('layouts.app')

@section('title','Laporan Barang Masuk')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">

    <h3 class="fw-bold">
        Laporan Barang Masuk
    </h3>

    <div>


     <a href="{{ route('reports.incoming.print') }}"
           target="_blank"
           class="btn btn-danger">

            <i class="bi bi-file-earmark-pdf"></i>
            Export PDF

        </a>
        
        <a href="{{ route('reports.incoming.csv') }}"
           class="btn btn-success">

            <i class="bi bi-file-earmark-spreadsheet"></i>
            Export CSV

        </a>

       

    </div>

</div>



    <form action="{{ route('reports.incoming.filter') }}"
method="POST"
class="row g-3 mb-3">

    @csrf

    <div class="col-md-4">

        <input
        type="date"
        name="tanggal_awal"
        class="form-control"
        required>

    </div>

    <div class="col-md-4">

        <input
        type="date"
        name="tanggal_akhir"
        class="form-control"
        required>

    </div>

    <div class="col-md-4">

        <button class="btn btn-primary">

            Filter

        </button>

        <a href="{{ route('reports.incoming') }}"
        class="btn btn-secondary">

            Reset

        </a>

    </div>

</form>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-bordered table-striped">

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

        </div>

    </div>

</div>

@endsection

@extends('layouts.app')

@section('title','Data Barang Keluar')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                Data Barang Keluar
            </h3>

            <p class="text-muted mb-0">
                Riwayat transaksi barang keluar.
            </p>

        </div>

        <a href="{{ route('outgoing-items.create') }}" class="btn btn-primary">

            Tambah Barang Keluar

        </a>

    </div>


    <div class="card shadow-sm border-0 mb-3">

    <div class="card-body">

        <form action="{{ route('outgoing-items.index') }}" method="GET">

            <div class="row">

                <div class="col-md-9">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Cari barang atau petugas..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-md-3">

                    <button class="btn btn-primary">

                        Cari

                    </button>

                    <a href="{{ route('outgoing-items.index') }}"
                        class="btn btn-secondary">

                        Reset

                    </a>

                </div>

            </div>

        </form>

    </div>

</div>



    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    @if(session('error'))

        <div class="alert alert-danger">

            {{ session('error') }}

        </div>

    @endif

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th width="60">No</th>

                            <th>Tanggal</th>

                            <th>Barang</th>

                            <th>Jumlah</th>

                            <th>Petugas</th>

                            <th>Tujuan</th>

                            <th width="170">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($outgoingItems as $item)

                        <tr>

                            <td>

                                {{ $loop->iteration + ($outgoingItems->currentPage()-1) * $outgoingItems->perPage() }}

                            </td>

                            <td>

                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}

                            </td>

                            <td>

                                {{ $item->item->nama_barang }}

                            </td>

                            <td>

                                <span class="badge bg-danger">

                                    - {{ $item->jumlah }}

                                </span>

                            </td>

                            <td>

                                {{ $item->user->name }}

                            </td>

                            <td>

                                {{ $item->tujuan }}

                            </td>

                            <td>

                                <a
                                    href="{{ route('outgoing-items.edit',$item->id) }}"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('outgoing-items.destroy',$item->id) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="7" class="text-center">

                                Belum ada data barang keluar.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-3">

                {{ $outgoingItems->appends(request()->query())->links() }}

            </div>

        </div>

    </div>

</div>

@endsection
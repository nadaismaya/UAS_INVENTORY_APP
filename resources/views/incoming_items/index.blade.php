@extends('layouts.app')

@section('title', 'Data Barang Masuk')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                Data Barang Masuk
            </h3>

            <p class="text-muted mb-0">
                Riwayat transaksi barang masuk.
            </p>

        </div>

        <a href="{{ route('incoming-items.create') }}" class="btn btn-primary">

            Tambah Barang Masuk

        </a>

    </div>


    <div class="card shadow-sm border-0 mb-3">

    <div class="card-body">

        <form action="{{ route('incoming-items.index') }}" method="GET">

            <div class="row">

                <div class="col-md-9">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Cari nama barang..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-md-3">

                    <button class="btn btn-primary">

                        Cari

                    </button>

                    <a href="{{ route('incoming-items.index') }}"
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

                            <th>Keterangan</th>

                            <th width="170">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($incomingItems as $item)

                        <tr>

                            <td>

                                {{ $loop->iteration + ($incomingItems->currentPage()-1) * $incomingItems->perPage() }}

                            </td>

                            <td>

                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}

                            </td>

                            <td>

                                {{ $item->item->nama_barang }}

                            </td>

                            <td>

                                <span class="badge bg-success">

                                    + {{ $item->jumlah }}

                                </span>

                            </td>

                            <td>

                                {{ $item->user->name }}

                            </td>

                            <td>

                                {{ $item->keterangan ?? '-' }}

                            </td>

                            <td>

                                <a
                                    href="{{ route('incoming-items.edit',$item->id) }}"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('incoming-items.destroy',$item->id) }}"
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

                                Belum ada data barang masuk.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-3">

                {{ $incomingItems->appends(request()->query())->links() }}

            </div>

        </div>

    </div>

</div>

@endsection
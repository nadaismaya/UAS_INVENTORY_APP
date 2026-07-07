@extends('layouts.app')

@section('title','Data Barang')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h3 class="fw-bold mb-1">Data Barang</h3>

        <p class="text-muted mb-0">
            Daftar seluruh barang inventaris.
        </p>

    </div>

    <a href="{{ route('items.create') }}"
       class="btn btn-primary">

        Tambah Barang

    </a>

</div>

<div class="card shadow-sm border-0 mb-3">

    <div class="card-body">

        <form action="{{ route('items.index') }}" method="GET">

            <div class="row g-2 align-items-center">

                <div class="col">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Cari kode atau nama barang..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-auto">

                    <button type="submit" class="btn btn-primary">

                        Cari

                    </button>

                </div>

                <div class="col-auto">

                    <a href="{{ route('items.index') }}"
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

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Supplier</th>
                            <th>Satuan</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th width="170">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($items as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration + ($items->currentPage()-1) * $items->perPage() }}
                            </td>

                            <td>{{ $item->kode_barang }}</td>

                            <td>{{ $item->nama_barang }}</td>

                            <td>
                                {{ $item->category->nama ?? '-' }}
                            </td>

                            <td>

                                @forelse($item->suppliers as $supplier)

                                    <span class="badge bg-primary">
                                        {{ $supplier->nama }}
                                    </span>

                                @empty

                                    -

                                @endforelse

                            </td>

                            <td>
                                {{ $item->unit->nama ?? '-' }}
                            </td>

                            <td>{{ $item->stok }}</td>

                            <td>
                                Rp {{ number_format($item->harga,0,',','.') }}
                            </td>

                            <td>

                                <a href="{{ route('items.edit',$item->id) }}"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('items.destroy',$item->id) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus barang ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="9" class="text-center">

                                Tidak ada data barang.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            {{ $items->appends(request()->query())->links() }}

        </div>

    </div>

</div>

@endsection
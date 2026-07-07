@extends('layouts.app')

@section('title','Data Supplier')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">Data Supplier</h3>
            <p class="text-muted mb-0">
                Daftar seluruh supplier barang.
            </p>
        </div>

        <a href="{{ route('suppliers.create') }}" class="btn btn-primary">
            Tambah Supplier
        </a>

    </div>

<div class="card shadow-sm border-0 mb-3">

    <div class="card-body">

        <form action="{{ route('suppliers.index') }}" method="GET">

            <div class="row">

                <div class="col-md-9">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Cari nama supplier..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-md-3">

                    <button class="btn btn-primary">

                        Cari

                    </button>

                    <a href="{{ route('suppliers.index') }}"
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

                            <th width="70">No</th>

                            <th>Nama</th>

                            <th>Alamat</th>

                            <th>Telepon</th>

                            <th>Email</th>

                            <th width="170">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    @forelse($suppliers as $supplier)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $supplier->nama }}</td>

                            <td>{{ $supplier->alamat }}</td>

                            <td>{{ $supplier->telepon }}</td>

                            <td>{{ $supplier->email }}</td>

                            <td>

                                <a href="{{ route('suppliers.edit',$supplier->id) }}"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('suppliers.destroy',$supplier->id) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus supplier ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="text-center">

                                Data supplier masih kosong.

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-3">

                {{ $suppliers->appends(request()->query())->links() }}

            </div>

        </div>

    </div>

</div>

@endsection
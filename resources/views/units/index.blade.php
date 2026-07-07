@extends('layouts.app')

@section('title','Data Satuan')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                Data Satuan
            </h3>

            <p class="text-muted mb-0">
                Daftar seluruh satuan barang.
            </p>

        </div>

        <a href="{{ route('units.create') }}" class="btn btn-primary">
            Tambah Satuan
        </a>

    </div>


    <div class="card shadow-sm border-0 mb-3">

    <div class="card-body">

        <form action="{{ route('units.index') }}" method="GET">

            <div class="row">

                <div class="col-md-9">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Cari nama satuan..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-md-3">

                    <button class="btn btn-primary">

                        Cari

                    </button>

                    <a href="{{ route('units.index') }}"
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

            <table class="table table-hover">

                <thead class="table-light">

                    <tr>

                        <th width="80">No</th>

                        <th>Nama Satuan</th>

                        <th width="170">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($units as $unit)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $unit->nama }}</td>

                        <td>

                            <a href="{{ route('units.edit',$unit->id) }}"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form
                                action="{{ route('units.destroy',$unit->id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data ini?')">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="3" class="text-center">

                            Data masih kosong.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

            {{ $units->appends(request()->query())->links() }}

        </div>

    </div>

</div>

@endsection
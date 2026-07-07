@extends('layouts.app')

@section('title','Kategori')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="fw-bold mb-1">Data Kategori</h3>

        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            Tambah Kategori
        </a>

    </div>

    <div class="card shadow-sm mb-3">

    <div class="card-body">

        <form action="{{ route('categories.index') }}" method="GET">

            <div class="row">

                <div class="col-md-9">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Cari nama kategori..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-md-3">

                    <button class="btn btn-primary">

                        Cari

                    </button>

                    <a href="{{ route('categories.index') }}"
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

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-hover">

                <thead>

                    <tr>

                        <th width="70">No</th>

                        <th>Nama</th>

                        <th>Deskripsi</th>

                        <th width="180">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($categories as $category)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $category->nama }}</td>

                        <td>{{ $category->deskripsi }}</td>

                        <td>

                            <a href="{{ route('categories.edit',$category->id) }}"
                               class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form
                                action="{{ route('categories.destroy',$category->id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Hapus kategori ini?')"
                                    class="btn btn-danger btn-sm">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="text-center">

                            Belum ada data.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

            {{ $categories->appends(request()->query())->links() }}

        </div>

    </div>

</div>

@endsection
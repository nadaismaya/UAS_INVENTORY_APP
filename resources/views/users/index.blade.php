@extends('layouts.app')

@section('title','Data User')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">

                Data User

            </h3>

            <p class="text-muted mb-0">

                Kelola akun admin dan petugas.

            </p>

        </div>

        <a href="{{ route('users.create') }}" class="btn btn-primary">

            Tambah User

        </a>

    </div>


    <div class="card shadow-sm border-0 mb-3">

    <div class="card-body">

        <form action="{{ route('users.index') }}" method="GET">

            <div class="row">

                <div class="col-md-9">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Cari nama atau email..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-md-3">

                    <button class="btn btn-primary">

                        Cari

                    </button>

                    <a href="{{ route('users.index') }}"
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

                            <th width="60">

                                No

                            </th>

                            <th>

                                Nama

                            </th>

                            <th>

                                Email

                            </th>

                            <th width="120">

                                Role

                            </th>

                            <th width="180">

                                Aksi

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($users as $user)

                        <tr>

                            <td>

                                {{ $loop->iteration + ($users->currentPage()-1) * $users->perPage() }}

                            </td>

                            <td>

                                {{ $user->name }}

                            </td>

                            <td>

                                {{ $user->email }}

                            </td>

                            <td>

                                @if($user->role == 'admin')

                                    <span class="badge bg-primary">

                                        Admin

                                    </span>

                                @else

                                    <span class="badge bg-secondary">

                                        Petugas

                                    </span>

                                @endif

                            </td>

                            <td>

                                <a href="{{ route('users.edit',$user->id) }}"
                                   class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                @if(auth()->id() != $user->id)

                                <form action="{{ route('users.destroy',$user->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus user ini?')">

                                        Hapus

                                    </button>

                                </form>

                                @endif

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="5" class="text-center">

                                Belum ada data user.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-3">

                {{ $users->appends(request()->query())->links() }}

            </div>

        </div>

    </div>

</div>

@endsection
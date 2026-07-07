@extends('layouts.app')

@section('title','Tambah Satuan')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-primary text-white">

                    Tambah Satuan

                </div>

                <div class="card-body">

                    <form action="{{ route('units.store') }}" method="POST">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">

                                Nama Satuan

                            </label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}"
                                required>

                            @error('nama')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                            @enderror

                        </div>

                        <button class="btn btn-primary">

                            Simpan

                        </button>

                        <a href="{{ route('units.index') }}"
                            class="btn btn-secondary">

                            Kembali

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
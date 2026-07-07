@extends('layouts.app')

@section('title','Edit Satuan')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-warning">

                    Edit Satuan

                </div>

                <div class="card-body">

                    <form
                        action="{{ route('units.update',$unit->id) }}"
                        method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label">

                                Nama Satuan

                            </label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama',$unit->nama) }}"
                                required>

                            @error('nama')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                            @enderror

                        </div>

                        <button class="btn btn-warning">

                            Update

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
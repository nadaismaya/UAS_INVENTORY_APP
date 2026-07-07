@extends('layouts.app')

@section('title','Tambah Barang')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-primary text-white">

                    <h5 class="mb-0">

                        Tambah Barang

                    </h5>

                </div>

                <div class="card-body">

                    <form action="{{ route('items.store') }}" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Kode Barang

                                </label>

                                <input
                                    type="text"
                                    name="kode_barang"
                                    class="form-control"
                                    value="{{ old('kode_barang') }}"
                                    required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Nama Barang

                                </label>

                                <input
                                    type="text"
                                    name="nama_barang"
                                    class="form-control"
                                    value="{{ old('nama_barang') }}"
                                    required>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Kategori

                                </label>

                                <select
                                    name="category_id"
                                    class="form-select"
                                    required>

                                    <option value="">

                                        -- Pilih Kategori --

                                    </option>

                                    @foreach($categories as $category)

                                        <option
                                            value="{{ $category->id }}">

                                            {{ $category->nama }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Satuan

                                </label>

                                <select
                                    name="unit_id"
                                    class="form-select"
                                    required>

                                    <option value="">

                                        -- Pilih Satuan --

                                    </option>

                                    @foreach($units as $unit)

                                        <option
                                            value="{{ $unit->id }}">

                                            {{ $unit->nama }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">

                                Supplier

                            </label>

                            <div class="row">

                                @foreach($suppliers as $supplier)

                                <div class="col-md-4">

                                    <div class="form-check mb-2">

                                        <input
                                            type="checkbox"
                                            class="form-check-input"
                                            name="suppliers[]"
                                            value="{{ $supplier->id }}">

                                        <label class="form-check-label">

                                            {{ $supplier->nama }}

                                        </label>

                                    </div>

                                </div>

                                @endforeach

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Stok

                                </label>

                                <input
                                    type="number"
                                    name="stok"
                                    class="form-control"
                                    value="0"
                                    required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Harga

                                </label>

                                <input
                                    type="number"
                                    name="harga"
                                    class="form-control"
                                    value="0"
                                    required>

                            </div>

                        </div>

                        <button
                            class="btn btn-primary">

                            Simpan

                        </button>

                        <a
                            href="{{ route('items.index') }}"
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
@extends('layouts.app')

@section('title','Tambah Barang Masuk')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-primary text-white">

                    <h5 class="mb-0">

                        Tambah Barang Masuk

                    </h5>

                </div>

                <div class="card-body">

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{ route('incoming-items.store') }}" method="POST">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">

                                Barang

                            </label>

                            <select
                                name="item_id"
                                class="form-select"
                                required>

                                <option value="">

                                    -- Pilih Barang --

                                </option>

                                @foreach($items as $item)

                                    <option
                                        value="{{ $item->id }}"
                                        {{ old('item_id') == $item->id ? 'selected' : '' }}>

                                        {{ $item->kode_barang }} - {{ $item->nama_barang }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Tanggal

                                </label>

                                <input
                                    type="date"
                                    name="tanggal"
                                    class="form-control"
                                    value="{{ old('tanggal', date('Y-m-d')) }}"
                                    required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Jumlah

                                </label>

                                <input
                                    type="number"
                                    name="jumlah"
                                    class="form-control"
                                    min="1"
                                    value="{{ old('jumlah') }}"
                                    required>

                            </div>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Keterangan

                            </label>

                            <textarea
                                name="keterangan"
                                class="form-control"
                                rows="4"
                                placeholder="Masukkan keterangan (opsional)">{{ old('keterangan') }}</textarea>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary">

                            Simpan

                        </button>

                        <a
                            href="{{ route('incoming-items.index') }}"
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
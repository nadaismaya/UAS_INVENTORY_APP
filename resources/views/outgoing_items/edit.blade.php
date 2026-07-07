@extends('layouts.app')

@section('title','Edit Barang Keluar')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-warning">

                    <h5 class="mb-0">

                        Edit Barang Keluar

                    </h5>

                </div>

                <div class="card-body">

                    @if(session('error'))

                        <div class="alert alert-danger">

                            {{ session('error') }}

                        </div>

                    @endif

                    @if($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{ route('outgoing-items.update',$outgoingItem->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label">

                                Barang

                            </label>

                            <select
                                name="item_id"
                                class="form-select"
                                required>

                                @foreach($items as $item)

                                    <option
                                        value="{{ $item->id }}"
                                        {{ $outgoingItem->item_id == $item->id ? 'selected' : '' }}>

                                        {{ $item->kode_barang }} - {{ $item->nama_barang }}
                                        (Stok : {{ $item->stok }})

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
                                    value="{{ old('tanggal',$outgoingItem->tanggal) }}"
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
                                    value="{{ old('jumlah',$outgoingItem->jumlah) }}"
                                    required>

                            </div>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Tujuan

                            </label>

                            <input
                                type="text"
                                name="tujuan"
                                class="form-control"
                                value="{{ old('tujuan',$outgoingItem->tujuan) }}"
                                required>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-warning">

                            Update

                        </button>

                        <a
                            href="{{ route('outgoing-items.index') }}"
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
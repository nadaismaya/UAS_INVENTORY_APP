@extends('layouts.app')

@section('title','Edit Barang Masuk')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-warning">

                    <h5 class="mb-0">
                        Edit Barang Masuk
                    </h5>

                </div>

                <div class="card-body">

                    <form action="{{ route('incoming-items.update',$incomingItem->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label">Barang</label>

                            <select name="item_id" class="form-select" required>

                                @foreach($items as $item)

                                    <option value="{{ $item->id }}"
                                        {{ $incomingItem->item_id == $item->id ? 'selected' : '' }}>

                                        {{ $item->nama_barang }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Tanggal</label>

                            <input
                                type="date"
                                name="tanggal"
                                class="form-control"
                                value="{{ $incomingItem->tanggal }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Jumlah</label>

                            <input
                                type="number"
                                name="jumlah"
                                class="form-control"
                                value="{{ $incomingItem->jumlah }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Keterangan</label>

                            <textarea
                                name="keterangan"
                                class="form-control"
                                rows="3">{{ $incomingItem->keterangan }}</textarea>

                        </div>

                        <button class="btn btn-warning">

                            Update

                        </button>

                        <a href="{{ route('incoming-items.index') }}" class="btn btn-secondary">

                            Kembali

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
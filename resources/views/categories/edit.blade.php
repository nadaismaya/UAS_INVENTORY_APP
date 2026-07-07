@extends('layouts.app')

@section('title','Edit Kategori')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header">

            Edit Kategori

        </div>

        <div class="card-body">

            <form
                action="{{ route('categories.update',$category->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label>Nama Kategori</label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ $category->nama }}"
                        required>

                </div>

                <div class="mb-3">

                    <label>Deskripsi</label>

                    <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="4">{{ $category->deskripsi }}</textarea>

                </div>

                <button class="btn btn-primary">

                    Update

                </button>

                <a href="{{ route('categories.index') }}"
                    class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

@endsection
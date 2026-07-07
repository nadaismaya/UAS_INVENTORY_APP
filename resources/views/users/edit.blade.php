@extends('layouts.app')

@section('title','Edit User')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-warning">

                    <h5 class="mb-0">

                        Edit User

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

                    <form action="{{ route('users.update',$user->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label">

                                Nama

                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name',$user->name) }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">

                                Email

                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email',$user->email) }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">

                                Role

                            </label>

                            <select
                                name="role"
                                class="form-select"
                                required>

                                <option
                                    value="admin"
                                    {{ old('role',$user->role)=='admin' ? 'selected' : '' }}>

                                    Admin

                                </option>

                                <option
                                    value="petugas"
                                    {{ old('role',$user->role)=='petugas' ? 'selected' : '' }}>

                                    Petugas

                                </option>

                            </select>

                        </div>

                        <hr>

                        <p class="text-muted">

                            Kosongkan password jika tidak ingin mengubah password.

                        </p>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Password Baru

                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Konfirmasi Password

                                </label>

                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control">

                            </div>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-warning">

                            Update

                        </button>

                        <a
                            href="{{ route('users.index') }}"
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
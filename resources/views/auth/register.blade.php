<x-guest-layout>

<div class="container-fluid">

    <div class="row vh-100">

        <div class="col-lg-6 left-panel d-none d-lg-flex justify-content-center align-items-center">

            <div class="text-center">

                <i class="bi bi-person-plus-fill display-1"></i>

                <h1 class="fw-bold mt-4">

                    Inventory Management

                </h1>

                <p>

                    Buat akun baru untuk mulai menggunakan sistem.

                </p>

            </div>

        </div>

        <div class="col-lg-6 d-flex justify-content-center align-items-center">

            <div class="card login-card shadow-lg" style="width:450px;">

                <div class="card-body p-5">

                    <h2 class="fw-bold text-center mb-4">

                        Register

                    </h2>

                    <form method="POST" action="{{ route('register') }}">

                        @csrf

                        <div class="mb-3">

                            <label>Nama</label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name') }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label>Email</label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email') }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-4">

                            <label>Konfirmasi Password</label>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                required>

                        </div>

                        <button class="btn btn-success w-100">

                            Daftar

                        </button>

                    </form>

                    <a href="{{ route('login') }}"
                        class="btn btn-outline-secondary w-100 mt-3">

                        Sudah punya akun? Login

                    </a>

                    <div class="text-center mt-4 text-muted">

                        © 2026 Inventory Management

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</x-guest-layout>

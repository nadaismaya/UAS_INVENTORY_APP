<x-guest-layout>

<div class="container-fluid">

    <div class="row vh-100">

        <div class="col-lg-6 left-panel d-none d-lg-flex justify-content-center align-items-center">

            <div class="text-center">

                <i class="bi bi-box-seam-fill display-1"></i>

                <h1 class="fw-bold mt-4">

                    Inventory Management

                </h1>

                <p>

                    Sistem Inventaris Barang Berbasis Web

                </p>

            </div>

        </div>

        <div class="col-lg-6 d-flex justify-content-center align-items-center">

            <div class="card login-card shadow-lg" style="width:430px;">

                <div class="card-body p-5">

                    <h2 class="fw-bold text-center mb-1">

                        Login

                    </h2>

                    <p class="text-center text-muted mb-4">

                        Selamat Datang

                    </p>

                    <form method="POST" action="{{ route('login') }}">

                        @csrf

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

                        <div class="form-check mb-4">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember">

                            <label class="form-check-label">

                                Remember Me

                            </label>

                        </div>

                        <button class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                    <a href="{{ route('register') }}"
                        class="btn btn-outline-primary w-100 mt-3">

                        Buat Akun Baru

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

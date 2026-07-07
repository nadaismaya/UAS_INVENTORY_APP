<nav class="navbar navbar-expand-lg navbar-dark shadow-sm"
style="background:#2563EB;">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="#"
            style="font-size: 2rem; letter-spacing: 1px;">

            Inventory Management

        </a>

       <div class="ms-auto d-flex align-items-center">


            <span class="text-white me-3">

                {{ Auth::user()->name }}

            </span>

            <form action="{{ route('logout') }}" method="POST" class="d-inline">

                @csrf

                <button class="btn btn-light btn-sm">

                    <i class="bi bi-box-arrow-right"></i>

                    Logout

                </button>

            </form>

        </div>

    </div>




</nav>
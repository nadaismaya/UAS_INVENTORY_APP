<div class="col-md-2 p-0">

    <div class="sidebar text-white shadow d-flex flex-column position-relative">

        <div class="text-center py-4 border-bottom">

            <h5 class="fw-bold">

                MENU

            </h5>

        </div>

        <div class="list-group list-group-flush flex-grow-1">

            <a href="{{ route('dashboard') }}"
                class="list-group-item list-group-item-action {{ request()->routeIs('dashboard') ? 'active' : '' }}">

                <i class="bi bi-grid-1x2-fill me-2"></i>

                Dashboard

            </a>

            <a href="{{ route('items.index') }}"
                class="list-group-item list-group-item-action {{ request()->routeIs('items.*') ? 'active' : '' }}">

                <i class="bi bi-box-seam me-2"></i>

                Barang

            </a>

            @if(auth()->user()->isAdmin())

                <a href="{{ route('categories.index') }}"
                    class="list-group-item list-group-item-action {{ request()->routeIs('categories.*') ? 'active' : '' }}">

                    <i class="bi bi-tags me-2"></i>

                    Kategori

                </a>

                <a href="{{ route('suppliers.index') }}"
                    class="list-group-item list-group-item-action {{ request()->routeIs('suppliers.*') ? 'active' : '' }}">

                    <i class="bi bi-truck me-2"></i>

                    Supplier

                </a>

                <a href="{{ route('units.index') }}"
                    class="list-group-item list-group-item-action {{ request()->routeIs('units.*') ? 'active' : '' }}">

                    <i class="bi bi-rulers me-2"></i>

                    Satuan

                </a>

            @endif

            <a href="{{ route('incoming-items.index') }}"
                class="list-group-item list-group-item-action {{ request()->routeIs('incoming-items.*') ? 'active' : '' }}">

                <i class="bi bi-box-arrow-in-down me-2"></i>

                Barang Masuk

            </a>

            <a href="{{ route('outgoing-items.index') }}"
                class="list-group-item list-group-item-action {{ request()->routeIs('outgoing-items.*') ? 'active' : '' }}">

                <i class="bi bi-box-arrow-up me-2"></i>

                Barang Keluar

            </a>

            @if(auth()->user()->isAdmin())

                <a href="{{ route('users.index') }}"
                    class="list-group-item list-group-item-action {{ request()->routeIs('users.*') ? 'active' : '' }}">

                    <i class="bi bi-people me-2"></i>

                    User

                </a>

                <a href="{{ route('activity-logs.index') }}"
    class="list-group-item list-group-item-action {{ request()->routeIs('activity-logs.*') ? 'active' : '' }}">

    <i class="bi bi-clock-history me-2"></i>

    Activity Log

</a>

               <a href="{{ route('reports.export.csv') }}"
                    class="list-group-item list-group-item-action">

                    <i class="bi bi-file-earmark-excel me-2"></i>

                     Export Excel

                </a>

                <a href="{{ route('reports.print') }}"
                    class="list-group-item list-group-item-action"
                    target="_blank">

                    <i class="bi bi-file-earmark-pdf me-2"></i>

                    Export PDF

                </a>


                <a href="{{ route('reports.incoming') }}"
                    class="list-group-item list-group-item-action {{ request()->routeIs('reports.incoming','reports.incoming.*') ? 'active' : '' }}">

                    <i class="bi bi-arrow-down-circle me-2"></i>

                        Laporan Barang Masuk

                </a>

                <a href="{{ route('reports.outgoing') }}"
                    class="list-group-item list-group-item-action {{ request()->routeIs('reports.outgoing','reports.outgoing.*') ? 'active' : '' }}">

                    <i class="bi bi-arrow-up-circle me-2"></i>

                            Laporan Barang Keluar

                </a>


     

            @endif

        </div>



  <div class="p-3 pb-4">

   <button
    id="themeToggle"
    type="button"
    class="btn btn-light w-100">

    <i class="bi bi-moon-stars-fill"></i>
    Dark Mode

</button>

</div>

    </div>



</div>
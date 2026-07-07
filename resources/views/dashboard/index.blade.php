@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">Dashboard</h3>

            <p class="text-muted mb-0">
                Selamat datang di Sistem Inventaris Barang
            </p>

        </div>

    </div>

    {{-- Total Data --}}
    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">Total Barang</small>

                    <h2 class="fw-bold text-primary">

                        {{ $totalBarang }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">Total Kategori</small>

                    <h2 class="fw-bold text-success">

                        {{ $totalKategori }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">Total Supplier</small>

                    <h2 class="fw-bold text-warning">

                        {{ $totalSupplier }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">Total User</small>

                    <h2 class="fw-bold text-danger">

                        {{ $totalUser }}

                    </h2>

                </div>

            </div>

        </div>

    </div>

    {{-- Statistik --}}
    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">Barang Masuk</small>

                    <h2 class="fw-bold text-success">

                        {{ $totalBarangMasuk }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">Barang Keluar</small>

                    <h2 class="fw-bold text-danger">

                        {{ $totalBarangKeluar }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">Total Stok</small>

                    <h2 class="fw-bold text-primary">

                        {{ $totalStok }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">Stok Menipis</small>

                    <h2 class="fw-bold text-warning">

                        {{ $stokMenipis }}

                    </h2>

                </div>

            </div>

        </div>

    </div>

    {{-- Grafik --}}
    <div class="row">

        <div class="col-lg-12">

            <div class="card border-0 shadow-sm">

                <div class="card-header">
    <strong>Grafik Barang Masuk & Barang Keluar</strong>
</div>

                <div class="card-body">

                    <div style="height:350px;">

                        <canvas id="inventoryChart"></canvas>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('inventoryChart');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: [
            'Jan','Feb','Mar','Apr','Mei','Jun',
            'Jul','Agu','Sep','Okt','Nov','Des'
        ],

        datasets: [

            {

                label: 'Barang Masuk',

                data: @json($monthlyIncoming),

                backgroundColor: '#22c55e',

                borderRadius: 6,

                barThickness: 22

            },

            {

                label: 'Barang Keluar',

                data: @json($monthlyOutgoing),

                backgroundColor: '#ef4444',

                borderRadius: 6,

                barThickness: 22

            }

        ]

    },

    options: {

        responsive: true,

        maintainAspectRatio: false,

        layout: {

            padding: {

                top: 15,

                bottom: 10

            }

        },

        plugins: {

            legend: {

                position: 'top',

                align: 'center',

                labels: {

                    boxWidth: 25,

                    boxHeight: 12,

                    padding: 20,

                    font: {

                        size: 14,

                        weight: 'bold'

                    }

                }

            }

        },

        scales: {

            x: {

                grid: {

                    display: false

                },

                ticks: {

                    font: {

                        size: 13

                    }

                }

            },

            y: {

                beginAtZero: true,

                ticks: {

                    stepSize: 2,

                    font: {

                        size: 12

                    }

                }

            }

        }

    }

});

</script>

@endsection
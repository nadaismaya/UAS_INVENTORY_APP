@extends('layouts.app')

@section('title','Activity Log')

@section('content')

<div class="card">

    <div class="card-header">

        <h4 class="mb-0">
            Activity Log
        </h4>

    </div>

    <div class="card-body">

        <form method="GET">

            <div class="input-group mb-3">

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Cari aktivitas..."
                    value="{{ request('search') }}">

                <button class="btn btn-primary">

                    Cari

                </button>

            </div>

        </form>

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>User</th>

                        <th>Role</th>

                        <th>Aktivitas</th>

                        <th>IP Address</th>

                        <th>Waktu</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($activityLogs as $log)

                    <tr>

                        <td>{{ $loop->iteration + ($activityLogs->currentPage()-1) * $activityLogs->perPage() }}</td>

                        <td>{{ $log->user->name ?? '-' }}</td>

                        <td>{{ ucfirst($log->user->role ?? '-') }}</td>

                        <td>{{ $log->activity }}</td>

                        <td>{{ $log->ip_address }}</td>

                        <td>{{ $log->created_at->format('d/m/Y H:i') }}</td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center">

                            Belum ada aktivitas.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        {{ $activityLogs->links() }}

    </div>

</div>

@endsection
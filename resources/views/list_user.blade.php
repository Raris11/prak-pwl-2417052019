@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="container pt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Tutup"></button>
        </div>
    </div>
@endif

    <div class="container py-5">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div>
                <span class="badge text-bg-primary mb-2">Manajemen Pengguna</span>
                <h1 class="fw-bold mb-1">Daftar Pengguna</h1>
                <p class="text-muted mb-0">
                    Kelola data mahasiswa dan lihat kelas masing-masing.
                </p>
            </div>

            <a href="{{ route('user.create') }}" class="btn btn-primary px-4">
                + Tambah Pengguna
            </a>
        </div>

        <x-user-table :users="$users" />

        <p class="text-muted small mt-3">
            Total pengguna: <strong>{{ $users->count() }}</strong>
        </p>
    </div>
@endsection
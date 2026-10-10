@extends('layouts.app')

@section('content')

<div class="container py-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold mb-1">Daftar Mata Kuliah</h1>
            <p class="text-muted mb-0">
                Kelola data mata kuliah pada sistem PWL.
            </p>
        </div>

        <a href="{{ url('/mata_kuliah/create') }}"
           class="btn btn-primary">
            + Tambah Mata Kuliah
        </a>

    </div>


    {{-- Notifikasi sukses --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show"
             role="alert">

            <strong>Berhasil!</strong>
            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- Notifikasi error --}}
    @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show"
             role="alert">

            <strong>Gagal!</strong>
            {{ session('error') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- Card tabel --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>
                            <th class="px-4 py-3">ID</th>
                            <th class="py-3">Nama Mata Kuliah</th>
                            <th class="py-3">SKS</th>
                            <th class="py-3">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($mks as $mk)

                            <tr>

                                <td class="px-4">
                                    <span class="badge text-bg-primary">
                                        {{ $mk->id }}
                                    </span>
                                </td>

                                <td>
                                    <span class="fw-semibold">
                                        {{ $mk->nama_mk }}
                                    </span>
                                </td>

                                <td>
                                    <span class="badge text-bg-secondary">
                                        {{ $mk->sks }} SKS
                                    </span>
                                </td>

                                <td>

                                    <div class="d-flex gap-2">

                                        {{-- Edit --}}
                                        <a href="{{ route('mata_kuliah.edit', $mk->id) }}"
                                           class="btn btn-sm btn-warning">
                                            Edit
                                        </a>


                                        {{-- Hapus --}}
                                        <form action="{{ route('mata_kuliah.destroy', $mk->id) }}"
                                              method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">

                                                Hapus

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="4"
                                    class="text-center py-5 text-muted">

                                    Belum ada data mata kuliah.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
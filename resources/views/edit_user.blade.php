
@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="mb-4">
            <span class="badge text-bg-primary mb-2">Manajemen Pengguna</span>
            <h1 class="fw-bold mb-1">Edit Pengguna</h1>
            <p class="text-muted mb-0">
                Perbarui data mahasiswa sesuai informasi terbaru.
            </p>
        </div>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
                <form action="{{ route('user.update', $user->id) }}"
                      method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label">
                            Nama Pengguna
                        </label>
                        <input type="text"
                               name="nama"
                               id="nama"
                               class="form-control @error('nama') is-invalid @enderror"
                               value="{{ old('nama', $user->nama) }}"
                               required>

                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text"
                               name="npm"
                               id="npm"
                               class="form-control @error('npm') is-invalid @enderror"
                               value="{{ old('npm', $user->nim) }}"
                               required>

                        @error('npm')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label">Kelas</label>
                        <select name="kelas_id"
                                id="kelas_id"
                                class="form-select @error('kelas_id') is-invalid @enderror"
                                required>
                            <option value="">-- Pilih Kelas --</option>

                            @foreach ($kelas as $item)
                                <option value="{{ $item->id }}"
                                    {{ (string) old('kelas_id', $user->kelas_id) === (string) $item->id ? 'selected' : '' }}>
                                    Kelas {{ $item->nama_kelas }}
                                </option>
                            @endforeach
                        </select>

                        @error('kelas_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4">
                            Simpan Perubahan
                        </button>

                        <a href="{{ route('user.index') }}"
                           class="btn btn-secondary">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container">

        {{-- Logo / Brand --}}
        <a class="navbar-brand fw-bold"
           href="{{ route('user.index') }}">
            PWL User
        </a>

        {{-- Menu --}}
        <div class="navbar-nav ms-auto">

            <a class="nav-link"
               href="{{ route('user.index') }}">
                Daftar Pengguna
            </a>

            <a class="nav-link"
               href="{{ route('user.create') }}">
                Tambah Pengguna
            </a>

            <a class="nav-link"
               href="{{ url('/mata_kuliah') }}">
                Mata Kuliah
            </a>

            <a class="nav-link"
               href="{{ url('/mata_kuliah/create') }}">
                Tambah Mata Kuliah
            </a>

        </div>

    </div>
</nav>
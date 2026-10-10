
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4 py-3">No.</th>
                        <th class="py-3">Nama Pengguna</th>
                        <th class="py-3">NPM</th>
                        <th class="py-3">Kelas</th>
                        <th class="py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td class="ps-4 py-3">
                                {{ $loop->iteration }}
                            </td>
                            <td class="fw-semibold">
                                {{ $user->nama }}
                            </td>
                            <td>{{ $user->nim }}</td>
                            <td>
                                <span class="badge rounded-pill text-bg-primary px-3">
                                    Kelas {{ $user->nama_kelas }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('user.destroy', $user->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5"
                                class="text-center text-muted py-5">
                                Belum ada pengguna. Klik “Tambah Pengguna”
                                untuk menambahkan data.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

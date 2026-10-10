@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            {{-- Header --}}
            <div class="mb-4">

                <h1 class="fw-bold mb-1">
                    Edit Mata Kuliah
                </h1>

                <p class="text-muted mb-0">
                    Perbarui informasi mata kuliah yang dipilih.
                </p>

            </div>


            {{-- Form Card --}}
            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <form action="{{ route('mata_kuliah.update', $mk->id) }}"
                          method="POST">

                        @csrf
                        @method('PUT')


                        {{-- Nama Mata Kuliah --}}
                        <div class="mb-3">

                            <label for="nama_mk"
                                   class="form-label fw-semibold">

                                Nama Mata Kuliah

                            </label>

                            <input type="text"
                                   id="nama_mk"
                                   name="nama_mk"
                                   class="form-control"
                                   value="{{ $mk->nama_mk }}"
                                   required>

                        </div>


                        {{-- SKS --}}
                        <div class="mb-4">

                            <label for="sks"
                                   class="form-label fw-semibold">

                                SKS

                            </label>

                            <input type="number"
                                   id="sks"
                                   name="sks"
                                   class="form-control"
                                   value="{{ $mk->sks }}"
                                   min="1"
                                   max="6"
                                   required>

                            <div class="form-text">
                                SKS harus berada antara 1 sampai 6.
                            </div>

                        </div>


                        {{-- Button --}}
                        <div class="d-flex gap-2">

                            <a href="{{ url('/mata_kuliah') }}"
                               class="btn btn-secondary">

                                Kembali

                            </a>

                            <button type="submit"
                                    class="btn btn-primary">

                                Simpan Perubahan

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
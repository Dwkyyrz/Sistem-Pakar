@extends('layouts.dashboard')
@section('title', 'Relasi')
@section('content')
    <div class="row">
        <div class="d-flex align-items-center gap-2 justify-content-lg-end">
            <a href="{{ route('master-data.relasi.tambah') }}" class="btn btn-primary px-4 float-end"><i class="bi bi-plus-lg me-2"></i>Tambah Relasi</a>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <div class="product-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Kode Penyakit</th>
                                <th>Kode Gejala</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($relasis as $relasi)
                                <tr>
                                    <td>{{ $relasi->gejala_id }}</td>
                                    <td>{{ $relasi->kerusakan_id }}</td>
                                    <td>Hapus</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

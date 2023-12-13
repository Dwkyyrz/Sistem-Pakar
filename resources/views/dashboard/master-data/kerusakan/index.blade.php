@extends('layouts.dashboard')
@section('title', 'Kerusakan')
@section('content')
    <div class="row">
        <div class="d-flex align-items-center gap-2 justify-content-lg-end">
            <a href="{{ route('master-data.kerusakan.tambah') }}" class="btn btn-primary px-4 float-end"><i class="bi bi-plus-lg me-2"></i>Tambah Kerusakan</a>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <div class="product-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kerusakans as $kerusakan)
                                <tr>
                                    <td>{{ $kerusakan->kode_kerusakan }}</td>
                                    <td>{{ $kerusakan->nama_kerusakan }}</td>
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

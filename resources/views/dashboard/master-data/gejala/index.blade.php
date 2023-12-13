@extends('layouts.dashboard')
@section('title', 'Gejala')
@section('content')
    <div class="row">
        <div class="d-flex align-items-center gap-2 justify-content-lg-end">
            <a href="{{ route('master-data.gejala.tambah') }}" class="btn btn-primary px-4 float-end"><i class="bi bi-plus-lg me-2"></i>Tambah Gejala</a>
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
                            @foreach ($gejalas as $gejala)
                                <tr>
                                    <td>{{ $gejala->kode_gejala }}</td>
                                    <td>{{ $gejala->nama_gejala }}</td>
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

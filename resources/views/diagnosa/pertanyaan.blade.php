@extends('layouts.forms')
@section('title', 'Diagnosa')
@section('content')
    <form method="POST" action="{{ route('diagnosa.pertanyaan.store') }}" class="row g-3">
        @csrf
        <div class="product-table">
            <div class="table-responsive white-space-nowrap">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Ya</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gejalas as $gejala)
                            <tr>
                                <td>{{ $gejala->kode_gejala }}</td>
                                <td>{{ $gejala->nama_gejala }}</td>
                                <td>
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input" style="border: 2px solid" type="checkbox" name="gejala[]" value={{ $gejala->kode_gejala }}>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <button type="submit" class="btn btn-primary px-4">Cek</button>
    </form>
@endsection

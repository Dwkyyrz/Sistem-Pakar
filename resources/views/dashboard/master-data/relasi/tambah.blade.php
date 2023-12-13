@extends('layouts.dashboard')
@section('title', 'Tambah Relasi')
@section('content')
    <form method="POST" action="{{ route('master-data.relasi.tambah.post') }}">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <h5 class="mb-3">Kerusakan</h5>
                    <select class="form-select" id="single-select-field" name="kerusakan">
                        @foreach ($kerusakans as $kerusakan)
                        <option value="{{ $kerusakan->kode_kerusakan }}">{{ $kerusakan->kode_kerusakan }} - {{ $kerusakan->nama_kerusakan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <h5 class="mb-3">Gejala</h5>
                    <select class="form-select" id="multiple-select-field" name="gejala[]" multiple>
                        @foreach ($gejalas as $gejala)
                            <option value="{{ $gejala->kode_gejala }}">{{ $gejala->kode_gejala }} - {{ $gejala->nama_gejala }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary float-end">Tambah Relasi</button>
            </div>
        </div>
    </form>
@endsection
@push('custom-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css">
@endpush
@push('custom-js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/plugins/select2/js/select2-custom.js') }}"></script>
@endpush

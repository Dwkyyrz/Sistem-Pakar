@extends('layouts.dashboard')
@section('title', 'Tambah Gejala')
@section('content')
    <form method="POST" action="{{ route('master-data.gejala.tambah.post') }}">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <h5 class="mb-3">Kode Gejala</h5>
                    <input type="text" class="form-control" name="kode">
                </div>
                <div class="mb-4">
                    <h5 class="mb-3">Nama Gejala</h5>
                    <textarea class="form-control" cols="4" rows="6" name="nama"></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-end">Tambah Gejala</button>
            </div>
        </div>
    </form>
@endsection

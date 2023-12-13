@extends('layouts.forms')
@section('title', 'Hasil Diagnosa')
@section('content')
    <h6 class="mb-4 text-uppercase">Identitas</h6>
    <ul class="list-group list-group-flush">
        <li class="list-group-item border-top">
            <b>Nama</b>
            <br>
            {{ $nama }}
        </li>
        <li class="list-group-item border-top">
            <b>Kelamin</b>
            <br>
            {{ $kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}
        </li>
        <li class="list-group-item border-top">
            <b>Alamat</b>
            <br>
            {{ $alamat }}
        </li>
        <li class="list-group-item border-top">
            <b>Pekerjaan</b>
            <br>
            {{ $pekerjaan }}
        </li>
    </ul>
    <h6 class="mb-0 mt-5 text-uppercase">Hasil Diagnosa</h6>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama Penyakit</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $penyakit->kode_kerusakan }}</th>
                <td>{{ $penyakit->nama_kerusakan }}</td>
            </tr>
        </tbody>
    </table>
    <h6 class="mb-0 mt-5 text-uppercase">Gejala</h6>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama Gejala</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($gejalas as $gejala)
            <tr>
                <th scope="row">{{ $gejala->kode_gejala }}</th>
                <td>{{ $gejala->nama_gejala }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('diagnosa.index') }}" class="btn btn-primary float-end mt-5">Kembali</a>
@endsection

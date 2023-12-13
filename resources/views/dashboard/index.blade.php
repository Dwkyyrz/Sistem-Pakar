
@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="card mt-4">
        <div class="card-body">
            <h5>Hasil Diagnosa</h5>
            <div class="product-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Kelamin</th>
                                <th>Alamat</th>
                                <th>Pekerjaan</th>
                                <th>kerusakan_id</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($history as $diagnosa)
                                <tr>
                                    <td>{{ $diagnosa->nama }}</td>
                                    <td>{{ $diagnosa->kelamin }}</td>
                                    <td>{{ $diagnosa->alamat }}</td>
                                    <td>{{ $diagnosa->pekerjaan }}</td>
                                    <td>{{ $diagnosa->kerusakan_id }}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.forms')
@section('title', 'Diagnosa')
@section('content')
    <form method="POST" action="{{ route('diagnosa.index.store') }}" class="row g-3">
        @csrf
        <div class="col-md-12">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required {{ isset($nama) ? 'value=' . $nama : '' }}>
        </div>
        <div class="col-md-12 mt-4">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" required>
                <label class="form-check-label" for="jenis_kelamin">
                    Laki - Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" required>
                <label class="form-check-label" for="jenis_kelamin">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ isset($alamat) ? $alamat : '' }}</textarea>
        </div>
        <div class="col-md-12 mt-4">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required {{ isset($pekerjaan) ? 'value=' . $pekerjaan : '' }}>
        </div>
        <button type="submit" class="btn btn-primary px-4">Selanjutnya</button>
    </form>
@endsection

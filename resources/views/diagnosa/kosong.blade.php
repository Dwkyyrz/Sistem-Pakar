@extends('layouts.forms')
@section('title', 'Hasil Diagnosa')
@section('content')
<div class="mb-4 text-uppercase">
    Tidak ada penyakit yang cocok dengan gejala yang diberikan.
</div>
<a href="{{ session('_previous.url') }}" class="btn btn-primary float-end">Kembali</a>
@endsection

@extends('layouts.forms')
@section('title', 'Masuk')
@section('content')
    <form method="POST" action="{{ route('login') }}" class="row g-3">
        @csrf
        <div class="col-12">
            <label for="inputEmailAddress" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com">
        </div>
        <div class="col-12">
            <label for="inputChoosePassword" class="form-label">Password</label>
            <div class="input-group" id="show_hide_password">
                <input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password"
                    placeholder="Enter Password">
                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
            </div>
        </div>
        <div class="col-12">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
@endsection

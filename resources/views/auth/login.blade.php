@extends('auth.layout')

@section('content')

<div class="card-body">
    <h5 class="card-title text-center">Login</h5>
    <form action="{{route('createLogin')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <p>Belum punya akun? <a href="/registrasi" class="text-reset text-decoration-none" style="">Silahkan registrasi dulu</a></p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
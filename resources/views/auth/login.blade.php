@extends('layouts.main')
@section('content')
<form class="login-form" action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="" class="form-control">
    </div>
    <button class="btn btn-primary">Login</button>
</form>


@endsection

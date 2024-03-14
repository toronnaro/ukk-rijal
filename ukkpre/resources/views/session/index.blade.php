@extends('layout/application')

@section('content')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        @csrf
        <div class="mb3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        @csrf
        <div class="mb3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
@endsection

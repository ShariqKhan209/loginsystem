@extends('layout')
@section('title', 'Login')
@section('content')
    @include('include.navbar')
    <h1 class="mt-3" style="text-align: center">Login to our website</h1>
    <div class="container mt-3" style="width: 500px">
        <form action={{route('login.post')}} method="POST">
          @csrf
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

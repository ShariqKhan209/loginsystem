@extends('layout')
@section('title', 'Registration')
@section('content')
    @include('include.navbar')
    <h1 class="mt-3" style="text-align: center">Signup to our website</h1>
    <div class="container mt-3" style="width: 500px">
      
      <div class="mt-5">
        @if ($errors->any())
          <div class="col-12">
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">
                {{$error}}
              </div>
            @endforeach
          </div>
        @endif
      </div>
      
        <form action={{route('registration.post')}} method="POST">
          @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="name">
              </div>
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

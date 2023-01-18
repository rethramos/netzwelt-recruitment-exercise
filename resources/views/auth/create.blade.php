@extends('layouts.app')
@section('content')
  <h1>Log in</h1>
  <div class="card">
    <form action="{{ route('auth.store') }}" method="post" class="card-body">
      @isset($message)
        <div class="alert alert-danger" role="alert">{{$message}}</div>
      @endisset
      @csrf
      <div class="mt-2">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control">
      </div>
      <div class="mt-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary mt-2 float-end">Log in</button>
    </form>
  </div>
@endsection
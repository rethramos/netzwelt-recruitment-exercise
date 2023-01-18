@extends('layouts.app')
@section('content')
  <form action="{{ route('auth.store') }}" method="post">
    @isset($message)
      <span>{{$message}}</span>
    @endisset
    @csrf
    <div>
      <label for="username">Username</label>
      <input type="text" name="username" id="username">
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
    </div>
    <button type="submit">Log in</button>
  </form>
@endsection
@extends('layouts.app')
@section('content')
  <h1>Territories</h1>
  <p>Here are the list of territories</p>

  <ul class="toggle-list">
    <toggle-list-item :tree-nodes="{{json_encode($roots)}}"/>
  </ul>
@endsection
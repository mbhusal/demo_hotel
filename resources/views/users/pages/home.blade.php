@extends('users.layouts.template')
@section('content')
<div class="row">
@foreach ($room as $key => $r)
    <div class="col-md-4">
<div class="card">
  <div class="card-header">
    {{ $key }}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $key }}</h5>
    <p class="card-text">To book the room of this type</p>
    <a href="{{route('roomtype',$key)}}" class="btn btn-primary">Go to {{ $key }}</a>
  </div>
</div>
</div>
@endforeach
</div>
@endsection()
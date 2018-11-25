@extends('users.layouts.template')
@section('content')
<div class="row">
  @if($room)
  @foreach($room as $r)
<div class="col-md-4">
<div class="card">
  <div class="card-header">
    {{$r->roomtype}}
  </div>
  <div class="card-body">
    <h5 class="card-title">Room No. : {{$r->roomno}} ,  Cost : {{$r->cost}}</h5>
    <p class="card-text">{{$r->facilites}}</p>
    @if($r->status == 'Booked')
        <a href="#" class="btn btn-danger">Already Booked</a>
    @else
        <a href="{{route('bookroom', $r->id)}}" class="btn btn-primary">Book Now</a>
    @endif
    
  </div>
</div>
</div>
@endforeach()
@endif
</div>
@endsection()
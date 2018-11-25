@extends('owners.layouts.template')
@section('content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Roomtype: {{$room->roomtype}}</h5>
    <p class="card-text">Facilities: {{$room->facilites}}</p>
    <p class="card-text">Cost: {{$room->cost}}</p>
    <p class="card-text">Status: {{$room->status}}</p>
    <p class="card-text">Room Number: {{$room->roomno}}</p>
    <p class="card-text">Bed Number: {{$room->bedno}}</p>
    <a href="{{route('rooms')}}" class="btn btn-primary">View Other Rooms</a>
  </div>
</div>
@endsection
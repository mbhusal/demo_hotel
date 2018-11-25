@extends('owners.layouts.template')
@section('content')
@if($rooms)
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Costumer Name</th>
      <th scope="col">Costumer Email</th>
      <th scope="col">Arrival Date</th>
      <th scope="col">Depert</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rooms as $r)
    <tr>
      <td>{{$r->name}}</td>
      <td>{{$r->email}}</td>
      <td>{{$r->arrival}}</td>
      <td>{{$r->deprt}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@else
<p>No Rooms In Your Hotel.</p>
@endif
@endsection
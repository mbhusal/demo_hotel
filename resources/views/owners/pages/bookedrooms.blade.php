@extends('owners.layouts.template')
@section('content')

@if($rooms)
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Room No</th>
      <th scope="col">Costumer Name</th>
      <th scope="col">Costumer Email</th>
      <th scope="col">Arrival Date</th>
      <th scope="col">Depert</th>
      <th scope="col">No. of People</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rooms as $r)
    <tr>
      <th>{{$r->room()}}</th>
      <td>{{$r->name}}</td>
      <td>{{$r->email}}</td>
      <td>{{$r->arrival}}</td>
      <td>{{$r->deprt}}</td>
      <td>{{$r->nos}}</td>
      <td>{{$r->contactno}}</td>
      
      <td>
        <a href="{{route('freerooms',$r->id)}}"> 
          <span class="badge badge-primary">Completed</span></a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@else
<p>No Rooms In Your Hotel.</p>
@endif
@endsection
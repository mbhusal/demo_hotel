@extends('owners.layouts.template')
@section('content')
<br>
<div class="container">
<form method="post" action="{{route('updaterooms')}}">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$room->id}}">
    <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1" name="roomtype">
      <option name = "{{$room->roomtype}}">{{$room->roomtype}}</option>
      <option name = "Standard">Standard</option>
      <option name = "Superior">Superior</option>
      <option name="Deluxe">Deluxe</option>
    </select>
  </div>

  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" class="facilites" placeholder="Enter all the Facilities" name="facilites">
      {{$room->facilites}}
    </textarea>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Cost per Night" name="cost" value=" {{$room->cost}}">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter No of beds available" name="bedno" value=" {{$room->bedno}}">
  </div>

    <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1" name="status">
      <option name = "{{$room->status}}">{{$room->status}}</option>
      <option>Available</option>
      <option>Booked</option>
    </select>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Room Number" name="roomno"  value="{{$room->roomno}}">
  </div>

 <div class="form-group">
<button type="submit" class="btn btn-danger" >Update Rooms</button>
</div>

</form>
</div>
@endsection
@extends('owners.layouts.template')
@section('content')
<br>
<div class="container">
<form method="post" action="{{route('storerooms')}}">
{{csrf_field()}}
    <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1" name="roomtype">
      <option>Select Room Type</option>
      <option name = "Standard">Standard</option>
      <option name = "Superior">Superior</option>
      <option name="Deluxe">Deluxe</option>
    </select>
  </div>

  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" class="facilites" placeholder="Enter all the Facilities" name="facilites"></textarea>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Cost per Night" name="cost">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter no. of beds Available" name="bedno">
  </div>

    <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1" name="status">
       <option>Select Status</option>
      <option>Available</option>
      <option>Booked</option>
    </select>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Room Number" name="roomno">
  </div>

 <div class="form-group">
<button type="submit" class="btn btn-danger" >Add Rooms</button>
</div>

</form>
</div>
@endsection
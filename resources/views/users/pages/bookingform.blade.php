@extends('users.layouts.template')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="post" action="{{route('bookedrooms')}}">
  {{csrf_field()}}
  <input type="hidden" value="{{$id}}" name="room_id">
  <div class="form-group">
    <label for="exampleFormControlInput1">Your Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name" name="name" value="{{old('name')}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Arrival Date</label>
    <input type="Date" class="form-control" id="exampleFormControlInput1" placeholder="Arrival Date" name="arrival" value="{{old('arrival')}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Deperture Date</label>
    <input type="Date" class="form-control" id="exampleFormControlInput1" placeholder="Deperture Date" name="deprt" value="{{old('deprt')}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">No of People</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder ="{{$bedno}}" value="{{$bedno}}" name="nos">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Contact Number</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contact Number" name="contactno" value="{{old('contactno')}}">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{old('email')}}">
  </div>

 <div class="form-group">
<button type="submit" class="btn btn-danger" >Book Rooms</button>
</div>

</form>
@endsection()
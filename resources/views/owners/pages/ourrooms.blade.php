@extends('owners.layouts.template')
@section('content')
<div style="float: right; padding: 5px;">
<button type="button" class="btn btn-primary"><a href="{{route('addrooms')}}" style="color: white;">Add Rooms</a></button>
<button type="button" class="btn btn-success"><a href="{{route('bookedrooms')}}" style="color: white;">Booked Rooms</a></button>
</div>
@if($rooms)
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Room Type</th>
      <th scope="col">Cost(per night)</th>
      <th scope="col">Status</th>
      <th scope="col">Room No.</th>
      <th scope="col">No. of Beds</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rooms as $r)
    <tr>
      <th>{{$r->roomtype}}</th>
      <td>{{$r->cost}}</td>
      <td>{{$r->status}}</td>
      <td>{{$r->roomno}}</td>
      <td>{{$r->bedno}}</td>
      <td>
        <a href="{{route('editrooms',$r->id)}}"> 
          <span class="badge badge-primary">Edit</span></a>
        <a href="{{route('viewrooms',$r->id)}}"> 
          <span class="badge badge-success">View Details</span>
        </a>
        <a onclick="return confirm('Are you sure?')" href="{{route('deleterooms',$r->id)}}"><span class="badge badge-danger">Delete</span></a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@else
<p>No Rooms In Your Hotel.</p>
@endif
@endsection

@section('footer_script')
      <script type="text/javascript">
         $('.delete_me').click(function(e){
                e.preventDefault();

                      if(!confirm('Are you Sure you want to delete selected room?')){
                            return false;
                        }
                        else{
                      
                          $('#myform').submit();
                        }

            
            });
         </script>
@endsection
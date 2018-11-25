<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Room;
use App\Booked_room;

use App\Repositories\Repository;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;

class OwnersController extends Controller
{


    protected  $model;

    public function __construct(Room $room)
    {
        $this->middleware('auth');
        $this->model = new Repository($room);
    }

    public function addrooms()
    {
         return view('owners.pages.rooms.addrooms');
    }
    

    public function storerooms(RoomRequest $request)
    {

        // dd($request);

         $this->model->create($request->only($this->model->getModel()->fillable));

         return redirect()->route('rooms');
    }

    public function editrooms($id)
    {
        $room = Room::findOrFail($id);

        return view('owners.pages.rooms.editrooms', compact('room'));
    }

    public function updaterooms(RoomRequest $request)
    {

        $this->model->update($request->only($this->model->getModel()->fillable), $request->id);

        return redirect()->route('rooms');
    }

    public function deleterooms($id)
    {
        $this->model->delete($id);

        return redirect()->route('rooms');
    }

    public function dashboard()
    {
         return view('owners.pages.dashboard');
    }


    public function rooms()
    {
        $rooms = $this->model->all();

        return view('owners.pages.ourrooms', compact('rooms'));
    }


    public function bookedrooms()
    {
        $rooms = Booked_room::where(['status'=>'0'])->get();
        return view('owners.pages.bookedrooms',compact('rooms'));
    }


    public function viewrooms($id)
    {
        $room = $this->model->show($id);
        return view('owners.pages.rooms.viewrooms', compact('room'));
    }


    public  function freerooms($id)
      {
        $data = Booked_room::findOrFail($id);

        $ourrooms = Room::find($data->room_id);
        $booking = Booked_room::find($id);

        $ourrooms->status = 'Available';
        $booking->status = '1';

        $ourrooms->save();
        $booking->save();

        return view('owners.pages.dashboard');
            
      }


      public function ourcostumer()
      {

        $rooms = Booked_room::where('status', 1)->get();

        return view('owners.pages.ourcostumer',compact('rooms'));
      }

}

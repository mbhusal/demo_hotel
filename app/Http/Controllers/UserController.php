<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Booked_room;
use Carbon\Carbon;

use App\Http\Requests\BookingRequest;


class UserController extends Controller
{

    public function home()
    {

      $room = Room::all()->groupBy('roomtype');

    	return view('users.pages.home', compact('room'));
    }

    public function selectedtype($data)
    {
    	$room = Room::where('roomtype', $data)->get();

    	return view('users.pages.roomtype', compact('room'));
    }

    public function bookroom($id)
    {
      $bedno = Room::where('id', $id)->first()->bedno;
    	return view('users.pages.bookingform', compact('id', 'bedno'));
    }

    private function generateDateRange(Carbon $start_date, Carbon $end_date)

    {

        $dates = [];

        for($date = $start_date; $date->lte($end_date); $date->addDay()) {

            $dates[] = $date->format('Y-m-d');

        }

        // dd($dates);

        return $dates;

    }

    public function bookedrooms(BookingRequest $request)
    {

         // $request_date = $request->arrival;
         // dd($request_date);
         // $booked_rooms = Booked_room::where('status',0)->pluck('deprt');
         // dd($request->all());
//
      $room = Room::where('id', $request->room_id)->first();

//       foreach ($book as $p) {

//         $frY = $p->arrival->format('Y');

//         $frm = $p->arrival->format('m');

//         $frd = $p->arrival->format('d');

//         $from = Carbon::createFromDate($frY, $frm, $frd);


//         $toY = $p->deprt->format('Y');

//         $tom = $p->deprt->format('m');

//         $tod = $p->deprt->format('d');

//         $to = Carbon::createFromDate($toY, $tom, $tod);

//         $dates[] = $this->generateDateRange($from, $to); 

//         $date[]=  array_merge($date , $dates);

//       }

//       $result = [];
//       foreach($date as $d)
//       {
//         $result[] = $d;
//       }







//       for ($i = 0; $i < count($dates); $i++) {
//         if($i = 0){
//            $d= $dates[$i];
//         }else{
//           $data[]=array_merge($dates[$i], $d);
//         }
//       }


// dd($data);

      if($room->bedno < $request->nos){
        return redirect()->back()->withErrors(['Numbers of people exceed the no of beds, so please check other rooms or book this room for few of you and book other room for other. ']);
      }

           $booking = new Booked_room;          

           $booking->room_id = $request->room_id;
           $booking->name = $request->name;
           $booking->arrival = $request->arrival;
           $booking->deprt = $request->deprt;
           $booking->nos = $request->nos;
           $booking->contactno = $request->contactno;
           $booking->email = $request->email;

           $ourrooms = Room::find($request->room_id);
          $ourrooms->status = 'Booked';
// dd('fmds');
          $ourrooms->save();
            $booking->save();

          return redirect()->route('home');


 }
}

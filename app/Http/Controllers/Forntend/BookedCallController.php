<?php

namespace App\Http\Controllers\Forntend;
use App\Models\BookingCall;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookedCallController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    
    
      return view('forntend.Call.bookedCallForm');

    
    }
    public function storeSheduleCall(Request $request)
    {
       $time =  $request->date.' '.$request->time;
       $bookingCall = new BookingCall;
       $bookingCall->date_time = $time;
       $bookingCall->save();
       return redirect('bookedCall');


    
    }
}

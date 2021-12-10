<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingCall;

class CallController extends Controller
{
    public function index()
    {
        $bookingCalls = BookingCall::get();
            return view('backend.bookingCall.bookingtable',compact('bookingCalls'));
    }   
}

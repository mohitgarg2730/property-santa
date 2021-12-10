<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingCall;

class DashboradController extends Controller
{
 
    public function index()
    {
        return view('backend.Dashborad.dashborad');
    }   
    public function bookingCall()
    {
        
        return view('backend.Dashborad.dashborad');
    }   
}

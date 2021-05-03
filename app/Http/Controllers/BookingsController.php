<?php

namespace App\Http\Controllers;

use App\Bookings;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index(){
      $bookings =Bookings::all();
     return view('index',compact('bookings'));
    }
}

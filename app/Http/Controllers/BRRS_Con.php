<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking_model_2;

class BRRS_Con extends Controller
{
    function save(Request $req)
    {
        //print_r($req->input());
        $booking_model_2=new booking_model_2;
        
        $booking_model_2->user_name=$req->user_name;
        $booking_model_2->select_broom=$req->select_broom;
        $booking_model_2->department=$req->department;
        $booking_model_2->no_of_members=$req->no_of_members;
        $booking_model_2->purpose=$req->purpose;
        $booking_model_2->Refreshments=$req->Refreshments;
        $booking_model_2->Pickup_Date=$req->Pickup_Date;
        $booking_model_2->hour_start_time=$req->hour_start_time;
        $booking_model_2->min_start_time=$req->min_start_time;
        $booking_model_2->am_pm_start_time=$req->am_pm_start_time;
        $booking_model_2->hour_end_time=$req->hour_end_time;
        $booking_model_2->min_end_time=$req->min_end_time;
        $booking_model_2->am_pm_end_time=$req->am_pm_end_time;
        $booking_model_2->hour_serve_time=$req->hour_serve_time;
        $booking_model_2->min_serve_time=$req->min_serve_time;
        $booking_model_2->am_pm_serve_time=$req->am_pm_serve_time;

        $booking_model_2->save();
       return redirect()->route('bookings.index');
    }
}

<?php

namespace App\Http\Controllers\Guide;

use App\Http\Controllers\Controller;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::where("user_id",auth()->id())->where("status_payment",1)->get();
        return view("guide.booking", compact("bookings"));
    }

    public function update(Booking $destinationGuideBook)
    {
        $destinationGuideBook->update(["status" => 1]);
        return redirect()->route("destinationGuideBook.index");
    }
}

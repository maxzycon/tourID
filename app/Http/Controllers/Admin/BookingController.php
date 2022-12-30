<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view("admin.booking.index", compact("bookings"));
    }

    public function update(Booking $bookingAdmin)
    {
        $bookingAdmin->update([
            "status_payment" => 1
        ]);
        return redirect()->route("bookingAdmin.index");
    }
}

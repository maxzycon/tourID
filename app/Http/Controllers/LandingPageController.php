<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Destination;
use App\Models\Province;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        $provinsi = Province::get();
        return view("welcome", compact("destinations","provinsi"));
    }

    public function detail(Destination $destination)
    {
        return view("detail",compact("destination"));
    }

    public function store(Request $request)
    {
        $split = explode("-",$request->post("user_id"));
        Booking::create([
            "user_id" => $split[0],
                "grandTotal" => $split[1]
        ] + $request->all());
        return redirect()->route("home")->with("success","berhasil melakukan pembayaran");
    }
}

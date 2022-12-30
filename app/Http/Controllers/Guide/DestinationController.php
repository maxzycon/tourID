<?php

namespace App\Http\Controllers\Guide;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view("guide.destination", compact("destinations"));
    }

    public function store(Request $request)
    {
        $cnt = Destination::findOrFail($request->post("destination_id"))->guide->where("id", auth()->id())->count();
        if ($cnt > 0){
            return redirect()->route("destinationGuide.index")->with("info","Sudah terdaftar");;
        }else{
            Destination::findOrFail($request->post("destination_id"))->guide()->attach(auth()->id(),[
                "price" => $request->post("harga"),
                "status" => 1,
            ]);
            return redirect()->route("destinationGuide.index")->with("success","Berhasil daftar destinasi");
        }
    }
}

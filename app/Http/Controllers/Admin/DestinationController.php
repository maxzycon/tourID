<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\District;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        return view("admin.destination.index");
    }

    public function create()
    {
        $districts = District::pluck("name","id");
        return view("admin.destination.create",compact("districts"));
    }

    public function store(Request $request)
    {
        Destination::create($request->all() + [
            "destinationSlug" => \Str::slug($request->post("destinationName"))
        ]);
        return redirect()->route("destination.index");
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}

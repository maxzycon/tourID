<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        return view("admin.promo.index");
    }

    public function create()
    {
        return view("admin.promo.create");
    }

    public function store(Request $request)
    {
        Promo::create($request->all());
        return redirect()->route("promo.index");
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

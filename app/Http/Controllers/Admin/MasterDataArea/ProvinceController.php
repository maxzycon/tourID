<?php

namespace App\Http\Controllers\Admin\MasterDataArea;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        return view("admin.master_data_area.province.index");
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, Province $province)
    {
    }

    public function destroy($id)
    {
    }
}
